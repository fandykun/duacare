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
  <section class="hero-banner magic-ball">
    <div class="container">
      <div class="row align-items-center text-center text-md-left">
        <div class="col-md-6 col-lg-5 mb-5 mb-md-0">
          <h1 class="wow fadeInLeft" data-wow-duration="1.0s" data-wow-delay="0.5s">Duacare Goes To School</h1>
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
            <img class="img-fluid" src="{{ asset('duacare-image/dgts/dgts1.jpg') }}" alt="Duacare Image" style="width: 100%; height: auto;">
          </div>
        </div>
        <div class="col-lg-7 col-md-6 about-content wow bounceInRight" data-wow-duration="1.0s" data-wow-delay="0.5s">
          <h2 class="mb-4" style="color: grey; margin-bottom: 0; font-size: 42px">Duacare Goes To School</h2>
          <p class="text-justify" style="line-height: 2.0">Secara rutin setiap tahunnya, DGTS melalui rangkaian kegiatannya yaitu talkshow inspiratif, campus expo, dan bedah jurusan berupaya membantu mengedukasi mengenai perguruan tinggi siswa siswi SMA di Kabupaten Lumajang khususnya SMAN 2 Lumajang.</p>
          <a class="button" href="#more">Lihat Keseruannya</a>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-gray section-padding magic-ball magic-ball-testimonial cd-h-timeline js-cd-h-timeline margin-bottom--md" style="display: block;" id="more">
    <div class="section-intro text-center pb-90px">
      <i class="far fa-question-circle icon-gradient"></i>
      <h2>Rangkaian Acara DGTS</h2>
    </div>
    <div class="cd-h-timeline__container containerss">
      <div class="cd-h-timeline__dates">
        <div class="cd-h-timeline__line">
          <ol style="list-style: none;">
            <li><a href="#0" data-date="16/01/2014" class="cd-h-timeline__date cd-h-timeline__date--selected">Bedah Jurusan</a></li>
            <li><a href="#0" data-date="28/02/2014" class="cd-h-timeline__date">Talkshow Inspiratif</a></li>
            <li><a href="#0" data-date="20/04/2014" class="cd-h-timeline__date">Campus Expo</a></li>
          </ol>

          <span class="cd-h-timeline__filling-line" aria-hidden="true"></span>
        </div>
      </div>
        
      <ul style="list-style: none;">
        <li><a href="#0" class="text--replace cd-h-timeline__navigation cd-h-timeline__navigation--prev cd-h-timeline__navigation--inactive">Prev</a></li>
        <li><a href="#0" class="text--replace cd-h-timeline__navigation cd-h-timeline__navigation--next">Next</a></li>
      </ul>
    </div>

    <div class="cd-h-timeline__events">
      <ol style="list-style: none;">
        <li class="cd-h-timeline__event cd-h-timeline__event--selected text-component">
          <div class="cd-h-timeline__event-content containerss">
            <h2 class="cd-h-timeline__event-title text-center ">Bedah Jurusan</h2>
            <p class="cd-h-timeline__event-description text--subtle text-justify" style="line-height: 2"> 
              Merupakan kegiatan yang diawali dengan pemaparan detail jurusan dilanjut diskusi intim dua arah yang diisi langsung oleh para mahasiswa yang berprestasi di jurusannya. Melalui kegiatan ini, para peserta dapat merasakan jadi mahasiswa dan mempelajari seluk beluk jurusan yang diinginkan agar tidak salah jurusan.
            </p>
          </div>
        </li>
        <li class="cd-h-timeline__event text-component">
          <div class="cd-h-timeline__event-content containerss">
            <h2 class="cd-h-timeline__event-title text-center">Talkshow Inspiratif</h2>
            <p class="cd-h-timeline__event-description text--subtle text-justify" style="line-height: 2"> 
              Merupakan Kegiatan yang menghadirkan sejumlah pembicara yang juga termasuk alumni SMAN 2 Lumajang yang telah sukses dibidangnya dan akan berbagi pengalaman serta memberikan inspirasi bagi siswa-siswi SMAN 2 Lumajang.
            </p>
          </div>
        </li>

        <li class="cd-h-timeline__event text-component">
          <div class="cd-h-timeline__event-content containerss">
            <h2 class="cd-h-timeline__event-title text-center">Campus Expo</h2>
            <p class="cd-h-timeline__event-description text--subtle text-justify" style="line-height: 2"> 
              Merupakan acara puncak dimana berbagai macam Perguruan Tinggi Negeri, Perguruan Tinggi Swasta, hingga Perguruan Tinggi Kedinasan di Indonesia akan membuka booth masing masing guna memberikan sosialisasi tentang kampus mereka, jurusan bahkan hingga kultur budaya kota tempat mereka menimba ilmu. Selain itu, melalui acara ini para peserta dapat berfoto dengan jas almamater kampus impian, dan juga membeli merchandise khas kampus impian.
            </p>
          </div>
        </li>
      </ol>
    </div>
  </section>

  <section class="section-padding magic-ball magic-ball-testimonial pb-xl-5" id="more">
    <div class="container">
      <div class="section-intro text-center pb-90px">
        <i class="far fa-question-circle icon-gradient"></i>
        <h2>Galeri DGTS</h2>
        <hr>
      </div>
      <div class="owl-carousel owl-theme" id="owl-carousel-dgts">                
        <div class="item"><img src="{{ asset('duacare-image/dgts/dgts10.jpg') }}" alt=""></div>
        <div class="item"><img src="{{ asset('duacare-image/dgts/dgts11.jpg') }}" alt=""></div>
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

  @include('partials.contact')

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