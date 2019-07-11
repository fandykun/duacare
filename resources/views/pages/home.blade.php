@extends('layouts.landing')

@section('style')
  <style>
    img.vert-move {
      -webkit-animation: mover 1s infinite  alternate;
      animation: mover 1s infinite  alternate;
    }
    img.vert-move {
      -webkit-animation: mover 1s infinite  alternate;
      animation: mover 1s infinite  alternate;
    }
    @-webkit-keyframes mover {
      0% { transform: translateY(0); }
      100% { transform: translateY(-15px); }
    }
    @keyframes mover {
      0% { transform: translateY(0); }
      100% { transform: translateY(-15px); }
    }

    .icon-gradient{
      font-size: 50px;
      background: -webkit-linear-gradient(#eee, #333);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
  </style>
@endsection

@section('content')
  <!--================Hero Banner Area Start =================-->
  <section class="hero-banner magic-ball">
    <div class="container">

      <div class="row align-items-center text-center text-md-left">
        <div class="col-md-6 col-lg-5 mb-5 mb-md-0">
          <h1>Selamat Datang di</h1>
          <h2>Duacare Official Website</h2>
          <a class="button button-hero mt-4" href="#overview">Telusuri Sekarang!</a>
        </div>
        <div class="col-md-6 col-lg-7 col-xl-6 offset-xl-1">
          {{-- <img class="img-fluid" src="{{ asset('safario/img/home/hero-img.png') }}" alt=""> --}}
          <img class="img-fluid vert-move" src="{{ asset('duacare-image/logo-icon.png') }}" alt="Duacare Image">
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
        <p>Duacare adalah Organisasi sosial alumni SMAN 2 Lumajang yang berpegang teguh pada semboyan “Dare to care!</p>
      </div>

      <div class="row justify-content-center mb-3">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="service-card text-center wow slideInLeft">
            <div class="service-card-img">
              <img class="img-fluid" src="{{ asset('safario/img/home/service1.png') }}" alt="">
            </div>
            <div class="service-card-body">
              <h3>{{ $events[0]->title }}</h3>
              <p>{{ $events[0]->description }}</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="service-card text-center wow slideInRight">
            <div class="service-card-img">
              <img class="img-fluid" src="{{ asset('safario/img/home/service2.png') }}" alt="">
            </div>
            <div class="service-card-body">
              <h3>{{ $events[1]->title }}</h3>
              <p>{{ $events[1]->description }}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="service-card text-center wow slideInLeft">
            <div class="service-card-img">
              <img class="img-fluid" src="{{ asset('safario/img/home/service3.png') }}" alt="">
            </div>
            <div class="service-card-body">
              <h3>{{ $events[2]->title }}</h3>
              <p>{{ $events[2]->description }}</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="service-card text-center wow slideInRight">
            <div class="service-card-img">
              <img class="img-fluid" src="{{ asset('safario/img/home/service3.png') }}" alt="">
            </div>
            <div class="service-card-body">
              <h3>{{ $events[3]->title }}</h3>
              <p>{{ $events[3]->description }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================Service Area End =================-->


  <!--================About Area Start =================-->
  <section class="bg-gray section-padding magic-ball magic-ball-about">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-6 mb-4 mb-md-0">
          <div class="about-img">
            <img class="img-fluid" src="{{ asset('safario/img/home/about-img.png') }}" alt="">
          </div>
        </div>
        <div class="col-lg-5 col-md-6 align-self-center about-content">
          <h2>TENTANG DUACARE</h2>
          <p>Duacare adalah organisasi sosial alumni SMAN 2 Lumajang yang berpegang teguh pada semboyan “Dare to care!</p>
          <a class="button" href="{{ url('/about') }}">Pelajari Lebih Lanjut</a>
        </div>
      </div>
    </div>
  </section>
  <!--================About Area End =================-->

  <!--================Testimonial section Start =================-->
  <section class="bg-gray section-padding magic-ball magic-ball-testimonial pb-xl-5">
    <div class="container">
      <div class="section-intro text-center pb-90px">
        <img class="section-intro-img" src="{{ asset('safario/img/home/section-icon.png') }}" alt="">
        <h2>Duacare Kata Mereka</h2>
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


  <!--================Blog section Start =================-->
  <section class="section-padding bg-gray">
    <div class="container">
      <div class="section-intro text-center pb-90px">
        <i class="far fa-newspaper icon-gradient"></i>
        <h2>Berita Terkini</h2>
        <p>Fowl have fruit moveth male they are that place you will lesser</p>
      </div>

      <div class="row">
        @foreach($latest_items as $latest_item)
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card-blog">
            <img class="card-img rounded-0" src="{{ asset('storage/news/'.$latest_item->image) }}" alt="">
            <div class="card-blog-body">
              <a href="#">
                <h4 class="ellipsis-2">{{ $latest_item->title }}</h4>
              </a>
              <ul class="card-blog-info">
                <li><a href="#"><span class="align-middle"><i class="ti-notepad"></i></span>{{ \Carbon\Carbon::parse($latest_item->created_at)->formatLocalized('%A, %d %B %Y') }}</a></li>
              </ul>
              <p class="ellipsis-2"> {{ $latest_item->description }} </p>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </section>
  <!--================Blog section End =================-->

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
