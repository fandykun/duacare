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
.square {
    background: #fff;
    /*height: 200px;*/
    width: 50%;
    display: table;
    margin: 0 auto;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    box-shadow: 0px 3px 5px 0px rgba(14, 30, 80, 0.1);
}
.square h3 {
    color: #6ebff3;
    font-weight: bold;
}
.big-icon {
    color: #6ebff3;
    font-size: 60px;
}
.square:hover {
    box-shadow: 0px 10px 15px 0px rgba(14, 50, 100, 0.4);
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

  <section class="section-padding magic-ball magic-ball-testimonial pb-xl-5" id="more">
    <div class="container">
      <div class="section-intro text-center pb-90px">
        <i class="far fa-question-circle icon-gradient"></i>
        <h2>Statistik Beasiswa</h2>
        <hr>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4 block mb-4">
          <div class="square pb-2 pt-4 px-2 text-center">
              <i class="fas big-icon fa-graduation-cap mb-4"></i><br>
              <h3>66</h3>
              <p>Penerima Beasiswa</p>
          </div>
        </div>
        <div class="col-md-4 block">
          <div class="square pb-2 pt-4 px-2 text-center">
              <i class="fas big-icon fa-wallet mb-4"></i><br>
              <h3>65</h3>
              <p>Juta Biaya tersalurkan</p>
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