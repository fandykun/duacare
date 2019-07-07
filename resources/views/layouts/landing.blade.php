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

  <link rel="stylesheet" href="{{ asset('safario/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('safario/css/animate.css') }}">
  @yield('style')
</head>
<body class="bg-shape">

  @include('partials.header')

  @yield('content')

  @include('partials.footer')

  <script src="{{ asset('safario/vendors/jquery/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('safario/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('safario/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('safario/vendors/nice-select/jquery.nice-select.min.js') }}"></script>
  <script src="{{ asset('safario/js/jquery.ajaxchimp.min.js') }}"></script>
  <script src="{{ asset('safario/js/mail-script.js') }}"></script>
  <script src="{{ asset('safario/js/skrollr.min.js') }}"></script>
  <script src="{{ asset('safario/js/main.js') }}"></script>
  <script src="{{ asset('safario/js/wow.min.js') }}"></script>
  <script>
    new WOW().init();
  </script>  
  @yield('script')
</body>
</html>