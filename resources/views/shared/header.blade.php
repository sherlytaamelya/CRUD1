<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="font-family: 'Kaushan Script', cursive;">ZENITHPEDIA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/data_guru') }}">Guru</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/data_siswa') }}">Siswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/data_siswa1') }}">Siswa1</a>
            </li>
          </ul>
      </div>
  </div>
</nav>
