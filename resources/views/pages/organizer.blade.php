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
                            <li><a href="javascript:void(0)" data-filter="*">All</a></li>
                            <li><a href="javascript:void(0)" data-filter=".ceo">Managing Direction</a></li>
                            <li><a href="javascript:void(0)" data-filter=".finance_department">Finance</a></li>
                            <li><a href="javascript:void(0)" data-filter=".branding_communication">Branding & Communication</a></li>
                            <li><a href="javascript:void(0)" data-filter=".human_resource">Human Resource</a></li>
                            <li><a href="javascript:void(0)" data-filter=".entrepreneurship">Entrepreneurship</a></li>
                        </ol>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="row justify-content-center" id="lightbox">
                <div class="col-md-3 col-sm-6 element-item mb-4 ceo" >
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset('duacare-image/dld.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title text-white">Vico Ilham Syahputra</h3>
                            <span class="post">Vice Chief Executive Officer</span>
                            <small>vicosyahputra@gmail.com</small>
                            <ul class="social">
                                <li><a target="_blank" href="https://www.facebook.com/vicoois"><i class="fab fa-facebook"></i></a></li>
                                <li><a target="_blank" href="https://twitter.com/vicoois"><i class="fab fa-twitter"></i></a></li>
                                <li><a target="_blank" href="https://www.instagram.com/vicoois/"><i class="fab fa-instagram"></i></a></li>
                                <li><a target="_blank" href="https://www.linkedin.com/in/vico-ilham-syahputra-63a51b141/"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 element-item mb-4 ceo" >
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset('duacare-image/dld.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title text-white">Chief Executive Officer</h3>
                            <span class="post">Chief Executive Officer</span>
                            <ul class="social">
                                <li><a target="_blank" href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-google-plus"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 element-item mb-4 ceo" >
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset('duacare-image/dld.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title text-white">Secretary</h3>
                            <span class="post">Secretary</span>
                            <ul class="social">
                                <li><a target="_blank" href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-google-plus"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 element-item mb-4 finance_department" >
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset('duacare-image/dld.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title text-white">Maeda Dicky Candra</h3>
                            <span class="post">Founder</span>
                            <ul class="social">
                                <li><a target="_blank" href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-google-plus"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 element-item mb-4 finance_department" >
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset('duacare-image/dld.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title text-white">Maeda Dicky Candra</h3>
                            <span class="post">Founder</span>
                            <ul class="social">
                                <li><a target="_blank" href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-google-plus"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 element-item mb-4 branding_communication" >
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset('duacare-image/dld.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title text-white">Andika Andra</h3>
                            <span class="post">Branding & Communication</span>
                            <small>andikaandra03@gmail.com</small>
                            <ul class="social">
                                <li><a target="_blank" href="https://www.facebook.com/andika.andraaa"><i class="fab fa-facebook"></i></a></li>
                                <li><a target="_blank" href="https://www.instagram.com/andikandraa/"><i class="fab fa-instagram"></i></a></li>
                                <li><a target="_blank" href="https://www.linkedin.com/in/andika-andra-0a6463153/"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 element-item mb-4 branding_communication" >
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset('duacare-image/dld.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title text-white">Maulani Syahrozad</h3>
                            <span class="post">Branding & Communication</span>
                            <small>syahrozadlani56@gmail.com</small>
                            <ul class="social">
                                <li><a target="_blank" href="https://www.facebook.com/putri.syahrozadsiichink"><i class="fab fa-facebook"></i></a></li>
                                <li><a target="_blank" href="https://mobile.twitter.com/Lanisyahrozad"><i class="fab fa-twitter"></i></a></li>
                                <li><a target="_blank" href="https://www.instagram.com/laninajib"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 element-item mb-4 branding_communication" >
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset('duacare-image/dld.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title text-white">Fandy Kuncoro</h3>
                            <span class="post">Branding & Communication</span>
                            <small>fandy19061999@gmail.com</small>
                            <ul class="social">
                                <li><a target="_blank" href="https://www.facebook.com/FandyKuncoroAdianto"><i class="fab fa-facebook"></i></a></li>
                                <li><a target="_blank" href="https://twitter.com/fandykunnn"><i class="fab fa-twitter"></i></a></li>
                                <li><a target="_blank" href="https://www.instagram.com/fandykun/"><i class="fab fa-instagram"></i></a></li>
                                <li><a target="_blank" href="https://www.linkedin.com/in/fandy-kuncoro-adianto-4b4607178/"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 element-item mb-4 branding_communication" >
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset('duacare-image/dld.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title text-white">Achmad Zidan</h3>
                            <span class="post">Branding & Communication</span>
                            <small>azidan.it@gmail.com</small>
                            <ul class="social">
                                <li><a target="_blank" href="https://www.facebook.com/azidan.it"><i class="fab fa-facebook"></i></a></li>
                                <li><a target="_blank" href="https://twitter.com/azidanit"><i class="fab fa-twitter"></i></a></li>
                                <li><a target="_blank" href="https://www.instagram.com/azidanit"><i class="fab fa-instagram"></i></a></li>
                                <li><a target="_blank" href="https://www.linkedin.com/in/azidan.it"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 element-item mb-4 branding_communication" >
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset('duacare-image/dld.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title text-white">Zaenal Mahmudi I.</h3>
                            <span class="post">Branding & Communication</span>
                            <small>z0mahmudi@gmail.com</small>
                            <ul class="social">
                                <li><a target="_blank" href="https://www.instagram.com/nasirrjr/"><i class="fab fa-instagram"></i></a></li>
                                <li><a target="_blank" href="https://twitter.com/seruputan"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 element-item mb-4 branding_communication" >
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset('duacare-image/dld.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title text-white">Fety Vanda Y.</h3>
                            <span class="post">Branding & Communication</span>
                            <ul class="social">
                                <li><a target="_blank" href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-google-plus"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 element-item mb-4 human_resource" >
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset('duacare-image/dld.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title text-white">Maeda Dicky Candra</h3>
                            <span class="post">Founder</span>
                            <ul class="social">
                                <li><a target="_blank" href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-google-plus"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> 
                <div class="col-md-3 col-sm-6 element-item mb-4 human_resource" >
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset('duacare-image/dld.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title text-white">Maeda Dicky Candra</h3>
                            <span class="post">Founder</span>
                            <ul class="social">
                                <li><a target="_blank" href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-google-plus"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> 
                <div class="col-md-3 col-sm-6 element-item mb-4 entrepreneurship" >
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset('duacare-image/dld.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title text-white">Maeda Dicky Candra</h3>
                            <span class="post">Founder</span>
                            <ul class="social">
                                <li><a target="_blank" href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-google-plus"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> 
                <div class="col-md-3 col-sm-6 element-item mb-4 entrepreneurship" >
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset('duacare-image/dld.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title text-white">Maeda Dicky Candra</h3>
                            <span class="post">Founder</span>
                            <ul class="social">
                                <li><a target="_blank" href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-google-plus"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> 
                <div class="col-md-3 col-sm-6 element-item mb-4 entrepreneurship" >
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset('duacare-image/dld.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title text-white">Maeda Dicky Candra</h3>
                            <span class="post">Founder</span>
                            <ul class="social">
                                <li><a target="_blank" href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-google-plus"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-linkedin"></i></a></li>
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
  <script>
    $(window).on('load', function(){
        $("#all-organizer").trigger('click'); 
        var $container = $('#lightbox');
        $container.isotope({
            filter: '.none',
            itemSelector: '.element-item',
        });

        $('.cat a').click(function() {
            $('.cat .active').removeClass('active');
            $(this).addClass('active');
            var selector = $(this).attr('data-filter');
            $container.isotope({ filter: selector });
        });
    });


  </script>
@endsection