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


<section class="hero-banner-sm article-banner magic-ball magic-ball-banner">
<div class="container">
    <div class="hero-banner-sm-content">
    <h1>Duacare Berbicara</h1>
    </div>
</div>
</section>


<section class="bg-gray section-padding pb-xl-5">
    <div class="container">
      @if($news)
        <div class="row justify-content-center">
            <div class="col-12 col-md-5">
                <div class="">
                  <div class="row">
                    <div class="col">
                        <i class="fas fa-clock"></i>
                        <span class="text-muted font-weight-lighter">{{ \Carbon\Carbon::parse($news->created_at)->formatLocalized('%A, %d %B %Y') }}</span>
                    </div>
                    <div class="col">
                      <i class="fas fa-tags"></i>
                      <span class="text-muted font-weight-lighter">{{$news->events->title}}</span>
                    </div>
                  </div>
                  <hr>
                  <h2 class="wow fadeInLeft" data-wow-duration="1.0s" data-wow-delay="0.5s">{{ $news->title }}</h2>
                  <a class="button button-hero btn-sm mt-5 wow fadeInLeft" data-wow-duration="1.0s" data-wow-delay="1.0s" href="{{ url('/news') }}">Baca Selengkapnya&emsp;<i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-12 col-md-7 text-center" style="background: white">
                 <img class="img-fluid rounded-0" style="object-fit: contain; width:auto; max-height:400px" src="{{ asset('storage/articles/'. $news->image ) }}" alt="{{$news->title}}">
            </div>
        </div>
      @endif
    </div>
</section>

<!--================Blog Area =================-->
<section class="blog_area magic-ball magic-ball-testimonial section-margin-large">
    <div class="container">
        <div class="section-intro text-center pb-90px">
          <i class="fab fa-readme icon-gradient"></i>
          <h2>Artikel</h2>
          <hr>
        </div>
        <div class="row justify-content-center">
            @if(count($articles) > 0)
                @foreach($articles as $article)
                    <div class="col-lg-4 my-5 mb-lg-0 d-flex align-items-stretch">
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <div class="card-img-style-2">
                                    <img class="card-img img-fluid rounded-0" src="{{ asset('storage/articles/'. $article->image ) }}" alt="{{$article->title}}">
                                </div>
                                <a href="{{ url('article/'.$article->id.'/'.rawurlencode($article->title)) }}" class="blog_item_date">
                                    <h5>{{ \Carbon\Carbon::parse($article->created_at)->formatLocalized('%d')}}</h5>
                                    <p>{{ \Carbon\Carbon::parse($article->created_at)->formatLocalized('%b')}}</p>
                                </a>
                            </div>
                            
                            <div class="blog_details">
                                <hr>
                                <a class="d-inline-block text-justify" href="{{ url('article/'.$article->id.'/'.rawurlencode($article->title)) }}">
                                    <h5>{{ $article->title }}</h5>
                                </a>
                                <div class="ellipsis-3 text-justify">
                                  {!! $article->description !!}
                                </div>
                                <ul class="blog-info-link">
                                </ul>
                            </div>
                        </article>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="row justify-content-center">
            <div class="col-10 col-md-6">
                {{ $articles->appends(request()->query())->links('partials.pagination') }}
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
  </script>
@endsection