<div class="bg_navbar p-4" style="background-image: url('template/navbar.png'); background-size: cover; height:250px">
  <nav class="navbar navbar-expand-lg mb-5 fixed-top px-lg-4 px-md-4" id="myNavbar">
    <div class="container-fluid px-0 ">
      <h5 class="navbar-brand text-light ms-lg-3 ms-md-3 ms-4">TASTY FOOD</h5>
      <button class="navbar-toggler bg-light me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="text-center navbar-nav ml-auto ul-costum-all">
          <li class="nav-item">
            <a class="nav-link text-light navbar-hover rounded {{ $title === 'HOME' ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-light navbar-hover rounded {{ $title === 'TENTANG KAMI' ? 'active' : '' }}" href="{{ route('tentang') }}">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light navbar-hover rounded {{ $title === 'BERITA TERKINI' ? 'active' : '' }}" href="{{ route('berita') }}">Berita</a>
          </li>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-light navbar-hover rounded {{ $title === 'GALERI KAMI' ? 'active' : '' }}" href="{{ route('galeri') }}">Galeri</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-light navbar-hover rounded {{ $title === 'KONTAK KAMI' ? 'active' : '' }}" href="{{ route('kontak') }}">Kontak</a>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>
  <div class="pt-5 mt-5">
    <h4 class="ms-lg-3 ms-md-3 text-light">{{ $title }}</h4>
  </div>
</div>

