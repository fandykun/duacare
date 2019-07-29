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


<section class="blog_area section-margin-large">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                @if(count($news) > 0)
                    @foreach($news as $berita)
                    <article class="blog_item">
                    <div class="blog_item_img">
                        <div>
                            <img class="card-img img-fluid rounded-0" src="{{ asset('storage/news/'. $berita->image ) }}" alt="{{$berita->title}}">
                        </div>
                        <a href="#" class="blog_item_date">
                        <h5>{{ \Carbon\Carbon::parse($berita->created_at)->formatLocalized('%d')}}</h5>
                        <p>{{ \Carbon\Carbon::parse($berita->created_at)->formatLocalized('%b')}}</p>
                        </a>
                    </div>
                    
                    <div class="blog_details">
                        <a class="d-inline-block text-justify" href="{{ url('news/'.$berita->id.'/'.rawurlencode($berita->title)) }}">
                            <h2>{{ $berita->title }}</h2>
                        </a>
                        <p class="text-justify">{{ $berita->description }}</p>
                        <ul class="blog-info-link">
                            <li><a href="{{ url('/event'.'/'.str_replace(" ", "-", strtolower($berita->events->title))) }}"><i class="far fa-user"></i> {{ $berita->events->title }} </a></li>
                        </ul>
                    </div>
                    </article>
                    @endforeach
                @endif
                    <div class="row justify-content-center">
                        {{ $news->appends(request()->query())->links('partials.pagination') }}
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


                    <aside class="single_sidebar_widget instagram_feeds">
                    <h4 class="widget_title">Instagram Feeds</h4>
                    <ul class="instagram_row flex-wrap" id="newsfeed">
                    </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>

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