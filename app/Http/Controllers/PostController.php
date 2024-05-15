<?php

namespace App\Http\Controllers;

// import model "post"
use App\Models\Post;
use Illuminate\Contracts\View\View as ViewView;
//retrun type view
use Illuminate\View\View;

//retrun type redirectResponse
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index(): View
    {
        //get post
        $posts = Post::latest()->paginate(5);

        //render view with posts
        return view('posts.index', compact('posts'));
    }

    public function create(): View
    {
        return view('posts.create');
    }

    
    public function store(Request $request): RedirectResponse
    {
        //validate from
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required|min:5',
            'content' => 'required|min:10'
        ]);
        
        //upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        //crate post
        Post::create([
            'image' => $image->hashName(),
            'title' => $request->title,
            'content' => $request->content
        ]);

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //render view with post
        return view('posts.show', compact('post'));
    }

    public function destroy($id): RedirectResponse
    {
    // Get post by ID
    $post = Post::findOrFail($id);

    // Delete image
    Storage::delete('public/posts/' . $post->image);

    // Delete post
    $post->delete();

    // Redirect to index
    return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Dihapus!']);

    }

    public function edit(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);

         //render view with post
         return view('posts.edit', compact('post'));
    } 

    public function update(Request $request, $id): RedirectResponse
    {
        // Validate form
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,jpg,png|max:2048', 
            'title' => 'required|min:5',
            'content' => 'required|min:10'
        ]);
        
        // Get post by ID
        $post = Post::findOrFail($id);
        
        // Check if image is uploaded
        if ($request->hasFile('image')) {
            
            // Upload new image
            $image = $request->file('image');
            $imagePath = $image->storeAs('public/posts', $image->hashName());
            
            // Delete old image 
            Storage::delete('public/posts/' . $post->image);
            
            // Update post with new image
            $post->update([
                'image' => $image->hashName(), 
                'title' => $request->title, 
                'content' => $request->content
            ]);
        } else {
            // Update post without image
            $post->update([
                'title' => $request->title, 
                'content' => $request->content
            ]);
        }
        
        // Redirect to index
        return redirect()->route('posts.index')->with('success', 'Data Berhasil Diubah!');
    }

}
