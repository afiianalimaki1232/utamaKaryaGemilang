<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Produk</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('web/assets/img/logo1.png')}}" rel="icon">
  <link href="{{ asset('web/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('web/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('web/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('web/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('web/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('web/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('web/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('web/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('web/assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <div>
        <a href="/">
          <img src="{{asset('web/assets/img/logo1.png')}}" alt="" class="img-fluid custom-logo">
        </a>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a></li>
          <li><a class="nav-link scrollto {{ Request::is('tentang') ? 'active' : '' }}" href="/tentang">Tentang</a></li>
          <li><a class="nav-link scrollto {{ Request::is('produk') ? 'active' : '' }}" href="/produk">Produk</a></li>
          <li><a class="nav-link scrollto {{ Request::is('contractor') ? 'active' : '' }}" href="/contractor">Kontraktor</a></li>
          <li><a class="nav-link scrollto {{ Request::is('layanan') ? 'active' : '' }}" href="/layanan">Layanan</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<!-- ======= Hero Section ======= -->
<section id="wallpaperKontraktor" class="d-flex align-items-center" style="background: url('{{ asset('web/assets/img/wallpaperproduk.jpg') }}') no-repeat center center/cover; position: relative; width: 100%; height: 100vh; opacity: 0.9">
    <div class="overlay"></div>
    <div class="container">
        <div class="title-box" data-aos="zoom-in" data-aos-delay="200">
          <h1>PRODUK</h1>
          <hr>
          <h3> KAMI MENAWARKAN BERBAGAI PRODUK BERKUALITAS UNTUK MEMENUHI KEBUTUHAN PROYEK KONSTRUKSI ANDA.</h3>
        </div>
    </div>
</section>
<!-- End Hero -->
  
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">
      <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <li data-filter="*" class="filter-active">All</li>
        <li data-filter=".filter-railling">Railling</li>
        <li data-filter=".filter-gerbang">Gerbang</li>
        <li data-filter=".filter-kitchen">Kitchen Set</li>
        <li data-filter=".filter-kanopi">Kanopi</li>
        <li data-filter=".filter-lainnya">Lainnya</li>
      </ul>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        @foreach($bahan as $bhn)
        <div class="col-lg-4 col-md-6 portfolio-item filter-{{ strtolower($bhn['category']) }}">
            <div class="portfolio-img">
                <img src="{{ asset('web/assets/img/bangunan/' . $bhn['image']) }}" class="img-fluid" alt="">
            </div>
            <div class="portfolio-info">
                <h4>{{ $bhn['title'] }}</h4>
                <p>{{ $bhn['category'] }}</p>
                <a href="{{ asset('web/assets/img/bangunan/' . $bhn['image']) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<h4>{{ $bhn['title'] }}</h4><p>{{ $bhn['category'] }}</p> ">
                    <i class="bx bx-search-alt-2"></i>
                </a>
                <a href="http://Wa.me/6282139995818" target="blank" class="details-link" title="Buy">
                    <i class="bx bx-cart-add"></i>
                </a>
            </div>
        </div>
        @endforeach

      </div>
      <br>
      <center><h4>"Beli Banyak, Hemat Lebih! Nikmati Harga terbaik untuk Setiap Pembelian dalam Jumlah Banyak"</h4></center>
    </div>
</section><!-- End Portfolio Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row ">
          <div class="col-lg-4 col-md-6 footer-contact">
            <center><img src="{{asset('web/assets/img/logo1.png')}}" alt="" class="img-fluid footer-logo"></center>
            <center><h5>CV. Utama Karya Gemilang</h5></center>
          </div>
          <div class="col-lg-4 col-md-6 footer-links">
            <h3>Alamat</h3>
            <p> Jalan Sentot Prawirodirjo 37B, Kaliwates - Jember
              <br>
              <strong>Phone 1:</strong> 0821-3999-5818<br>
              <strong>Phone 2:</strong> 0822-2875-8474<br>
              <strong>Email:</strong> utamakaryagemilang37b@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Sosial Media</h4>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/utamakaryagemilang_jbr/" target="blank" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      {{-- <div class="copyright">
        &copy; Copyright <strong><span></span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div> --}}
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="http://Wa.me/6282139995818" class="whatsapp d-flex align-items-center justify-content-center" target="blank"><i class="bi bi-whatsapp"></i></a>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('web/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('web/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('web/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('web/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('web/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('web/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{ asset('web/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('web/assets/js/main.js')}}"></script>

</body>

</html>