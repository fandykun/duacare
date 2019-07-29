@extends('layouts.landing')

@section('style')
<style>
#owl-carousel-beasiswa .item{
  margin: 3px;
}
#owl-carousel-beasiswa .item img{
  display: block;
  width: 100%;
  height: auto;
}
.block {
    text-align: center;
    vertical-align: middle;
}
.circle {
    background: #6ebff3;
    border-radius: 200px;
    height: 200px;
    font-weight: lighter;
    width: 200px;
    display: table;
    margin: 0 auto;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
  box-shadow: 0px 10px 20px 0px rgba(14, 30, 80, 0.2);
}
.circle h4 {
    vertical-align: middle;
    color: #fff;
    display: table-cell;
}


.circle:hover {
  box-shadow: 0px 10px 20px 0px rgba(14, 50, 100, 0.4);
}
</style>
@endsection

@section('content')
  <section class="hero-banner magic-ball">
    <div class="container">
      <div class="row align-items-center text-center text-md-left">
        <div class="col-md-6 col-lg-5 mb-5 mb-md-0">
          <h1 class="wow fadeInLeft" data-wow-duration="1.0s" data-wow-delay="0.5s">Beasiswa Duacare</h1>
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
            <img class="img-fluid" src="{{ asset('duacare-image/beasiswa/beasiswa1.jpg') }}" alt="Duacare Image" style="width: 100%; height: auto;">
          </div>
        </div>
        <div class="col-lg-7 col-md-6 about-content wow bounceInRight" data-wow-duration="1.0s" data-wow-delay="0.5s">
          <h2 class="mb-4" style="color: grey; margin-bottom: 0; font-size: 42px">Beasiswa Duacare</h2>
          <p class="text-justify" style="line-height: 2.0">adalah program beasiswa yang diberikan setiap semester kepada siswa/siswi SMA 2 Lumajang, setiap semester para penerima beasiswa akan menjalani proses seleksi, penerima beasiswa setiap semesternya berjumlah sebanyak 6 orang masing-masing mendapat uang beasiswa sebanyak Rp. 1.000.000,-</p>
          <a class="button" href="#more">Lihat Lebih Detail</a>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-gray section-padding magic-ball magic-ball-testimonial pb-xl-5" id="more">
    <div class="container">
      <div class="section-intro text-center pb-90px">
        <i class="far fa-question-circle icon-gradient"></i>
        <h2>Info Beasiswa</h2>
        <hr>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4 block">
          <div class="circle text-center">
              <h4>Total 66 Siswa<br>Penerima Beasiswa</h4>
          </div>
        </div>
        <div class="col-md-4 block">
          <div class="circle text-center">
              <h4>Total 66 Juta<br>Biaya tersalurkan</h4>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-padding magic-ball magic-ball-testimonial pb-xl-5">
    <div class="container">
      <div class="section-intro text-center pb-90px">
        <i class="far fa-question-circle icon-gradient"></i>
        <h2>Galeri Beasiswa</h2>
        <hr>
      </div>
      <div class="owl-carousel owl-theme" id="owl-carousel-beasiswa">                
        <div class="item"><img src="{{ asset('duacare-image/beasiswa/beasiswa1.jpg') }}" alt=""></div>
        <div class="item"><img src="{{ asset('duacare-image/beasiswa/beasiswa2.jpg') }}" alt=""></div>
        <div class="item"><img src="{{ asset('duacare-image/beasiswa/beasiswa3.jpg') }}" alt=""></div>
      </div>
    </div>
  </section>

  @include('partials.contact')

@endsection

@section('script')
  <script>
    $(document).ready(function() {
      $("#owl-carousel-beasiswa").owlCarousel({
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