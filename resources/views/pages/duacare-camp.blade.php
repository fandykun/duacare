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

  <!--================Tour section End =================-->


@include('partials.contact')

@endsection

@section('script')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
  <script>
    $("#nav-dld").addClass("active");
    $(document).ready(function(){
        $('.amount').mask('0.000.000.000.000', {reverse: true});
    });

  </script>

@endsection