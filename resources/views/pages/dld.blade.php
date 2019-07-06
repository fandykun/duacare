@extends('layouts.landing')

@section('style')
@endsection

@section('content')
  <!--================Hero Banner SM Area Start =================-->
  <section class="hero-banner-sm magic-ball magic-ball-banner" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 0px -80px" data-top-bottom="background-position: 0 100px">
    <div class="container">
      <div class="hero-banner-sm-content">
        <h1>Duacare Loyal Donature (DLD)</h1>
        {{-- <p>Air seed winged lights saw kind whales in sixth best a dont seas dron image so fish all tree on</p> --}}
      </div>
    </div>
  </section>
  <!--================Hero Banner SM Area End =================-->

  <!--================Tour section Start =================-->
  <section class="section-margin">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="tour-card">
            <img class="card-img rounded-0" src="{{ asset('safario/img/home/tour1.png') }}" alt="">
            <div class="tour-card-overlay">
              <div class="media">
                <div class="media-body">
                  <h4>Paket Platinum</h4>
                  {{-- <small>5 days offer</small> --}}
                  <p>Berdonasi lebih dari Rp.100.000,-</p>
                </div>
                <div class="media-price">
                  <h4 class="text-primary"> Rp.100.000,-</h4>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="row">
            <div class="col-lg-10 offset-lg-1">
              <div class="tour-content">
                <h2>Kami menyediakan beberapa pilihan paket</h2>
                <p>Make she'd moved divided air. Whose tree that hath own upon them it multiply was blessed </p>
              </div>
            </div>
          </div>

          <div class="tour-card">
            <img class="card-img rounded-0" src="{{ asset('safario/img/home/tour2.png') }}" alt="">
            <div class="tour-card-overlay">
              <div class="media">
                <div class="media-body">
                  <h4>Paket Gold</h4>
                  {{-- <small>5 days offer</small> --}}
                  <p>Antara Rp. 75.000,- hingga Rp. 100.000,-</p>
                </div>
                <div class="media-price">
                  <h4 class="text-primary">Rp. 75.000,-</h4>
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
                  <h4>Paket Silver</h4>
                  {{-- <small>5 days offer</small> --}}
                  <p>Antara Rp. 50.000,- hinga Rp. 75.000</p>
                </div>
                <div class="media-price">
                  <h4 class="text-primary">Rp. 50.000,-</h4>
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
                  <h4>Paket Bronze</h4>
                  {{-- <small>5 days offer</small> --}}
                  <p>Antara Rp. 25.000,- hingga Rp. 50.000,-</p>
                </div>
                <div class="media-price">
                  <h4 class="text-primary">Rp. 25.000,-</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================Tour section End =================-->


@endsection