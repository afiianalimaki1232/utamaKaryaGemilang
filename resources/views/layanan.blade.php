<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Layanan</title>
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
<section id="wallpaperKontraktor" class="d-flex align-items-center" style="background: url('{{ asset('web/assets/img/layanan2.jpg') }}') no-repeat center center/cover; position: relative; width: 100%; height: 100vh; opacity: 0.9">
    <div class="overlay"></div>
    <div class="container">
        <div class="title-box" data-aos="zoom-in" data-aos-delay="200">
          <h1>LAYANAN KAMI</h1>
          <hr>
          <h3>KAMI SIAP MENDUKUNG PROYEK KONSTRUKSI AGAR ANDA LEBIH EFEKTIF DAN EFISIEN DENGAN MENYEDIAKAN BERBAGAI LAYANAN KONSTRUKSI BERKUALITAS UNTUK MEMENUHI KEBUTUHAN ANDA.</h3>
        </div>
    </div>
</section>
<!-- End Hero -->
  
 <!-- ======= Why Us Section ======= -->
 <section id="why-us" class="why-us section-bg">
  <div class="container-fluid" data-aos="fade-up">

    <div class="row">

      <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

        <div class="content">
          <h3><strong>Macam - Macam Layanan</strong></h3>
          {{-- <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
          </p> --}}
        </div>
        <br>

        <div class="accordion-list">
          <ul>
            <li>
                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-1" class="collapsed"><span>01</span> Konstruksi Pembangunan Gedung <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-1" class="collapse" data-bs-parent=".accordion-list">
                  <p>
                    Kami menyediakan layanan untuk semua tingkatan proyek bangunan gedung, mulai dari desain, persiapan, manajemen konstruksi, hingga pembangunan dan penyelesaian akhir. Selama beberapa tahun terakhir, kami telah memenuhi kebutuhan klien dengan efisien dan memberikan layanan yang responsif.
                  </p>
                </div>
              </li>

            <li>
              <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Renovasi Bangunan <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                <p>
                    Kami menawarkan layanan renovasi bangunan yang komprehensif untuk memperbarui dan meningkatkan kualitas properti Anda. Dengan pengalaman bertahun-tahun, kami menangani segala jenis renovasi, mulai dari perumahan hingga bangunan komersial. Tim ahli kami akan bekerja sama dengan Anda untuk merancang solusi yang sesuai dengan kebutuhan dan anggaran Anda, memastikan setiap detail diperhatikan dengan seksama
                </p>
              </div>
            </li>

            <li>
              <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Mengerjakan Perabotan Bangunan <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                <p>
                    Kami melayani pembuatan perabotan bangunan seperti kanopi, railing, dan tralis. Dengan bahan berkualitas dan desain inovatif, kami menciptakan produk yang kuat dan estetis. Layanan kami meliputi perencanaan, pembuatan, dan pemasangan, memastikan kepuasan klien dan hasil yang optimal.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>

      <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img " style='background-image: url("{{asset('web/assets/img/layanan4.png')}}");' data-aos="zoom-in" data-aos-delay="150">&nbsp;
        <div class="carousel-item">
          <img src="..." alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>...</h5>
            <p>...</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Why Us Section -->


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