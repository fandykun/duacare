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
          <div class="about-img wow bounceInLeft" data-wow-duration="1.0s" data-wow-delay="0.5s">
            <img class="img-fluid" src="{{ asset('duacare-image/dgts/dgts1.jpg') }}" alt="Duacare Image" style="width: 100%; height: auto;">
          </div>
        </div>
        <div class="col-lg-7 col-md-6 about-content wow bounceInRight" data-wow-duration="1.0s" data-wow-delay="0.5s">
          <h2 class="mb-4" style="color: grey; margin-bottom: 0; font-size: 42px">Duacare Goes To School</h2>
          <p class="text-justify" style="line-height: 2.0">adalah serangkaian kegiatan yang dilaksanakan di SMA 2 Lumajang yang diikuti oleh bermacam perguruan tinggi maupun akademi sebagai sarana penyaluran informasi tentang jenjang setelah sekolah menengah atas dan juga kegiatan talkshow dengan narasumber alumni SMA 2 Lumajang.</p>
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
        <div class="item"><img src="{{ asset('duacare-image/dgts/dgts10.jpg') }}" alt=""></div>
      </div>
    </div>
  </section>

  <section class="section-padding magic-ball magic-ball-testimonial cd-h-timeline js-cd-h-timeline margin-bottom--md" style="display: block;">
    <div class="section-intro text-center pb-90px">
      <i class="far fa-question-circle icon-gradient"></i>
      <h2>Rangkaian Acara DGTS</h2>
    </div>
    <div class="cd-h-timeline__container containerss">
      <div class="cd-h-timeline__dates">
        <div class="cd-h-timeline__line">
          <ol style="list-style: none;">
            <li><a href="#0" data-date="16/01/2014" class="cd-h-timeline__date cd-h-timeline__date--selected">16 Jan</a></li>
            <li><a href="#0" data-date="28/02/2014" class="cd-h-timeline__date">28 Feb</a></li>
            <li><a href="#0" data-date="20/04/2014" class="cd-h-timeline__date">20 Mar</a></li>
            <li><a href="#0" data-date="20/05/2014" class="cd-h-timeline__date">20 May</a></li>
            <li><a href="#0" data-date="09/07/2014" class="cd-h-timeline__date">09 Jul</a></li>
            <li><a href="#0" data-date="30/08/2014" class="cd-h-timeline__date">30 Aug</a></li>
          </ol>

          <span class="cd-h-timeline__filling-line" aria-hidden="true"></span>
        </div> <!-- .cd-h-timeline__line -->
      </div> <!-- .cd-h-timeline__dates -->
        
      <ul style="list-style: none;">
        <li><a href="#0" class="text--replace cd-h-timeline__navigation cd-h-timeline__navigation--prev cd-h-timeline__navigation--inactive">Prev</a></li>
        <li><a href="#0" class="text--replace cd-h-timeline__navigation cd-h-timeline__navigation--next">Next</a></li>
      </ul>
    </div> <!-- .cd-h-timeline__containerss -->

    <div class="cd-h-timeline__events">
      <ol style="list-style: none;">
        <li class="cd-h-timeline__event cd-h-timeline__event--selected text-component">
          <div class="cd-h-timeline__event-content containerss">
            <h2 class="cd-h-timeline__event-title text-center ">Horizontal Timeline</h2>
            <em class="cd-h-timeline__event-date">January 16th, 2014</em>
            <p class="cd-h-timeline__event-description text--subtle"> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
            </p>
          </div>
        </li>

        <li class="cd-h-timeline__event text-component">
          <div class="cd-h-timeline__event-content containerss">
            <h2 class="cd-h-timeline__event-title text-center">Event title here</h2>
            <em class="cd-h-timeline__event-date">February 28th, 2014</em>
            <p class="cd-h-timeline__event-description text--subtle"> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
            </p>
          </div>
        </li>

        <li class="cd-h-timeline__event text-component">
          <div class="cd-h-timeline__event-content containerss">
            <h2 class="cd-h-timeline__event-title text-center">Event title here</h2>
            <em class="cd-h-timeline__event-date">March 20th, 2014</em>
            <p class="cd-h-timeline__event-description text--subtle"> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
            </p>
          </div>
        </li>

        <li class="cd-h-timeline__event text-component">
          <div class="cd-h-timeline__event-content containerss">
            <h2 class="cd-h-timeline__event-title text-center">Event title here</h2>
            <em class="cd-h-timeline__event-date">May 20th, 2014</em>
            <p class="cd-h-timeline__event-description text--subtle"> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
            </p>
          </div>
        </li>

        <li class="cd-h-timeline__event text-component">
          <div class="cd-h-timeline__event-content containerss">
            <h2 class="cd-h-timeline__event-title text-center">Event title here</h2>
            <em class="cd-h-timeline__event-date">July 9th, 2014</em>
            <p class="cd-h-timeline__event-description text--subtle"> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
            </p>
          </div>
        </li>

        <li class="cd-h-timeline__event text-component">
          <div class="cd-h-timeline__event-content containerss">
            <h2 class="cd-h-timeline__event-title text-center">Event title here</h2>
            <em class="cd-h-timeline__event-date">August 30th, 2014</em>
            <p class="cd-h-timeline__event-description text--subtle"> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
            </p>
          </div>
        </li>
      </ol>
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