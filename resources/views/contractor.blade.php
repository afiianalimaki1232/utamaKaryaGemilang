@extends('layout.master')
@section('title', ' kontraktor')
@section('page-title', 'Kontraktor')
@section('sub-page-title', ' Kami menyediakan layanan konstruksi dengan memastikan setiap proyek konstruksi diselesaikan dengan kualitas dan profesionalisme tinggi.')
@section('konten')

<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

      <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <li data-filter="*" class="filter-active">All</li>
        <li data-filter=".filter-renovasi">Renovasi</li>
        <li data-filter=".filter-rumah">Rumah</li>
        <li data-filter=".filter-ruko">Ruko</li>
      </ul>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        @foreach($bahan as $bhn)
        <div class="col-lg-4 col-md-6 portfolio-item filter-{{ strtolower($bhn['category']) }}">
            <div class="portfolio-img">
                <img src="{{ asset('web/assets/img/kontraktor/' . $bhn['image']) }}" class="img-fluid" alt="">
            </div>
            <div class="portfolio-info">
                <h4>{{ $bhn['title'] }}</h4>
                <p>{{ $bhn['category'] }}</p>
                
                <a href="{{ asset('web/assets/img/kontraktor/' . $bhn['image']) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Zoom In">
                    <i class="bx bx-search-alt-2"></i>
                </a>
                <a href="http://Wa.me/6282139995818" target="blank" class="details-link" title="Buy">
                    <i class="bx bx-cart-add"></i>
                </a>
            </div>
        </div>
        @endforeach

      </div>

    </div>
</section><!-- End Portfolio Section -->

@endsection