<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/belajar', function() {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang belajar Laravel</p>';
});

Route::get('/siswa/rpl/amel', function() {
    echo '<h2 style="text-align: center"><u> Welcome to Laravel, Sherlyta Amelya</u></h2>';
});

Route::get('/data_guru', function () {
    return view('/products/data_guru');
});

Route::get('/data_siswa', function () {
    return view('/products/data_siswa');
});

Route::get('/data_siswa1', function () {
    return view('/products/data_siswa1');
});