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



<section class="hero-banner-sm  news-banner magic-ball magic-ball-banner">
<div class="container">
    <div class="hero-banner-sm-content">
    <h1>Apa Kabar Duacare</h1>
    </div>
</div>
</section>
    

<!--================Blog Area =================-->
<section class="blog_area single-post-area section-margin">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img">
                        <img class="img-fluid" src="{{ asset('storage/news/'. $news->image) }}" alt="">
                    </div>
                    <div class="blog_details ml-4">
                        <h2>{{ $news->title }}</h2>
                        <ul class="blog-info-link mt-3 mb-4">
                            <li><a href="{{ url('/event'.'/'.str_replace(" ", "-", strtolower($news->events->title))) }}"><i class="far fa-user"></i>{{ $news->events->title }}</a></li>
                        </ul>
                        {!! $news->description !!}
                        <br>
                    </div>
                </div>
                <div class="navigation-top">
                    <div class="navigation-area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                @if(!empty($previous_item))
                                <div class="thumb">
                                    <a href="{{ url('news/'.$previous_item->id.'/'.rawurlencode($previous_item->title)) }}">
                                        <img class="img-fluid" src="{{ asset('safario/img/blog/prev.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="{{ url('news/'.$previous_item->id.'/'.rawurlencode($previous_item->title)) }}">
                                    <span class="lnr text-white lnr-arrow-left"></span>
                                    </a>
                                </div>
                                <div class="detials">
                                    <p>Post Sebelumnya</p>
                                    <a href="{{ url('news/'.$previous_item->id.'/'.rawurlencode($previous_item->title)) }}">
                                        <h4 class="ellipsis-2" >{{ $previous_item->title }}</h4>
                                    </a>
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                @if(!empty($next_item))
                                <div class="detials">
                                    <p>Post Selanjutnya</p>
                                    <a href="{{ url('news/'.$next_item->id.'/'.rawurlencode($next_item->title)) }}">
                                        <h4> {{ $next_item->title }} </h4>
                                    </a>
                                </div>
                                <div class="arrow">
                                        <span class="lnr text-white lnr-arrow-right"></span>
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
                        <form action="{{route('search.news')}}">
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
                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Berita Terbaru</h3>
                        @foreach($latest_items as $latest_item)
                        <div class="media post_item">
                            <div class="thumb-80">
                                <img src="{{ asset('storage/news/'. $latest_item->image ) }}" alt="{{$latest_item->title}}">
                            </div>
                            <div class="media-body">
                                <a href="{{ url('news/'.$latest_item->id.'/'.rawurlencode($latest_item->title)) }}">
                                    <h3 class="ellipsis-1"> {{ $latest_item->title }}</h3>
                                </a>
                                <p>
                                    {{ \Carbon\Carbon::parse($latest_item->created_at)->formatLocalized('%d %B %Y') }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </aside>
                    <aside class="single_sidebar_widget instagram_feeds">
                        <h4 class="widget_title">Instagram Feeds</h4>
                        <ul class="instagram_row flex-wrap" id="newsfeed"></ul>
                    </aside>
{{--                     <aside class="single_sidebar_widget newsletter_widget">
                        <h4 class="widget_title">Newsletter</h4>

                        <form action="#">
                            <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter email" required>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100" type="submit">Subscribe</button>
                        </form>
                    </aside> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->

@include('partials.contact')
    
@endsection

@section('script')
<script>
    $("#nav-media").addClass("active");

    var newsNumPhotos = 9;
    var newsContainer = document.getElementById( 'newsfeed' );
    var newsScrElement = document.createElement( 'script' );
  
    window.newsResult = function( data ) {
        for( x in data.data ){
            newsContainer.innerHTML += '<li><a href="' + data.data[x].link + '" target="_blank"><img class="img-fluid" src="' + data.data[x].images.low_resolution.url + '"></a></li>';
        }
    }
  
    newsScrElement.setAttribute( 'src', 'https://api.instagram.com/v1/users/self/media/recent?access_token=' + token + '&count=' + newsNumPhotos + '&callback=newsResult' );
    document.body.appendChild( newsScrElement );
</script>

@endsection