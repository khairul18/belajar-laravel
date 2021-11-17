 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="https://www.instagram.com/khairulariandi/">{{ $name }}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link {{ $title === "Home" ? "active" : "" }} " href="/">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link {{ $title === "About" ? "active" : "" }} " href="/about">About</a>
          <a class="nav-item nav-link {{ $title === "Article" ? "active" : "" }}" href="/article">Article</a>
          {{-- <a class="nav-item nav-link" href="#">Features</a> --}}
          <a class="nav-item nav-link btn btn-primary text-white tombol" href="#">Join Us</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- akhir Navbar -->