<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('anime/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('anime/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('anime/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('anime/css/plyr.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('anime/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('anime/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('anime/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('anime/css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    @include('partial.header')
    <!-- Header End -->

    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Sign Up</h2>
                        <p>Welcome to the official Anime blog.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Signup Section Begin -->
    <section class="signup spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Sign Up</h3>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="input__item">
                                <input id="name" type="text" placeholder="Nama" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <span class="icon_profile"></span>
                            </div>
                            <div class="input__item">
                                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="icon_mail"></span>
                            </div>
                            <div class="input__item">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="icon_lock"></span>
                            </div>
                            <div class="input__item">
                                <input id="password-confirm" type="password" placeholder="confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="icon_lock"></span>
                            </div>
                            
                            <button type="submit" class="site-btn">Sign Up Now</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__register">
                        <h3>Already have an account?</h3>
                        <a href="login" class="primary-btn">Log In!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Signup Section End -->
        </div>
    </section>
    <!-- Login Section End -->

    <!-- Footer Section Begin -->
    @include('partial.footer')
      <!-- Footer Section End -->

      <!-- Search model Begin -->
      
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="{{asset('anime/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('anime/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('anime/js/player.js')}}"></script>
    <script src="{{asset('anime/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('anime/js/mixitup.min.js')}}"></script>
    <script src="{{asset('anime/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('anime/js/main.js')}}"></script>


</body>

</html>