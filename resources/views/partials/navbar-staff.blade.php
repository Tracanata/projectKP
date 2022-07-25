<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="/halaman-staff">FT UNSUR</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "staff") ? 'active' : '' }}" aria-current="page" href="halaman-staff">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "dtMhs") ? 'active' : '' }}" href="/data-mhs">Data Mahasiswa</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light me-4" type="submit">Search</button>
        <button type="button" class="btn btn-outline-light">Logout</button>
      </form>
      </form>
    </div>
  </div>
</nav>