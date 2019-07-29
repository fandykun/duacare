<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login | DUACARE
        <?php echo date("Y"); ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" href="{{ asset('duacare-image/logo-icon.png') }}" type="image/png">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{asset('homepage/css/bootstrap.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('safario/vendors/fontawesome/css/all.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('homepage/login_register/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('homepage/login_register/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('homepage/login_register/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('homepage/login_register/css/main.css?v=1') }}">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{asset('duacare-image/logo-icon.png')}}" alt="Duacare logo">
                </div>
                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <img src="{{asset('duacare-image/logo-icon.png')}}" class="d-block d-md-none" alt="Duacare logo" style="display: block; margin-left: auto; margin-right: auto; width: 50%;">
                    <span class="login100-form-title">
                        Login to DUACARE
                    </span> 
                    @if (\Session::has('message'))
                    <div class="alert alert-danger text-center" role="alert">
                        <h6 style="font-size: 12px">{!! \Session::get('message') !!}</h6>
                    </div>
                    @endif @if (\Session::has('success'))
                    <div class="alert alert-success text-center" role="alert">
                        <h6 style="font-size: 12px">{!! \Session::get('success') !!}</h6>
                    </div>
                    @endif
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@gmail.com">
                        <input id="email" type="email" class="input100" name="email" value="{{ old( 'email') }} " required placeholder="Email">

                        <span class="focus-input100 "></span>
                        <span class="symbol-input100 ">
                            <i class="fas fa-envelope " aria-hidden="true "></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <input id="password" type="password" class="input100" required placeholder="Password" name="password">

                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fas fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <script src="{{ asset('sb-admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('sb-admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('sb-admin/js/sb-admin-2.min.js') }}"></script>

    <script src="{{ asset('homepage/login_register/vendor/tilt/tilt.jquery.min.js') }}"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.0
        })
    </script>
    <script src="{{ asset('homepage/login_register/js/main.js') }}"></script>

</body>

</html>