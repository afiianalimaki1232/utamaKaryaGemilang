<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tentang</title>
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
    <a href="http://Wa.me/6282139995818" class="whatsapp d-flex align-items-center justify-content-center" target="blank"><i class="bi bi-whatsapp"></i></a>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="walpaper" class="d-flex align-items-center">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('web/assets/img/wallpaper25.jpg')}}" class="d-block w-100" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="{{asset('web/assets/img/wallpaper22.jpg')}}" class="d-block w-100" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img src="{{asset('web/assets/img/wallpaper14.jpg')}}" class="d-block w-100" alt="Image 3">
            </div>
            <div class="carousel-item">
              <img src="{{asset('web/assets/img/wallpaper24.jpg')}}" class="d-block w-100" alt="Image 4">
          </div>
          <div class="carousel-item">
            <img src="{{asset('web/assets/img/wallpaper23.jpg')}}" class="d-block w-100" alt="Image 5">
        </div>
        </div>
    </div>
    <div class="container">
        <div class="title-box" data-aos="zoom-in" data-aos-delay="200">
          <h1>TENTANG KAMI</h1>
          <hr>
          <h3>CV. UTAMA KARYA GEMILANG</h3>
        </div>
    </div>

  </section>
  <!-- End Hero -->
  
      <!-- ======= Why Us Section ======= -->
      <section id="why-us" class="why-us section-bg">
        <div class="container-fluid" data-aos="fade-up">
  
          <div class="row">
  
            <div class="col-lg-12 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
  
              <div class="content">
                <center><h3>CV. UTAMA KARYA GEMILANG</h3></center>
                <p>
                  Perusahaan jasa konstruksi di Indonesia yang beroperasi sejak tahun 2016 Kami telah sukses mengerjakan berbagai proyek di daerah Besuki Raya (Jember, Bondowoso, Situbondo, Banyuwangi, Lumajang). Kami menangani berbagai jenis proyek seperti perumahan, gedung hunian, gedung perkantoran, gedung kesehatan, gedung pendidikan, gedung industri, pergudangan, pabrik, mulai dari desain, konstruksi sipil, renovasi, hingga instalasi elektrikal dan mekanikal. Berkat kepercayaan dan kinerja kami, CV. UTAMA KARYA GEMILANG kini dikenal sebagai salah satu kontraktor terpercaya di Jawa Timur.
                  <br>
                  <br>
                  Dengan tim profesional yang berpengalaman dan berdedikasi tinggi, kami senantiasa berkomitmen untuk memberikan hasil terbaik pada setiap proyek yang kami tangani. Keunggulan kami terletak pada kemampuan untuk menyelesaikan proyek tepat waktu, dengan kualitas tinggi, dan sesuai dengan anggaran yang telah disepakati. Kami juga menerapkan standar keselamatan kerja yang ketat untuk memastikan lingkungan kerja yang aman bagi seluruh tenaga kerja kami. CV. UTAMA KARYA GEMILANG terus berinovasi dan beradaptasi dengan perkembangan teknologi terkini untuk memenuhi kebutuhan klien dan menjaga kepercayaan yang telah diberikan kepada kami.
                </p>
                <div class="row">
                  <div class="col-lg-6">
                    <h3>Visi</h3>
                    <p>
                      Menjadi perusahaan jasa konstruksi terpercaya yang dikenal akan integrasi tinggi, selalu berinovasi, dan memusatkan pelayanan pada kepuasaan pelanggan.
                    </p>
                  </div>
                  <div class="col-lg-6">
                    <h3>Misi</h3>
                    <p>
                      Selalu menawarkan jasa konstruksi terbaik dengan memperhatikan apa yang diinginkan dan dibutuhkan oleh klien serta memberikan rasa aman dan nyaman melalui 3 hal : Ketepatan waktu, Kualitas pengerjaan, dan Transparansi harga.
                    </p>
                  </div>
                </div>
              </div>
              <br>
  
              
            </div>
  
            {{-- <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img " style='background-image: url("{{asset('web/assets/img/layanan1.png')}}");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div> --}}
          </div>
  
        </div>
      </section>
      {{-- <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-4 col-md-6 portfolio-item">
              <div class="portfolio-img">
                  <img src="{{asset('web/assets/img/rumah3.jpg')}}" class="img-fluid" alt="">
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item">
              <div class="portfolio-img">
                  <img src="{{asset('web/assets/img/rumah4.jpg')}}" class="img-fluid" alt="">
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item">
              <div class="portfolio-img">
                  <img src="{{asset('web/assets/img/rumah5.jpg')}}" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
        </div>
    </section><!-- End Portfolio Section --> --}}
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Lokasi</h2>
          <p>Lokasi kami dapat ditemukan pada titik yang ditandai di peta di bawah ini.</p>
        </div>

        <div class="row">

          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="info">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.2111180406984!2d113.6898741!3d-8.1829569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695007c75ed13%3A0x57a78719d49b66d5!2sCV.%20Utama%20Karya%20Gemilang!5e0!3m2!1sen!2sid!4v1234567890" frameborder="0" style="border:0; width: 100%; height: 350px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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