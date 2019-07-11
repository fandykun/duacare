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
        <h1>Blog Single</h1>
        <p>Air seed winged lights saw kind whales in sixth best a dont seas dron image so fish all tree on</p>
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
                                <img class="img-fluid" src="{{ asset('storage/news/'. $news->image) }}" alt="">
                            </div>
                            <div class="blog_details">
                                <h2>{{ $news->title }}</h2>
                    <ul class="blog-info-link mt-3 mb-4">
                    <li><a href="#"><i class="far fa-user"></i>{{ $news->events->title }}</a></li>
                    {{-- <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li> --}}
                    </ul>
                </div>
            </div>
            <div class="navigation-top">
            {{-- <div class="d-sm-flex justify-content-between text-center">
                <p class="like-info"><span class="align-middle"><i class="far fa-heart"></i></span> Lily and 4 people like this</p>
                <div class="col-sm-4 text-center my-2 my-sm-0">
                <p class="comment-count"><span class="align-middle"><i class="far fa-comment"></i></span> 06 Comments</p>
                </div>
                <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                </ul>
            </div> --}}

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
                            <a href="{{ url('news/'.$previous_item->id.'/'.urlencode($previous_item->title)) }}">
                                <h4 class="ellipsis-2" >{{ $previous_item->title }}</h4>
                            </a>
                        </div>
                        @endif
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                        @if(!empty($next_item))
                        <div class="detials">
                            <p>Post Selanjutnya</p>
                            <a href="{{ url('news/'.$next_item->id.'/'.urlencode($next_item->title)) }}">
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
            
            
            <div class="blog-author">
            <div class="media align-items-center">
                <img src="{{ asset('safario/img/blog/author.png') }}" alt="">
                <div class="media-body">
                <a href="#">
                    <h4>Harvard milan</h4>
                </a>
                <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he our dominion twon Second divided from</p>
                </div>
            </div>
            </div>

                            <div class="comments-area">
                                    <h4>05 Comments</h4>
                                    <div class="comment-list">
                <div class="single-comment justify-content-between d-flex">
                    <div class="user justify-content-between d-flex">
                        <div class="thumb">
                            <img src="{{ asset('safario/img/blog/c1.png') }}" alt="">
                        </div>
                        <div class="desc">
                            <p class="comment">
                            Multiply sea night grass fourth day sea lesser rule open subdue female fill which them Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser 
                            </p>

                            <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <h5>
                                <a href="#">Emilly Blunt</a>
                                </h5>
                                <p class="date">December 4, 2017 at 3:12 pm </p>
                            </div>

                            <div class="reply-btn">
                                <a href="#" class="btn-reply text-uppercase">reply</a>
                            </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                                    </div>
                                    <div class="comment-list">
                    <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                            <div class="thumb">
                                <img src="{{ asset('safario/img/blog/c2.png') }}" alt="">
                            </div>
                            <div class="desc">
                                <p class="comment">
                                Multiply sea night grass fourth day sea lesser rule open subdue female fill which them Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser 
                                </p>

                                <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <h5>
                                    <a href="#">Emilly Blunt</a>
                                    </h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                </div>

                                <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                                    </div>
                                    <div class="comment-list">
                    <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                            <div class="thumb">
                                <img src="{{ asset('safario/img/blog/c3.png') }}" alt="">
                            </div>
                            <div class="desc">
                                <p class="comment">
                                Multiply sea night grass fourth day sea lesser rule open subdue female fill which them Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser 
                                </p>

                                <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <h5>
                                    <a href="#">Emilly Blunt</a>
                                    </h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                </div>

                                <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                                    </div>
                            </div>
                            <div class="comment-form">
                                    <h4>Leave a Reply</h4>
                                    <form class="form-contact comment_form" action="#" id="commentForm">
                <div class="row">
                    <div class="col-12">
                    <div class="form-group">
                        <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                    </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                    </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                    </div>
                    </div>
                    <div class="col-12">
                    <div class="form-group">
                        <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="button button-contactForm">Send Message</button>
                </div>
                </form>
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

                <aside class="single_sidebar_widget post_category_widget">
                <h4 class="widget_title">Category</h4>
                <ul class="list cat-list">
                    <li>
                        <a href="#" class="d-flex">
                            <p>Resaurant food</p>
                            <p>(37)</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex">
                            <p>Travel news</p>
                            <p>(10)</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex">
                            <p>Modern technology</p>
                            <p>(03)</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex">
                            <p>Product</p>
                            <p>(11)</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex">
                            <p>Inspiration</p>
                            <p>(21)</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex">
                            <p>Health Care</p>
                            <p>(21)</p>
                        </a>
                    </li>
                </ul>
                </aside>

                <aside class="single_sidebar_widget popular_post_widget">
                    <h3 class="widget_title">Recent Post</h3>
                    @foreach($latest_items as $latest_item)
                    <div class="media post_item">
                        <div class="thumb-80">
                            <img src="{{ asset('storage/news/'. $latest_item->image ) }}" alt="{{$latest_item->title}}">
                        </div>
                        <div class="media-body">
                            <a href="{{ url('news/'.$latest_item->id.'/'.urlencode($latest_item->title)) }}">
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
                                <a href="#">{{$event->title}}</a>
                            </li>                                
                        @endforeach
                    </ul>
                </aside>


                <aside class="single_sidebar_widget instagram_feeds">
                <h4 class="widget_title">Instagram Feeds</h4>
                <ul class="instagram_row flex-wrap">
                    <li>
                        <a href="#">
                            <img class="img-fluid" src="{{ asset('safario/img/instagram/widget-i1.png') }}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img class="img-fluid" src="{{ asset('safario/img/instagram/widget-i2.png') }}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img class="img-fluid" src="{{ asset('safario/img/instagram/widget-i3.png') }}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img class="img-fluid" src="{{ asset('safario/img/instagram/widget-i4.png') }}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img class="img-fluid" src="{{ asset('safario/img/instagram/widget-i5.png') }}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img class="img-fluid" src="{{ asset('safario/img/instagram/widget-i6.png') }}" alt="">
                        </a>
                    </li>
                </ul>
                </aside>


                <aside class="single_sidebar_widget newsletter_widget">
                <h4 class="widget_title">Newsletter</h4>

                <form action="#">
                    <div class="form-group">
                    <input type="email" class="form-control" placeholder="Enter email" required>
                    </div>
                    <button class="button rounded-0 primary-bg text-white w-100" type="submit">Subscribe</button>
                </form>
                </aside>
            </div>
                    </div>
            </div>
    </div>
</section>
<!--================Blog Area =================-->
    


@endsection