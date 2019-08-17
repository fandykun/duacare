@extends('layouts.landing')

@section('style')
<style>
#owl-carousel-dfr .item{
  margin: 3px;
}
#owl-carousel-dfr .item img{
  display: block;
  width: 100%;
  height: auto;
}
</style>
@endsection

@section('content')
  <section class="hero-banner magic-ball">
    <div class="container">
      <div class="row align-items-center text-center text-md-left">
        <div class="col-md-6 col-lg-5 mb-5 mb-md-0">
          <h1 class="wow fadeInLeft" data-wow-duration="1.0s" data-wow-delay="0.5s">Duacare For Ramadhan</h1>
        </div>
        <div class="col-md-6 col-lg-7 col-xl-6 offset-xl-1">
          <img style="max-width: 80%" class="img-fluid vert-move" src="{{ asset('duacare-image/logo-icon.png') }}" alt="Duacare Image">
        </div>
      </div>
    </div>
  </section>

  <section class="section-padding magic-ball magic-ball-sm magic-ball-about">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
          <div class="about-img wow bounceInLeft" data-wow-duration="1.0s" data-wow-delay="0.5s">
            <img class="img-fluid" src="{{ asset('duacare-image/dfr/dfr7.jpg') }}" alt="Duacare Image" style="width: 100%; height: auto;">
          </div>
        </div>
        <div class="col-lg-7 col-md-6 about-content wow bounceInRight" data-wow-duration="1.0s" data-wow-delay="0.5s">
          <h2 class="mb-4" style="color: grey; margin-bottom: 0; font-size: 42px">Duacare For Ramadhan</h2>
          <p class="text-justify" style="line-height: 2.0">Duacare tiap tahunnya juga tak pernah berhenti melakukan kegiatan bakti sosial di desa-desa atau panti asihan yang membutuhkan di penjuru Kabupaten Lumajang melalui kegiatan Duacare For Ramadhan (DFR). Berbagai kegiatan sosial berbasis kerelawanan tumbuh dalam berbagai bentuk, pemberian sembako kepada keluarga kurang mampu, pemberian bantuan pada panti asuhan, penyuluhan pertanian, pemberian bantuan fasilitas SD, pemberian bantuan fasilitas musholla, pembuatan mini perpustakaan, hingga cek kesehatan dan pengobatan gratis merupakan contoh kegiatan yang Duacare rutin lakukan tiap tahunnya.</p>
          <a class="button" href="#more">Lihat Keseruannya</a>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-gray section-padding magic-ball magic-ball-testimonial pb-xl-5" id="more">
    <div class="container">
      <div class="section-intro text-center pb-90px">
        <i class="far fa-question-circle icon-gradient"></i>
        <h2>Galeri DFR</h2>
        <hr>
      </div>
      <div class="owl-carousel owl-theme" id="owl-carousel-dfr">                
        <div class="item"><img src="{{ asset('duacare-image/dfr/dfr1.jpg') }}" alt=""></div>
        <div class="item"><img src="{{ asset('duacare-image/dfr/dfr2.jpg') }}" alt=""></div>
        <div class="item"><img src="{{ asset('duacare-image/dfr/dfr3.jpg') }}" alt=""></div>
        <div class="item"><img src="{{ asset('duacare-image/dfr/dfr4.jpg') }}" alt=""></div>
        <div class="item"><img src="{{ asset('duacare-image/dfr/dfr5.jpg') }}" alt=""></div>
        <div class="item"><img src="{{ asset('duacare-image/dfr/dfr6.jpg') }}" alt=""></div>
        <div class="item"><img src="{{ asset('duacare-image/dfr/dfr7.jpg') }}" alt=""></div>
        <div class="item"><img src="{{ asset('duacare-image/dfr/dfr8.jpg') }}" alt=""></div>
        <div class="item"><img src="{{ asset('duacare-image/dfr/dfr9.jpg') }}" alt=""></div> 
      </div>
    </div>
  </section>

  <section class="section-margin">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/xvKIcf1xuBQ" allowfullscreen></iframe>
          </div>          
        </div>
      </div>
    </div>
  </section>
  @include('partials.contact')

@endsection

@section('script')
  <script>
    $(document).ready(function() {
      $("#owl-carousel-dfr").owlCarousel({
            loop: true,
            margin: 30,
            lazyLoad: true,
            items: 1,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            responsiveClass: true,
            slideSpeed: 300,
            paginationSpeed: 500,
            responsive: {
                0: {
                    items: 1
                }
            }
      });
     
    });

    $("a").on('click', function(event) {
      if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;

        $('html, body').animate({
          scrollTop: $(hash).offset().top - $('nav').height()
        }, 800, function(){
     
        window.location.hash = hash;
        });
      }
    });
  </script>
@endsection