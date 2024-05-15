@extends('layouts.main')

@section('content')

<div class="container mt-3">
    <h2>Data Siswa RPL C</h2>
    
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th class="text-center" rowspan="2">No</th>
                <th class="text-center" rowspan="2">Profile</th>
                <th class="text-center" rowspan="2">Nama</th> 
                <th class="text-center" rowspan="2">NIS</th>
                <th class="text-center" colspan="3">Alamat</th>
            </tr>
            <tr>
                <th class="text-center">Desa</th>
                <th class="text-center">Kecamatan</th>
                <th class="text-center">Kabupaten</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><img src="{{ asset('img/dito.jpg') }}" alt="..." style="width: 200px"></td>
                <td>Nandito Bagus Aria Ditama</td>
                <td class="text-center">7302</td>
                <td>Kerjo</td>
                <td>Karangan</td>
                <td>Trenggalek</td>
            </tr>
            <tr>
                <td>2</td>
                <td><img src="{{ asset('img/niklas.jpg') }}" alt="..." style="width: 200px"></td>
                <td>Nikolas Maulana Aziz Saputra</td>
                <td class="text-center">7305</td>
                <td>Suruh</td>
                <td>Suruh</td>
                <td>Trenggalek</td>
            </tr>
            <tr>
                <td>3</td>
                <td><img src="{{ asset('img/pras.jpg') }}" alt="..." style="width: 200px"></td>
                <td>Prasetya Kurnia Agustian</td>
                <td class="text-center">7308</td>
                <td>Nglinggis</td>
                <td>Tugu</td>
                <td>Trenggalek</td>
            </tr>
            <tr>
                <td>4</td>
                <td><img src="{{ asset('img/niklas.jpg') }}" alt="..." style="width: 200px"></td>
                <td>Sherlyta Amelya</td>
                <td class="text-center">7322</td>
                <td> Tegaren</td>
                <td>Tugu</td>
                <td>Trenggalek</td>
            </tr>
            <tr>
                <td>5</td>
                <td><img src="{{ asset('img/sinta.jpg') }}" alt="..." style="width: 200px"></td>
                <td>Sinta Suwito Puteri</td>
                <td class="text-center">7322</td>
                <td> Sambirejo</td>
                <td>Trenggalek</td>
                <td>Trenggalek</td>
            </tr>
            <tr>
                <td>6</td>
                <td><img src="{{ asset('img/sisca.jpg') }}" alt="..." style="width: 200px"></td>
                <td>Sisca Siwi Anggraini</td>
                <td class="text-center">7324</td>
                <td> Banaran</td>
                <td>Tugu</td>
                <td>Trenggalek</td>
            </tr>
            <tr>
                <td>7</td>
                <td><img src="{{ asset('img/niklas.jpg') }}" alt="..." style="width: 200px"></td>
                <td>Titis Ekawati Dewi</td>
                <td class="text-center">7326</td>
                <td> Pule</td>
                <td>Pule</td>
                <td>Trenggalek</td>
            </tr>
            <tr>
                <td>8</td>
                <td><img src="{{ asset('img/niklas.jpg') }}" alt="..." style="width: 200px"></td>
                <td>Yessy Cataluna</td>
                <td class="text-center">7329</td>
                <td> Buluagung</td>
                <td>Karangan</td>
                <td>Trenggalek</td>
            </tr>
            <tr>
                <td>9</td>
                <td><img src="{{ asset('img/ydi.jpg') }}" alt="..." style="width: 200px"></td>
                <td>Yudi Andika</td>
                <td class="text-center">7331</td>
                <td> Prambon</td>
                <td>Tugu</td>
                <td>Trenggalek</td>
            </tr>
            <tr>
                <td>10</td>
                <td><img src="{{ asset('img/niklas.jpg') }}" alt="..." style="width: 200px"></td>
                <td>Zahro Anisatama</td>
                <td class="text-center">7332</td>
                <td> Kedungsigit</td>
                <td>Karangan</td>
                <td>Trenggalek</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
