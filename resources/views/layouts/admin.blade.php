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
  <div id="wrapper">
    @include('admin.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        @include('admin.navbar')
        @yield('content')
      </div>

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Duacare 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
  </div>
  
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

    <script src="{{ asset('sb-admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('sb-admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('sb-admin/js/sb-admin-2.min.js') }}"></script>

    @yield('script')
</body>
</html>