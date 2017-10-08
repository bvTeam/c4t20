{{--<!DOCTYPE html>--}}
{{--<html lang="{{ app()->getLocale() }}">--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

    {{--<!-- CSRF Token -->--}}
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

    {{--<title>{{ config('app.name', 'Laravel') }}</title>--}}

    {{--<!-- Styles -->--}}
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
{{--</head>--}}
{{--<body>--}}
    {{--<div id="app">--}}
        {{--<nav class="navbar navbar-default navbar-static-top">--}}
            {{--<div class="container">--}}
                {{--<div class="navbar-header">--}}

                    {{--<!-- Collapsed Hamburger -->--}}
                    {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">--}}
                        {{--<span class="sr-only">Toggle Navigation</span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                    {{--</button>--}}

                    {{--<!-- Branding Image -->--}}
                    {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                        {{--{{ config('app.name', 'Laravel') }}--}}
                    {{--</a>--}}
                {{--</div>--}}

                {{--<div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
                    {{--<!-- Left Side Of Navbar -->--}}
                    {{--<ul class="nav navbar-nav">--}}
                        {{--&nbsp;--}}
                    {{--</ul>--}}

                    {{--<!-- Right Side Of Navbar -->--}}
                    {{--<ul class="nav navbar-nav navbar-right">--}}
                        {{--<!-- Authentication Links -->--}}
                        {{--@guest--}}
                            {{--<li><a href="{{ route('login') }}">Login</a></li>--}}
                            {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
                        {{--@else--}}
                            {{--<li class="dropdown">--}}
                                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
                                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                                {{--</a>--}}

                                {{--<ul class="dropdown-menu" role="menu">--}}
                                    {{--<li>--}}
                                        {{--<a href="{{ route('logout') }}"--}}
                                            {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                            {{--Logout--}}
                                        {{--</a>--}}

                                        {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                            {{--{{ csrf_field() }}--}}
                                        {{--</form>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--@endguest--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</nav>--}}

        {{--@yield('content')--}}
    {{--</div>--}}

    {{--<!-- Scripts -->--}}
    {{--<script src="{{ asset('js/app.js') }}"></script>--}}
{{--</body>--}}
{{--</html>--}}

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Local Jobs - @yield('title')</title>

    <!--favicon-->
    <link rel="apple-touch-icon" href="assets/theme/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="assets/theme/images/favicon.ico" type="image/x-icon">

    <!-- bootstrap -->
    <link href="assets/plugins/bootstrap-3.3.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="assets/plugins/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- lightbox -->
    <link href="assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">


    <!-- Themes styles-->
    <link href="assets/theme/css/theme.css" rel="stylesheet">
    <!-- Your custom css -->
    <link href="assets/theme/css/theme-custom.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- wrapper page -->
<div class="wrapper">
    <!-- main-header -->
    <header class="main-header">
        <!-- main navbar -->
        <nav class="navbar navbar-default main-navbar hidden-sm hidden-xs">
            <div class="container">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        {{--<li class=""><a href="{{url('joblist')}}"><strong>Търсене на работа</strong></a></li>--}}
                        <li class=""><a href="{{url('cv-list')}}"><strong>Намерете кандидат</strong></a></li>
                        <li  class=""><a href="{{url('create-post')}}"><strong>Добавете публикация</strong></a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                    @guest
                        <li class="link-btn"><a href="{{ route('login') }}"><span class="btn btn-theme btn-pill btn-xs btn-line">Вход</span></a></li>
                        <li class="link-btn"><a href="{{ route('register') }}"><span class="btn btn-theme  btn-pill btn-xs btn-line">Регистрация</span></a></li>
                        @else
                            <li class="link-btn"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="btn btn-theme  btn-pill btn-xs btn-line">Изход</span></a></li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                            </form>
                    @endguest
                    </ul>
                </div>
            </div>
        </nav><!-- end main navbar -->
        <!-- mobile navbar -->
        <div class="container">
            <nav class="mobile-nav hidden-md hidden-lg">
                <a href="#" class="btn-nav-toogle first">
                    <span class="bars"></span>
                    Menu
                </a>
                <div class="mobile-nav-block">
                    <h4>Navigation</h4>
                    <a href="#" class="btn-nav-toogle">
                        <span class="barsclose"></span>
                        Close
                    </a>

                    <ul class="nav navbar-nav">
                        <li class=""><a href="job_list.html"><strong>Find a Job</strong></a></li>
                        <li class=""><a href="resume_list.html"><strong>Find Resumes</strong></a></li>
                        <li  class=""><a href="job_post_1.html"><strong>Post a Job</strong></a></li>
                        <li><a href="login.html"><strong>Login</strong></a></li>
                        <li><a href="register.html"><strong>Register</strong></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >Pages <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="blog.html">Articles &amp; Blog</a></li>
                                <li><a href="terms_privacy.html">Terms &amp; Privacy</a></li>
                                <li><a href="error_404.html">Error 404</a></li>
                                <li><a href="shortcode.html">Short Code</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >Features <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="job_list.html">Find a Job</a></li>
                                <li><a href="job_details.html">Job Details</a></li>
                                <li><a href="resume_list.html">Find Resumes</a></li>
                                <li><a href="resume_details.html">Resume Details</a></li>
                                <li><a href="job_post_2.html">Post a Job</a></li>
                                <li><a href="company_page.html">Company Profile</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div><!-- mobile navbar -->


        @yield('header-content')
    </header><!-- end main-header -->

    @yield('content')


    <!-- main-footer -->
    <footer class="main-footer">


        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <ul class="list-inline link-footer text-center-xs">
                        <li><a href="index.html">Начало</a></li>
                        <li><a href="blog.html">Блог</a></li>
                        <li><a href="about.html">За нас</a></li>
                        <li><a href="contact.html">Контакти</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 ">
                    <p class="text-center-xs hidden-lg hidden-md hidden-sm">Stay Connect</p>
                    <div class="socials text-right text-center-xs">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- end main-footer -->

</div><!-- end wrapper page -->




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="assets/plugins/jquery.js"></script>
<script src="assets/plugins/jquery.easing-1.3.pack.js"></script>
<!-- jQuery Bootstrap -->
<script src="assets/plugins/bootstrap-3.3.2/js/bootstrap.min.js"></script>
<!-- Lightbox -->
<script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Theme JS -->
<script src="assets/theme/js/theme.js"></script>

<!-- maps -->
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDJzImGeQDu6f9dgfQi7ajycMqLXJPyd-w" type="text/javascript"></script>
<script src="assets/plugins/gmap3.min.js"></script>
<!-- maps single marker -->
<script src="assets/theme/js/map-detail.js"></script>

</body>
</html>
