@extends('layouts.landing')

@section('style')
  <link rel="stylesheet" href="{{asset('css/add/style.css')}}">
  <style>
    .grid:after {
      content: '';
      display: block;
      clear: both;
    }

    .element-item {
      position: relative;
      float: left;
    }

  </style>
@endsection

@section('content')
<!--================Hero Banner SM Area Start =================-->
<section class="hero-banner-sm organizer-banner magic-ball magic-ball-banner">
  <div class="container">
      <div class="hero-banner-sm-content">
      <h1>Organizer</h1>
      <p></p>
      </div>
  </div>
</section>
  <!--================Hero Banner SM Area End =================-->
  
    <div id="tf-works">
        <div class="container"> <!-- Container -->
            <div class="section-title text-center center">
                <h2>Organizer Duacare</h2>
                <div class="clearfix"></div>
            </div>
            <div class="space"></div>

            <div class="categories">
                <ul class="cat">
                    <li class="pull-left"><h3><strong>Divisi</strong></h3></li>
                    <li class="pull-right">
                        <ol class="type" id="filters">
                            <li><a href="javascript:void(0)" data-filter="">All</a></li>
                            <li><a href="javascript:void(0)" data-filter=".Managing">Managing Direction</a></li>
                            <li><a href="javascript:void(0)" data-filter=".Finance">Finance</a></li>
                            <li><a href="javascript:void(0)" data-filter=".BnC">Branding & Communication</a></li>
                            <li><a href="javascript:void(0)" data-filter=".HRD">Human Resource</a></li>
                            <li><a href="javascript:void(0)" data-filter=".Kwu">Entrepreneurship</a></li>
                        </ol>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="row justify-content-center" id="lightbox">
                @foreach($organizers as $organizer)
                    <div class="col-md-3 col-sm-6 element-item mb-4 {{$organizer->division}}">
                        <div class="our-team">
                            <div class="pic">
                                <img src="{{ asset('duacare-image/dld.jpg') }}" alt="">
                            </div>
                            <div class="team-content">
                                <h3 class="title text-white">{{$organizer->name}}</h3>
                                <span class="post">{{$organizer->description}}</span>
                                <small>{{$organizer->email}}</small>
                                <ul class="social">
                                    @if($organizer->facebook)
                                        <li><a target="_blank" href="{{$organizer->facebook}}"><i class="fab fa-facebook"></i></a></li>
                                    @endif
                                    @if($organizer->twitter)
                                        <li><a target="_blank" href="{{$organizer->twitter}}"><i class="fab fa-twitter"></i></a></li>
                                    @endif
                                    @if($organizer->instagram)
                                        <li><a target="_blank" href="{{$organizer->instagram}}"><i class="fab fa-instagram"></i></a></li>
                                    @endif
                                    @if($organizer->linkedin)
                                        <li><a target="_blank" href="{{$organizer->linkedin}}"><i class="fab fa-linkedin"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
            <br><br>
        </div>
    </div>

@endsection

@section('script')
  <script>
    $(window).on('load', function(){
        $("#all-organizer").trigger('click'); 
        var $container = $('#lightbox');

        $('.cat a').click(function() {
            $('.cat .active').removeClass('active');
            $(this).addClass('active');
            var selector = $(this).attr('data-filter');
            $container.isotope({ filter: selector });
        });
    });


  </script>
@endsection