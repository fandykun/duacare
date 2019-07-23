@extends('layouts.landing')

@section('style')
  <link rel="stylesheet" href="{{asset('css/add/style.css')}}">
  <style>

  </style>
@endsection

@section('content')
<!--================Hero Banner SM Area Start =================-->
<section class="hero-banner-sm magic-ball magic-ball-banner" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 0px -80px" data-top-bottom="background-position: 0 100px">
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
                            <li><a href="javascript:void(0)" id="all" data-filter="*">All</a></li>
                            <li><a href="javascript:void(0)" data-filter=".ceo">Managing Direction</a></li>
                            <li><a href="javascript:void(0)" data-filter=".finance_department">Finance Department</a></li>
                            <li><a href="javascript:void(0)" data-filter=".branding_communication">Branding & Communication Department</a></li>
                            <li><a href="javascript:void(0)" data-filter=".human_resource">Human Resource Department</a></li>
                            <li><a href="javascript:void(0)" data-filter=".entrepreneurship">Entrepreneurship Department</a></li>
                        </ol>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="grid row justify-content-center">
                <div class="col-md-3 col-sm-6 element-item mb-4 ceo" data-category="ceo">
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset('duacare-image/dld.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title text-white">Vice Chief Executive Officer</h3>
                            <span class="post">Vice Chief Executive Officer</span>
                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 element-item mb-4 ceo" data-category="ceo">
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset('duacare-image/dld.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title text-white">Chief Executive Officer</h3>
                            <span class="post">Chief Executive Officer</span>
                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 element-item mb-4 ceo" data-category="ceo">
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset('duacare-image/dld.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title text-white">Secretary</h3>
                            <span class="post">Secretary</span>
                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 element-item mb-4 finance_department" data-category="finance_department">
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset('duacare-image/dld.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title text-white">Maeda Dicky Candra</h3>
                            <span class="post">Founder</span>
                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 element-item mb-4 finance_department" data-category="finance_department">
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset('duacare-image/dld.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title text-white">Maeda Dicky Candra</h3>
                            <span class="post">Founder</span>
                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 element-item mb-4 branding_communication" data-category="branding_communication">
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset('duacare-image/dld.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title text-white">Maeda Dicky Candra</h3>
                            <span class="post">Founder</span>
                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 element-item mb-4 branding_communication" data-category="branding_communication">
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset('duacare-image/dld.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title text-white">Maeda Dicky Candra</h3>
                            <span class="post">Founder</span>
                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 element-item mb-4 human_resource" data-category="human_resource">
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset('duacare-image/dld.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title text-white">Maeda Dicky Candra</h3>
                            <span class="post">Founder</span>
                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> 
                <div class="col-md-3 col-sm-6 element-item mb-4 human_resource" data-category="human_resource">
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset('duacare-image/dld.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title text-white">Maeda Dicky Candra</h3>
                            <span class="post">Founder</span>
                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> 
                <div class="col-md-3 col-sm-6 element-item mb-4 entrepreneurship" data-category="entrepreneurship">
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset('duacare-image/dld.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title text-white">Maeda Dicky Candra</h3>
                            <span class="post">Founder</span>
                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> 
                <div class="col-md-3 col-sm-6 element-item mb-4 entrepreneurship" data-category="entrepreneurship">
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset('duacare-image/dld.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title text-white">Maeda Dicky Candra</h3>
                            <span class="post">Founder</span>
                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> 
                <div class="col-md-3 col-sm-6 element-item mb-4 entrepreneurship" data-category="entrepreneurship">
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset('duacare-image/dld.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title text-white">Maeda Dicky Candra</h3>
                            <span class="post">Founder</span>
                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> 
            </div>
            <br><br>
        </div>
    </div>

@endsection

@section('script')
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
  <script>
    var $grid = $('.grid').isotope({
      itemSelector: '.element-item',
      layoutMode: 'fitRows',
    });

    $('#all').click();
    $('.cat a').click(function() {
        $('.cat .active').removeClass('active');
        $(this).addClass('active');
        var selector = $(this).attr('data-filter');
        $grid.isotope({ filter: selector });
    });

  </script>
@endsection