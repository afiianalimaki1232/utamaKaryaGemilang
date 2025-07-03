<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Utama Karya Gemilang</title>
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
  <header id="header" class="fixed-top ">
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
  <section id="wallpaperKontraktor" class="d-flex align-items-center" style="background: url('{{ asset('web/assets/img/wallpaperwelcome3.png') }}') no-repeat center center/cover; position: relative; width: 100%; height: 100vh; opacity: 0.9">

    <div class="container ">
      <div class="row">
        {{-- <div class="col-lg-1 order-1 order-lg-2"></div>  --}}
        <div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>CV.UTAMA KARYA GEMILANG</h1>
          <h3>"KOMITMEN PADA KUALITAS, DEDIKASI PADA KEPUASAAN KLIEN"</h3>
          <i></i>
        </div>

    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-6 col-4 d-flex align-items-center justify-content-center">
            <img src="{{asset('web/assets/img/clients/client-7.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-6 col-4 d-flex align-items-center justify-content-center">
            <img src="{{asset('web/assets/img/clients/client-8.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-6 col-4 d-flex align-items-center justify-content-center">
            <img src="{{asset('web/assets/img/clients/client-9.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-6 col-4 d-flex align-items-center justify-content-center">
            <img src="{{asset('web/assets/img/clients/client-10.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-6 col-4 d-flex align-items-center justify-content-center">
            <img src="{{asset('web/assets/img/clients/client-11.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-6 col-4 d-flex align-items-center justify-content-center">
            <img src="{{asset('web/assets/img/clients/client-13.png')}}" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->
        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
          <div class="container" data-aos="zoom-in">
    
            <div class="row">
              <div class="col-lg-12 text-center text-lg-start">
                <h3>Siapa Kami ?</h3>
                <hr>
                <p>CV. UTAMA KARYA GEMILANG adalah perusahaan jasa konstruksi di Indonesia yang beroperasi sejak tahun 2016 Kami telah sukses mengerjakan berbagai proyek di daerah Besuki Raya (Jember, Bondowoso, Situbondo, Banyuwangi, Lumajang). Kami menangani berbagai jenis proyek seperti perumahan, gedung hunian, gedung perkantoran, gedung kesehatan, gedung pendidikan, gedung industri, pergudangan, pabrik, mulai dari desain, konstruksi sipil, renovasi, hingga instalasi elektrikal dan mekanikal. Berkat kepercayaan dan kinerja kami,CV. UTAMA KARYA GEMILANG kini dikenal sebagai salah satu kontraktor terpercaya di Jawa Timur.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-0 cta-btn-container text-center">
                <a class="cta-btn align-middle" href="/tentang">Read More</a>
              </div>
            </div>
          </div>
        </section><!-- End Cta Section -->

    {{-- <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang Kami</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section --> --}}

        <!-- ======= Why Me ??? ======= -->
        <section id="faq" class="faq section-bg">
          <div class="container" data-aos="fade-up">
    
            <div class="section-title">
              <h2>Mengapa Kami ?</h2>
            </div>
    
            <div class="faq-list">
              <ul>
    
                <li data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-check-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-1" class="collapsed">Professional, Berpengalaman, dan Amanah <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="faq-list-1" class="collapse" data-bs-parent=".faq-list">
                    <p>
                      Sejak tahun 2016, kami telah sukses menyelesaikan beragam proyek konstruksi di Jawa. Setiap proyek kami selesaikan dengan profesionalisme tinggi, mengutamakan kualitas dan kepuasan klien.
                    </p>
                  </div>
                </li>
                <li data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-check-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Efektif dan Efisien <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                    <p>
                      Kami selalu berinovasi dalam pekerjaan konstruksi dan bekerja sama dengan para ahli sebagai strategi utama. Hal ini memastikan proyek selesai secara efektif dan efisien, tanpa mengabaikan detail dan menjamin bahwa semuanya dilakukan dengan benar.
                    </p>
                  </div>
                </li>
                <li data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-check-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Free Konsultasi 24 Jam <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                    <p>
                      CV. Utama Karya Gemilang selalu siap melayani Anda dengan konsultasi gratis selama 24 jam. Kami memahami bahwa setiap proyek memiliki kebutuhan khusus dan memerlukan perhatian segera, oleh karena itu, tim kami siap memberikan saran profesional kapan saja Anda membutuhkannya.

                    </p>
                  </div>
                </li>
                <li data-aos="fade-up" data-aos-delay="500">
                  <i class="bx bx-check-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Free Desain <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                    <p>
                      Kami menawarkan layanan desain gratis untuk memastikan proyek Anda dirancang dengan baik dari awal. Tim desain kami yang berpengalaman akan bekerja sama dengan Anda untuk menciptakan solusi yang memenuhi kebutuhan estetika dan fungsional Anda, tanpa biaya tambahan.

                    </p>
                  </div>
                </li>
                <li data-aos="fade-up" data-aos-delay="600">
                  <i class="bx bx-check-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Bisa Menyesuaikan Budget <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                    <p>
                      CV. Utama Karya Gemilang mengerti pentingnya anggaran dalam setiap proyek konstruksi. Kami menawarkan fleksibilitas dalam penyesuaian anggaran, memastikan Anda mendapatkan solusi terbaik tanpa melebihi batas biaya yang telah ditetapkan.

                    </p>
                  </div>
                </li>
                <li data-aos="fade-up" data-aos-delay="700">
                  <i class="bx bx-check-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-6" class="collapsed">100% Bergaransi<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
                    <p>
                      Kami memberikan jaminan 100% garansi pada setiap proyek yang kami kerjakan. Dengan komitmen pada kualitas dan kepuasan pelanggan, kami memastikan setiap pekerjaan dilakukan dengan standar tertinggi dan memberikan perlindungan terhadap masalah yang mungkin timbul di kemudian hari.

                    </p>
                  </div>
                </li>
                <li data-aos="fade-up" data-aos-delay="800">
                  <i class="bx bx-check-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-7" class="collapsed">Legalitas Lengkap<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="faq-list-7" class="collapse" data-bs-parent=".faq-list">
                    <p>
                      CV. Utama Karya Gemilang memiliki semua izin dan dokumen legalitas yang lengkap. Kami beroperasi sesuai dengan peraturan dan undang-undang yang berlaku, memberikan Anda ketenangan pikiran bahwa proyek Anda berada di tangan yang terpercaya dan legal.

                    </p>
                  </div>
                </li>
                <li data-aos="fade-up" data-aos-delay="900">
                  <i class="bx bx-check-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-8" class="collapsed">Terdaftar Resmi di LPJK (Lembaga Pengembangan Jasa Konstruksi)<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="faq-list-8" class="collapse" data-bs-parent=".faq-list">
                    <p>
                      Sebagai bukti profesionalisme dan kredibilitas, CV. Utama Karya Gemilang terdaftar resmi di LPJK. Pendaftaran ini memastikan bahwa kami mematuhi standar dan regulasi industri konstruksi di Indonesia, memberikan jaminan tambahan atas kualitas layanan kami.
                    </p>
                  </div>
                </li>

    
              </ul>
            </div>
    
          </div>
        </section><!-- Why Me ??? -->

    {{-- <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("{{asset('web/assets/img/why-us.png')}}");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section --> --}}

    {{-- <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="{{asset('web/assets/img/skills.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>

            <div class="skills-content">

              <div class="progress">
                <span class="skill">HTML <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">CSS <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">JavaScript <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Photoshop <i class="val">55%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Skills Section --> --}}

    {{-- <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Sed ut perspici</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section --> --}}

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
          <div class="section-title">
              <h2>Portfolio</h2>
              <p>Berikut merupakan portofolio yang telah kami kerjakan dengan dedikasi tinggi dan kualitas terbaik untuk setiap proyek.</p>
          </div>
  
          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
              @foreach($bahan as $bhn)
              <div class="col-lg-4 col-md-6 portfolio-item filter-{{ strtolower($bhn['category']) }}">
                  <div class="portfolio-img">
                      <img src="{{ asset('web/assets/img/proyek/' . $bhn['image']) }}" class="img-fluid" alt="">
                  </div>
                  <div class="portfolio-info">
                      {{-- <h4>{{ $bhn['title'] }}</h4>
                      <p>{{ $bhn['category'] }}</p> --}}
                      <a href="{{ asset('web/assets/img/proyek/' . $bhn['image']) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Zoom In">
                          <i class="bx bx-search-alt-2"></i>
                      </a>
                      <br>
                  </div>
              </div>
              @endforeach
          </div>
      </div>
  </section>

    {{-- <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('web/assets/img/team/team-1.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('web/assets/img/team/team-2.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('web/assets/img/team/team-3.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('web/assets/img/team/team-4.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section --> --}}

    {{-- <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.733142630593!2d113.68721357565307!3d-8.183153568003506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6959c9f5fbd45%3A0x242998290dc7941a!2sPT.%20PRATAMA%20PROPERTI%20GEMILANG!5e0!3m2!1sen!2sid!4v1627548796843!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section --> --}}

  </main><!-- End #main -->

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
              <strong>Email:</strong> utamakaryagemilang_jbr@gmail.com<br>
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
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/KINGPLAN-free-bootstrap-html-template-corporate/ -->
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