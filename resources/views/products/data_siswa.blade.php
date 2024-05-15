@extends('layouts.main')

@section('content')

<style>
    .profile-img {
        display: block;
        margin: 0 auto; /* Mengatur margin kiri dan kanan menjadi otomatis */
    }

    .card {
    flex-grow: 1;
    }
</style>

<div class="container mt-3">
    <h2>Data Siswa RPL C</h2>
    
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
        <!-- Kartu Siswa 1 -->
        <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('img/dito.jpg') }}" class="img-fluid rounded-start" alt="DITO">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Nandito Bagus Aria Ditama</h5>
                            <p class="card-text">NIS: 7302</p>
                            <p class="card-text">Alamat: Desa Kerjo, Kec. Karangan, Kab. Trenggalek</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kartu Siswa 2 -->
        <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('img/niklas.jpg') }}" class="img-fluid rounded-start" alt="NIKOLAS">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Nikolas Maulana Aziz Saputra</h5>
                            <p class="card-text">NIS: 7305</p>
                            <p class="card-text">Alamat: Desa Suruh, Kec. Suruh, Kab. Trenggalek</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kartu Siswa 3 -->
        <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('img/pras.jpg') }}" class="img-fluid rounded-start" alt="PRAS">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Prasetya Kurnia Agustian</h5>
                            <p class="card-text">NIS: 7308</p>
                            <p class="card-text">Alamat: Desa Nglinggis, Kec. Tugu, Kab. Trenggalek</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kartu Siswa 4 -->
        <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('img/aku.jpg') }}" class="img-fluid rounded-start" alt="NIKLAS">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Sherlyta Amelya</h5>
                            <p class="card-text">NIS: 7322</p>
                            <p class="card-text">Alamat: Desa Tegaren, Kec. Tugu, Kab. Trenggalek</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kartu Siswa 5 -->
        <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('img/sinta.jpg') }}" class="img-fluid rounded-start" alt="SINTA">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Sinta Suwito Puteri</h5>
                            <p class="card-text">NIS: 7323</p>
                            <p class="card-text">Alamat: Desa Sambirejo, Kec. Trenggalek, Kab. Trenggalek</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kartu Siswa 6 -->
        <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('img/sisca.jpg') }}" class="img-fluid rounded-start" alt="SISCA">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Sisca Siwi Anggraini</h5>
                            <p class="card-text">NIS: 7324</p>
                            <p class="card-text">Alamat: Desa Banaran, Kec. Tugu, Kab. Trenggalek</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kartu Siswa 7 -->
        <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('img/titis.jpg') }}" class="img-fluid rounded-start" alt="NIKLAS">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Titis Ekawati Dewi</h5>
                            <p class="card-text">NIS: 7326</p>
                            <p class="card-text">Alamat: Desa Pule, Kec. Pule, Kab. Trenggalek</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kartu Siswa 8 -->
        <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('img/yss.jpg') }}" class="img-fluid rounded-start" alt="NIKLAS">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Yessy Cataluna</h5>
                            <p class="card-text">NIS: 7329</p>
                            <p class="card-text">Alamat: Desa Buluagung, Kec. Karangan, Kab. Trenggalek</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kartu Siswa 9 -->
        <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('img/ydi.jpg') }}" class="img-fluid rounded-start" alt="YDI">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Yudi Andika</h5>
                            <p class="card-text">NIS: 7331</p>
                            <p class="card-text">Alamat: Desa Prambon, Kec. Tugu, Kab. Trenggalek</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kartu Siswa 10 -->
        <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('img/leak.jpg') }}" class="img-fluid rounded-start" alt="NIKLAS">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Zahro Anisatama</h5>
                            <p class="card-text">NIS: 7332</p>
                            <p class="card-text">Alamat: Desa Kedungsigit, Kec. Karangan, Kab. Trenggalek</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
</body>
</html>