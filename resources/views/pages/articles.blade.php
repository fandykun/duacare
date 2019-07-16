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
    <h1>Duacare Brainstorming</h1>
    <p>Sepatah duakata pemikiran dan sudut pandang duacare dengan keadaan sekitar</p>
    </div>
</div>
</section>
<!--================Hero Banner SM Area End =================-->



<!--================Blog Area =================-->
<section class="blog_area magic-ball magic-ball-testimonial section-margin-large">
    <div class="container">
{{--         <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">

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
                </div>
            </div>
        </div> --}}

        <div class="row justify-content-center mb-5">
            <div class="col-10 col-md-6">
                {{ $articles->appends(request()->query())->links('partials.pagination') }}
            </div>
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
                                <a href="#" class="blog_item_date">
                                    <h5>{{ \Carbon\Carbon::parse($article->created_at)->formatLocalized('%d')}}</h5>
                                    <p>{{ \Carbon\Carbon::parse($article->created_at)->formatLocalized('%b')}}</p>
                                </a>
                            </div>
                            
                            <div class="blog_details">
                                <hr>
                                <a class="d-inline-block text-justify" href="{{ url('articles/'.$article->id.'/'.rawurlencode($article->title)) }}">
                                    <h5>{{ $article->title }}</h5>
                                </a>
                                <p class="ellipsis-3 text-justify">{{ $article->description }}</p>
                                <ul class="blog-info-link">
                                    {{-- <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li> --}}
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

<section class="bg-gray section-padding pb-xl-5">
    <div class="container">
      <div class="section-intro text-center pb-90px">
        <i class="fas fa-users icon-gradient"></i>
        <h2>Duacare Kata Mereka</h2>
        <hr>
      </div>
      <div class="owl-carousel owl-theme testimonial pb-xl-5">

      </div>
    </div>
</section>


@endsection

@section('script')
  <script>
    $("#nav-media").addClass("active");
  </script>
@endsection