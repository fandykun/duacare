<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Duacare Official Website</title>
  <link rel="icon" href="{{ asset('duacare-image/logo-icon.png') }}" type="image/png">

  <link rel="stylesheet" href="{{ asset('safario/vendors/bootstrap/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('safario/vendors/fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('safario/vendors/themify-icons/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('safario/vendors/linericon/style.css') }}">
  <link rel="stylesheet" href="{{ asset('safario/vendors/owl-carousel/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('safario/vendors/owl-carousel/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('safario/vendors/flat-icon/font/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('safario/vendors/nice-select/nice-select.css') }}">
  <link rel="stylesheet" href="{{ asset('safario/css/style.css?v=1.1') }}">
  <link rel="stylesheet" href="{{ asset('wow/css/libs/animate.css')}}">
  <link rel="stylesheet" href="{{ asset('css/style.css?v=1.1')}}">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="{{ asset('horizontal-timeline/assets/css/style.css')}}">
  @yield('style')
</head>
<body class="bg-shape" onload="loadOn()">
  <div id="loader">
    <div class="sk-folding-cube">
      <div class="sk-cube1 sk-cube"></div>
      <div class="sk-cube2 sk-cube"></div>
      <div class="sk-cube4 sk-cube"></div>
      <div class="sk-cube3 sk-cube"></div>
    </div>
  </div>

    <div id="body" style="display:none;" class="animate-bottom">
      @include('partials.header')

      @yield('content')      

      @include('partials.footer')
    </div>

  <script src="{{ asset('safario/vendors/jquery/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('safario/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('safario/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('safario/vendors/nice-select/jquery.nice-select.min.js') }}"></script>
  <script src="{{ asset('safario/js/jquery.ajaxchimp.min.js') }}"></script>
  <script src="{{ asset('safario/js/mail-script.js') }}"></script>
  <script src="{{ asset('safario/js/skrollr.min.js') }}"></script>
  <script src="{{ asset('safario/js/main.js') }}"></script>
  <script src="{{ asset('js/jquery.isotope.js')}}"></script>
  <script src="{{ asset('horizontal-timeline/assets/js/util.js') }}"></script>
  <script src="{{ asset('horizontal-timeline/assets/js/swipe-content.js') }}"></script>
  <script src="{{ asset('horizontal-timeline/assets/js/main.js') }}"></script>
  <script src="{{ asset('js/main.js?v=1.1') }}"></script>
  <script src="{{ asset('wow/dist/wow.min.js') }}"></script>
  <script>
    new WOW().init();
    function loadOn() {
        myVar = setTimeout(showPage, 1000);
    }

    function showPage() {
      document.getElementById("loader").style.display = "none";
      document.getElementById("body").style.display = "block";
    }
  </script>  
  <script>
  const token = '1638143949.6d4d7e8.7e02f2bcea674fa09b89adc5c2c900e1';
  var footerNumPhotos = 9;
  var footerScrElement = document.createElement( 'script' );
  window.footerResult = function( data ) {
    let ctx = ''
    let c = 0;
    for( x in data.data ){
      if (c%3 == 0) {
        ctx +=`<ul class="instafeed mb-1">`
      }
      ctx += `<li><a href="${data.data[x].link}" target="_blank"><img src="${data.data[x].images.low_resolution.url}"></a></li>`
      if (c%3 == 2) {
        ctx += `</ul>`
      }
      c+=1;
    }
    $('#instafeed').html(ctx);
  }
  footerScrElement.setAttribute( 'src', 'https://api.instagram.com/v1/users/self/media/recent?access_token=' + token + '&count=' + footerNumPhotos + '&callback=footerResult' );
  document.body.appendChild( footerScrElement );
  </script>

  @yield('script')
</body>
</html>