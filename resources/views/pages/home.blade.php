@extends('layouts.landing')

@section('style')
  <style>
  </style>
@endsection

@section('content')
  <!--================Hero Banner Area Start =================-->
  <section class="hero-banner magic-ball">
    <div class="container">

      <div class="row align-items-center text-center text-md-left">
        <div class="col-md-6 col-lg-5 mb-5 mb-md-0">
          <h1 class="wow fadeInLeft" data-wow-duration="1.0s" data-wow-delay="0.5s">Selamat Datang di</h1>
          <h2 class="wow fadeInLeft" data-wow-duration="1.0s" data-wow-delay="0.5s">Duacare Official Website</h2>
          <a class="button button-hero mt-4 wow fadeInLeft" data-wow-duration="1.0s" data-wow-delay="1.0s"  href="#overview">Telusuri Sekarang!</a>
        </div>
        <div class="col-md-6 col-lg-7 col-xl-6 offset-xl-1">
          {{-- <img class="img-fluid" src="{{ asset('safario/img/home/hero-img.png') }}" alt=""> --}}
          <img style="max-width: 80%" class="img-fluid vert-move" src="{{ asset('duacare-image/logo-icon.png') }}" alt="Duacare Image">
        </div>
      </div>
    </div>
  </section>
  <!--================Hero Banner Area End =================-->


  <!--================Service Area Start =================-->
  <section class="section-margin generic-margin" id="overview">
    <div class="container">
      <div class="section-intro text-center pb-90px">
        {{-- <img class="section-intro-img" src="{{ asset('safario/img/home/section-icon.png') }}" alt=""> --}}
        <i class="far fa-eye icon-gradient"></i>
        <h2>Overview</h2>
        <hr>
        <p>Duacare adalah Organisasi sosial alumni SMAN 2 Lumajang yang berpegang teguh pada semboyan “Dare to care!, berikut adalah event yang rutin dilaksanakan oleh Duacare</p>
      </div>
      @php
        $image_list = [
          "beasiswa/beasiswa1.jpg",
          "dgts/dgts1.jpg",
          "dfr/dfr1.jpg",
          "camp/camp1.jpg"
        ]
      @endphp
      <div class="owl-carousel owl-theme events pb-xl-5">
        @for($i = 0 ; $i < count($events) ; $i++)
          <div class="events__item">
            <div class="row">
              <div class="col-md-6 col-lg-6 mb-4 mb-lg-0 d-flex align-items-stretch align-self-center">
                <div class="service-card text-center">
                  <div class="card-img-top">
                    <img class="img-fluid" src="{{ asset('duacare-image/'.$image_list[$i].'') }}" alt="">
                  </div>
                  <div class="service-card-body">
                    <div class="d-md-none align-middle" style="display: inline;">
                      <h3>{{ $events[$i]->title }}</h3>
                      <p>{{ $events[$i]->description }}</p>    
                      <a class="button button-hero btn-sm" href="{{ url('/event'.'/'.str_replace(" ", "-", strtolower($events[$i]->title))) }}">Baca Selengkapnya&emsp;<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4 mb-lg-0 d-none d-md-block align-self-center">
                <div class="service-card text-center">
                  <div class="service-card-body">
                    <div class="my-auto">
                      <h2>{{ $events[$i]->title }}</h2>
                      <p>{{ $events[$i]->description }}</p>
                      <a class="button button-hero mt-4" href="{{ url('/event'.'/'.str_replace(" ", "-", strtolower($events[$i]->title))) }}">Baca Selengkapnya&emsp;<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endfor
      </div>
    </div>
  </section>
  <!--================Service Area End =================-->


  <section class="bg-gray section-padding magic-ball magic-ball-testimonial pb-xl-5">
    <div class="container">
      <div class="section-intro text-center pb-90px">
        <i class="fas fa-users icon-gradient"></i>

        <!-- paddingnya perlu diedit nanti -->
        <h2>Duacare Kata Mereka</h2>
        <hr>
        {{-- <p>Fowl have fruit moveth male they are that place you will lesser</p> --}}
      </div>


      <div class="owl-carousel owl-theme testimonial pb-xl-5">
        @foreach($testimonies as $testimony)
        <div class="testimonial__item">
          <div class="row">
            <div class="col-md-3 col-lg-2 align-self-center">
              <div class="testimonial__img">
                @if($testimony->image)
                <img class="card-img rounded-0" src="{{ asset('duacare-image/logo_small.png') }}" alt="Testimony">
                @else
                <img class="card-img rounded-0" src="{{ asset('duacare-image/logo_small.png') }}" alt="Duacare Image">
                @endif
              </div>
            </div>
            <div class="col-md-9 col-lg-10">
              <div class="testimonial__content mt-3 mt-sm-0">
                <h3>{{ $testimony->title }}</h3>
                <p>{{ $testimony->detail }}</p>
                <p class="testimonial__i" style="min-height: 100px">{{ $testimony->description }}</p>
                <span class="testimonial__icon"><i class="ti-quote-right"></i></span>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!--================Testimonial section End =================-->

  <!--================Tour section Start =================-->
  <section class="section-margin pb-xl-5">
    <div class="container">
      <div class="section-intro text-center pb-90px">
        <i class="far fa-newspaper icon-gradient"></i>
        <h2>Apa kabar Duacare</h2>
        <hr>
        {{-- <p>Duacare </p> --}}
      </div>

      <div class="row">
        @foreach ($news as $berita)
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card-blog">
            <div class="card-img-style">
              <img class="card-img rounded-0" src="{{ asset('storage/news/'.$berita->image) }}" alt="">            
            </div>
            <div class="card-blog-body">
              <a href="{{ url('news/'.$berita->id.'/'.rawurlencode(strtolower($berita->title))) }}">
                <h4 class="ellipsis-2">{{ $berita->title }}</h4>
              </a>
              <ul class="card-blog-info">
                <li><a href="{{ url('news/'.$berita->id.'/'.rawurlencode(strtolower($berita->title))) }}"><span class="align-middle"><i class="ti-notepad"></i></span>{{ \Carbon\Carbon::parse($berita->created_at)->formatLocalized('%A, %d %B %Y') }}</a></li>
              </ul>
              <p class="ellipsis-2 text-justify"> {{ $berita->description }} </p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <br>
      <div class="text-center mt-4">
        <a class="button button-hero" href="{{url('/news')}}">Lihat Semua&emsp;<i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </section>

@include('partials.contact')

@endsection

@section('script')
  <script>
    $("#nav-home").addClass("active");
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
