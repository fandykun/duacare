@extends('layouts.landing')

@section('style')
<style>
#owl-carousel-dgts .item{
  margin: 3px;
}
#owl-carousel-dgts .item img{
  display: block;
  width: 100%;
  height: auto;
}
</style>
@endsection

@section('content')
  <!--================Hero Banner SM Area Start =================-->
  <section class="hero-banner-sm dgts-banner magic-ball magic-ball-banner" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 0px -80px" data-top-bottom="background-position: 0 100px">
    <div class="container">
      <div class="hero-banner-sm-content">
        <h1>Duacare Goes To school</h1>
      </div>
    </div>
  </section>

  <section class="section-padding magic-ball magic-ball-sm magic-ball-about">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
          <div class="about-img text-center wow bounceInLeft" data-wow-duration="1.0s" data-wow-delay="0.5s">
            <img class="img-fluid" src="{{ asset('duacare-image/dgts/dgts1.jpg') }}" alt="Duacare Image" style="max-height: 350px; width: auto;">
          </div>
        </div>
        <div class="col-lg-7 col-md-6 align-self-center about-content wow bounceInRight" data-wow-duration="1.0s" data-wow-delay="0.5s">
          <h2 style="color: grey; margin-bottom: 0; font-size: 42px">Duacare Goes To School</h2>
          <p class="text-justify" style="line-height: 2.0">adalah serangkaian kegiatan yang dilaksanakan di SMA 2 Lumajang yang diikuti oleh bermacam Perguruan tinggi maupun Akademi sebagai sarana penyaluran informasi tentang jenjang setelah sekolah menengah atas dan juga kegiatan talkshow yang dihadiri pembicara berasal dari alumni SMA 2 Lumajang..</p>
          <a class="button" href="#more">Lihat Keseruannya</a>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-gray section-padding magic-ball magic-ball-testimonial pb-xl-5" id="more">
    <div class="container">
      <div class="section-intro text-center pb-90px">
        <i class="far fa-question-circle icon-gradient"></i>
        <h2>DGTS</h2>
      </div>
      <div class="owl-carousel owl-theme" id="owl-carousel-dgts">                
        <div class="item"><img src="{{ asset('duacare-image/dgts/dgts1.jpg') }}" alt=""></div>
        <div class="item"><img src="{{ asset('duacare-image/dgts/dgts2.jpg') }}" alt=""></div>
        <div class="item"><img src="{{ asset('duacare-image/dgts/dgts3.jpg') }}" alt=""></div>
        <div class="item"><img src="{{ asset('duacare-image/dgts/dgts4.jpg') }}" alt=""></div>
        <div class="item"><img src="{{ asset('duacare-image/dgts/dgts5.jpg') }}" alt=""></div>
        <div class="item"><img src="{{ asset('duacare-image/dgts/dgts6.jpg') }}" alt=""></div>
        <div class="item"><img src="{{ asset('duacare-image/dgts/dgts7.jpg') }}" alt=""></div>
        <div class="item"><img src="{{ asset('duacare-image/dgts/dgts8.jpg') }}" alt=""></div>
        <div class="item"><img src="{{ asset('duacare-image/dgts/dgts9.jpg') }}" alt=""></div>
      </div>
    </div>
  </section>
  {{-- @include('partials.contact') --}}

@endsection

@section('script')
  <script>
    $(document).ready(function() {
      $("#owl-carousel-dgts").owlCarousel({
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