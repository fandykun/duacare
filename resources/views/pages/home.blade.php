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
          <h1>Welcome to</h1>
          <h2>Duacare Official Website</h2>
          {{-- <p>Air seed winged lights saw kind whales in sixth dont seas dron image so fish all tree meat dont there is seed winged lights saw kind whales in sixth dont seas dron image so fish all tree meat dont there </p> --}}
          <a class="button button-hero mt-4" href="#overview">Get Started</a>
        </div>
        <div class="col-md-6 col-lg-7 col-xl-6 offset-xl-1">
          {{-- <img class="img-fluid" src="{{ asset('safario/img/home/hero-img.png') }}" alt=""> --}}
          <img class="img-fluid" src="{{ asset('duacare-image/logo-icon.png') }}" alt="">
        </div>
      </div>
    </div>
  </section>
  <!--================Hero Banner Area End =================-->


  <!--================Service Area Start =================-->
  <section class="section-margin generic-margin" id="overview">
    <div class="container">
      <div class="section-intro text-center pb-90px">
        <img class="section-intro-img" src="{{ asset('safario/img/home/section-icon.png') }}" alt="">
        <h2>Overview</h2>
        <p>Duacare adalah Organisasi sosial alumni SMAN 2 Lumajang yang berpegang teguh pada semboyan “Dare to care!</p>
      </div>

      <div class="row justify-content-center mb-3">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="service-card text-center wow fadeInUp" data-wow-duration="2s" >
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
          <div class="service-card text-center">
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
          <div class="service-card text-center">
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
          <div class="service-card text-center">
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
          <h2>Exploration is <br class="d-none d-xl-block"> really the essence <br class="d-none d-xl-block"> of the human spirit</h2>
          <p>Make she'd moved divided air. Whose tree that replenish tone hath own upon them it multiply was blessed is lights make gathering so day dominion so creeping air was made.</p>
          <a class="button" href="#">Learn More</a>
        </div>
      </div>
    </div>
  </section>
  <!--================About Area End =================-->

  <!--================Tour section Start =================-->
  <section class="section-margin pb-xl-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="tour-card">
            <img class="card-img rounded-0" src="{{ asset('safario/img/home/tour1.png') }}" alt="">
            <div class="tour-card-overlay">
              <div class="media">
                <div class="media-body">
                  <h4>Paris tour offer</h4>
                  <small>5 days offer</small>
                  <p>We proper guided our tourist</p>
                </div>
                <div class="media-price">
                  <h4 class="text-primary">$65/day</h4>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="row">
            <div class="col-lg-10 offset-lg-1">
              <div class="tour-content">
                <h2>We offer worldwise tour plan recently</h2>
                <p>Make she'd moved divided air. Whose tree that hath own upon them it multiply was blessed </p>
              </div>
            </div>
          </div>

          <div class="tour-card">
            <img class="card-img rounded-0" src="{{ asset('safario/img/home/tour2.png') }}" alt="">
            <div class="tour-card-overlay">
              <div class="media">
                <div class="media-body">
                  <h4>Paris tour offer</h4>
                  <small>5 days offer</small>
                  <p>We proper guided our tourist</p>
                </div>
                <div class="media-price">
                  <h4 class="text-primary">$65/day</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-7">
          <div class="tour-card">
            <img class="card-img rounded-0" src="{{ asset('safario/img/home/tour3.png') }}" alt="">
            <div class="tour-card-overlay">
              <div class="media">
                <div class="media-body">
                  <h4>Paris tour offer</h4>
                  <small>5 days offer</small>
                  <p>We proper guided our tourist</p>
                </div>
                <div class="media-price">
                  <h4 class="text-primary">$65/day</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5">
          <div class="tour-card">
            <img class="card-img rounded-0" src="{{ asset('safario/img/home/tour4.png') }}" alt="">
            <div class="tour-card-overlay">
              <div class="media">
                <div class="media-body">
                  <h4>Paris tour offer</h4>
                  <small>5 days offer</small>
                  <p>We proper guided our tourist</p>
                </div>
                <div class="media-price">
                  <h4 class="text-primary">$65/day</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================Tour section End =================-->


  <!--================Testimonial section Start =================-->
  <section class="bg-gray section-padding magic-ball magic-ball-testimonial pb-xl-5">
    <div class="container">
      <div class="section-intro text-center pb-90px">
        <img class="section-intro-img" src="{{ asset('safario/img/home/section-icon.png') }}" alt="">

        <!-- paddingnya perlu diedit nanti -->
        <h2>Duacare Kata Mereka</h2>
        {{-- <p>Fowl have fruit moveth male they are that place you will lesser</p> --}}
      </div>


      <div class="owl-carousel owl-theme testimonial pb-xl-5">
        @foreach($testimonies as $testimony)
        <div class="testimonial__item">
          <div class="row">
            <div class="col-md-3 col-lg-2 align-self-center">
              <div class="testimonial__img">
                <img class="card-img rounded-0" src="{{ asset('duacare-image/logo_small.png') }}" alt="">
              </div>
            </div>
            <div class="col-md-9 col-lg-10">
              <div class="testimonial__content mt-3 mt-sm-0">
                <h3>{{ $testimony->title }}</h3>
                <p>{{ $testimony->detail }}</p>
                <p class="testimonial__i">{{ $testimony->description }}</p>
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


  <!--================Search Package section Start =================-->
  <section class="section-margin">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-xl-5 align-self-center mb-5 mb-lg-0">
          <div class="search-content">
            <h2>Search suitable <br class="d-none d-xl-block"> and affordable plan <br class="d-none d-xl-block"> for your tour</h2>
            <p>Make she'd moved divided air. Whose tree that replenish tone hath own upon them it multiply was blessed is lights make gathering so day dominion so creeping</p>
            <a class="button" href="#">Learn More</a>
          </div>
        </div>
        <div class="col-lg-6 col-xl-6 offset-xl-1">
          <div class="search-wrapper">
            <h3>Search Package</h3>

            <form class="search-form" action="#">
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Recipient's username">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="ti-search"></i></span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <select name="category" id="category">
                  <option value="disabled" disabled selected>Category</option>
                  <option value="8 AM">8 AM</option>
                  <option value="12 PM">12 PM</option>
                </select>
              </div>
              <div class="form-group">
                <select name="tourDucation" id="tourDuration">
                  <option value="disabled" disabled selected>Tour duration</option>
                  <option value="8 AM">8 AM</option>
                  <option value="12 PM">12 PM</option>
                </select>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <input type="date" class="form-control">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="ti-notepad"></i></span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <select name="priceRange" id="priceRange">
                  <option value="disabled" disabled selected>Price range</option>
                  <option value="8 AM">8 AM</option>
                  <option value="12 PM">12 PM</option>
                </select>
              </div>
              <div class="form-group">
                <button class="button border-0 mt-3" type="submit">Search Package</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!--================Search Package section End =================-->


  <!--================Blog section Start =================-->
  <section class="section-padding bg-gray">
    <div class="container">
      <div class="section-intro text-center pb-90px">
        <img class="section-intro-img" src="{{ asset('safario/img/home/section-icon.png') }}" alt="">
        <h2>From our Blog</h2>
        <p>Fowl have fruit moveth male they are that place you will lesser</p>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card-blog">
            <img class="card-img rounded-0" src="{{ asset('safario/img/blog/blog-1.png') }}" alt="">
            <div class="card-blog-body">
              <a href="#">
                <h4>Forest responds to consultation smoking in al fresco.</h4>
              </a>
              <ul class="card-blog-info">
                <li><a href="#"><span class="align-middle"><i class="ti-notepad"></i></span>Jan 03, 2018</a></li>
                <li><a href="#"><span class="align-middle"><i class="ti-comments-smiley"></i></span>03 Comments</a></li>
              </ul>
              <p>Varius metus morbi ferme libero vehic on porta malesuada ut interdu estmales torquent vehicula parturient </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card-blog">
            <img class="card-img rounded-0" src="{{ asset('safario/img/blog/blog-2.png') }}" alt="">
            <div class="card-blog-body">
              <a href="#">
                <h4>Forest responds to consultation smoking in al fresco.</h4>
              </a>
              <ul class="card-blog-info">
                <li><a href="#"><span class="align-middle"><i class="ti-notepad"></i></span>Jan 03, 2018</a></li>
                <li><a href="#"><span class="align-middle"><i class="ti-comments-smiley"></i></span>03 Comments</a></li>
              </ul>
              <p>Varius metus morbi ferme libero vehic on porta malesuada ut interdu estmales torquent vehicula parturient </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card-blog">
            <img class="card-img rounded-0" src="{{ asset('safario/img/blog/blog-3.png') }}" alt="">
            <div class="card-blog-body">
              <a href="#">
                <h4>Forest responds to consultation smoking in al fresco.</h4>
              </a>
              <ul class="card-blog-info">
                <li><a href="#"><span class="align-middle"><i class="ti-notepad"></i></span>Jan 03, 2018</a></li>
                <li><a href="#"><span class="align-middle"><i class="ti-comments-smiley"></i></span>03 Comments</a></li>
              </ul>
              <p>Varius metus morbi ferme libero vehic on porta malesuada ut interdu estmales torquent vehicula parturient </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================Blog section End =================-->

@endsection

@section('script')

@endsection
