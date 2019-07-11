<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Duacare</title>
  <link rel="icon" href="{{ asset('duacare-image/logo-icon.png') }}" type="image/png">

  {{-- Custom Fonts --}}
  <link rel="stylesheet" href="{{ asset('safario/vendors/fontawesome/css/all.min.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  {{-- Custom Styles --}}
  <link rel="stylesheet" href="{{ asset('sb-admin/css/sb-admin-2.css') }}">

  @yield('style')
</head>
<body id="page-top">
    
    @yield('content')

    <script src="{{ asset('sb-admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('sb-admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('sb-admin/js/sb-admin-2.min.js') }}"></script>

    @yield('script')
</body>
</html>