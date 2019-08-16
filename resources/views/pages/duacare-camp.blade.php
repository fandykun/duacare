@extends('layouts.landing')

@section('style')
<style>
#owl-carousel-camp .item{
  margin: 3px;
}
#owl-carousel-camp .item img{
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
          <h1 class="wow fadeInLeft" data-wow-duration="1.0s" data-wow-delay="0.5s">Duacare Camp</h1>
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
            <img class="img-fluid" src="{{ asset('duacare-image/camp/camp1.jpg') }}" alt="Duacare Image" style="width: 100%; height: auto;">
          </div>
        </div>
        <div class="col-lg-7 col-md-6 about-content wow bounceInRight" data-wow-duration="1.0s" data-wow-delay="0.5s">
          <h2 class="mb-4" style="color: grey; margin-bottom: 0; font-size: 42px">Duacare Camp</h2>
          <p class="text-justify" style="line-height: 2.0">adalah kegiatan yang ditujukan bagi seluruh anggota Duacare dari berbagai angkatan yang dilaksanakan tiap 2 tahun sekali. Selain bertujuan untuk meningkatkan rasa kekeluargaan antar anggota, kegiatan ini juga memiliki tujuan sebagai wadah regenerasi kepengurusan Duacare.</p>
          <a class="button" href="#more">Lihat Keseruannya</a>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-gray section-padding magic-ball magic-ball-testimonial pb-xl-5" id="more">
    <div class="container">
      <div class="section-intro text-center pb-90px">
        <i class="far fa-question-circle icon-gradient"></i>
        <h2>Galeri Camp</h2>
        <hr>
      </div>
      <div class="owl-carousel owl-theme" id="owl-carousel-camp">                
        <div class="item"><img src="{{ asset('duacare-image/camp/camp1.jpg') }}" alt=""></div>
        <div class="item"><img src="{{ asset('duacare-image/camp/camp2.jpg') }}" alt=""></div>
        <div class="item"><img src="{{ asset('duacare-image/camp/camp3.jpg') }}" alt=""></div>
        <div class="item"><img src="{{ asset('duacare-image/camp/camp4.jpg') }}" alt=""></div>
        <div class="item"><img src="{{ asset('duacare-image/camp/camp5.jpg') }}" alt=""></div>
      </div>
    </div>
  </section>
  {{-- @include('partials.contact') --}}

@endsection

@section('script')
  <script>
    $(document).ready(function() {
      $("#owl-carousel-camp").owlCarousel({
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