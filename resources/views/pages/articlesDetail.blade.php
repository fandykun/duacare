@extends('layouts.landing')

@section('style')
  <style>
.thumb-80 {
  position: relative;
  width: 80px;
  height: 80px;
  overflow: hidden;
}
.thumb-80 img {
  position: absolute;
  left: 50%;
  top: 50%;
  height: 100%;
  width: auto;
  -webkit-transform: translate(-50%,-50%);
      -ms-transform: translate(-50%,-50%);
          transform: translate(-50%,-50%);
}
  </style>
@endsection

@section('content')



<!--================Hero Banner SM Area Start =================-->
<section class="hero-banner-sm magic-ball magic-ball-banner" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 0px -80px" data-top-bottom="background-position: 0 100px">
    <div class="container">
        <div class="hero-banner-sm-content">
        <h1>Duacare Berbicara</h1>
        <p>Sepatah dua kata pemikiran dan sudut pandang duacare dengan keadaan sekitar</p>
        </div>
    </div>
</section>
<!--================Hero Banner SM Area End =================-->
    
    

<!--================Blog Area =================-->
<section class="blog_area single-post-area section-margin">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img">
                        <img class="img-fluid" src="{{ asset('storage/articles/'. $article->image) }}" alt="">
                    </div>
                    <div class="blog_details">
                        <h2>{{ $article->title }}</h2>
                    </div>
                    {!! $article->description !!}
                </div>
                <div class="navigation-top">
                    <div class="navigation-area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                @if(!empty($previous_item))
                                <div class="thumb">
                                    <img class="img-fluid" src="{{ asset('safario/img/blog/prev.jpg') }}" alt="">
                                </div>
                                <div class="arrow">
                                    <a href="#">
                                        <span class="lnr text-white lnr-arrow-left"></span>
                                    </a>
                                </div>
                                <div class="detials">
                                    <p>Post Sebelumnya</p>
                                    <a href="{{ url('article/'.$previous_item->id.'/'.rawurlencode($previous_item->title)) }}">
                                        <h4 class="ellipsis-2" >{{ $previous_item->title }}</h4>
                                    </a>
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                @if(!empty($next_item))
                                <div class="detials">
                                    <p>Post Selanjutnya</p>
                                    <a href="{{ url('article/'.$next_item->id.'/'.rawurlencode($next_item->title)) }}">
                                        <h4> {{ $next_item->title }} </h4>
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="#">
                                        <span class="lnr text-white lnr-arrow-right"></span>
                                    </a>
                                </div>
                                <div class="thumb">
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset('safario/img/blog/next.jpg') }}" alt="">
                                    </a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <form action="{{route('search.articles')}}">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" autocomplete="off" name="q" placeholder="Kata kunci pencarian">
                                    <div class="input-group-append">
                                        <button class="btn" type="button"><i class="ti-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100" type="submit">Cari</button>
                        </form>
                    </aside>

                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Artikel Terbaru</h3>
                        @foreach($latest_items as $latest_item)
                        <div class="media post_item">
                            <div class="thumb-80">
                                <img src="{{ asset('storage/articles/'. $latest_item->image ) }}" alt="{{$latest_item->title}}">
                            </div>
                            <div class="media-body">
                                <a href="{{ url('article/'.$latest_item->id.'/'.rawurlencode($latest_item->title)) }}">
                                    <h3 class="ellipsis-1"> {{ $latest_item->title }}</h3>
                                </a>
                                <p>
                                    {{ \Carbon\Carbon::parse($latest_item->created_at)->formatLocalized('%d %B %Y') }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </aside>
                    <aside class="single_sidebar_widget tag_cloud_widget">
                        <h4 class="widget_title">Event Duacare</h4>
                        <ul class="list">
                            @foreach ($events as $event)
                                <li>
                                    <a href="{{ url('/event'.'/'.str_replace(" ", "-", strtolower($event->title))) }}">{{$event->title}}</a>
                                </li>                                
                            @endforeach
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->

@include('partials.contact')

@endsection