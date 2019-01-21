<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Meghna One page parallax responsive HTML Template ">

    <meta name="author" content="Muhammad Morshed">

    <title>Натяжные потолки в Хабаровске</title>

    <!-- Mobile Specific Meta
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('meghna2/img/favicon1.png') }}" />

    <!-- CSS
    ================================================== -->
    <!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="{{ asset('meghna2/css/font-awesome.min.css') }}">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('meghna2/css/bootstrap.min.css') }}">
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('meghna2/css/animate.css') }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('meghna2/css/owl.carousel.css') }}">
    <!-- Grid Component css -->
    <link rel="stylesheet" href="{{ asset('meghna2/css/component.css') }}">
    <!-- Slit Slider css -->
    <link rel="stylesheet" href="{{ asset('meghna2/css/slit-slider.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('meghna2/css/main.css') }}">
    <!-- Media Queries -->
    <link rel="stylesheet" href="{{ asset('meghna2/css/media-queries.css') }}">

    <!--
    Google Font
    =========================== -->

    <!-- Oswald / Title Font -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
    <!-- Ubuntu / Body Font -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>

    <!-- Modernizer Script for old Browsers -->
    <script src="{{ asset('meghna2/js/modernizr-2.6.2.min.js') }}"></script>


    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-54152927-1', 'auto');
        ga('send', 'pageview');

    </script>

</head>

<body id="body">
<!--
Start Preloader
==================================== -->
<div id="loading-mask">
    <div class="loading-img">
        <img alt="Meghna Preloader" src="{{ asset('meghna2/img/index.square-grid-loader.gif') }}"  />
    </div>
</div>
<!--
End Preloader
==================================== -->

<!--
Welcome Slider
==================================== -->
<section id="home">

    <div id="slitSlider" class="sl-slider-wrapper">
        <div class="sl-slider">

            {{--<!-- single slide item -->--}}
            {{--<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">--}}
                {{--<div class="sl-slide-inner">--}}
                    {{--<div class="bg-img bg-img-1"></div>--}}
                    {{--<div class="carousel-caption">--}}
                        {{--<div>--}}
                            {{--<img class="wow fadeInUp" src="{{ asset('meghna2/img/logo.png') }}" alt="Meghna">--}}
                            {{--<h2 data-wow-duration="500ms"  data-wow-delay="500ms" class="heading animated fadeInRight">Натяжные потолки</h2>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!-- /single slide item -->--}}

            <!-- single slide item -->
                <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                    <div class="sl-slide-inner">
                        <div class="bg-img bg-img-1"></div>
                        <div class="carousel-caption">
                            <div>
                                <h2 class="heading animated fadeInDown">Высокое качество</h2>
                                <h3 class="animated fadeInUp">Универсальный дизайн</h3>
                                <a class="btn btn-green animated fadeInUp" href="#">Заинтересовало</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /single slide item -->

            <!-- single slide item -->
            <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                <div class="sl-slide-inner">
                    <div class="bg-img bg-img-2"></div>
                    <div class="carousel-caption">
                        <div>
                            <h2 class="heading animated fadeInDown">Замер в удобное для вас время</h2>
                            <h3 class="animated fadeInUp">Все для дорогих клиентов</h3>
                            <a class="btn btn-green animated fadeInUp" href="#">Заинтересовало</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /single slide item -->

            <!-- single slide item -->
            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                <div class="sl-slide-inner">
                    <div class="bg-img bg-img-3"></div>
                    <div class="carousel-caption">
                        <div>
                            <h2 class="heading animated fadeInRight">Большой каталог цветов</h2>
                            <h3 class="animated fadeInLeft">В разных тонах</h3>
                            <a class="btn btn-green animated fadeInUp" href="#">Заинтересовало</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /single slide item -->

        </div><!-- /sl-slider -->

        <nav id="nav-arrows" class="nav-arrows">
            <span class="nav-arrow-prev">Previous</span>
            <span class="nav-arrow-next">Next</span>
        </nav>

        <nav id="nav-dots" class="nav-dots">
            <span class="nav-dot-current"></span>
            <span></span>
            <span></span>
        </nav>

    </div><!-- /slider-wrapper -->
</section>
<!--/#home section-->

<!--
Fixed Navigation
==================================== -->
<header id="navigation" class="navbar navbar-inverse">
    @yield('header')
</header>
<!--
End Fixed Navigation
==================================== -->

    @yield('content')

<!--
Essential Scripts
=====================================-->

<!-- Main jQuery -->
<script src="{{ asset('meghna2/js/jquery-1.11.0.min.js') }}"></script>
<!-- Bootstrap 3.1 -->
<script src="{{ asset('meghna2/js/bootstrap.min.js') }}"></script>
<!-- Slitslider -->
<script src="{{ asset('meghna2/js/jquery.slitslider.js') }}"></script>
<script src="{{ asset('meghna2/js/jquery.ba-cond.min.js') }}"></script>
<!-- Parallax -->
<script src="{{ asset('meghna2/js/jquery.parallax-1.1.3.js') }}"></script>
<!-- Owl Carousel -->
<script src="{{ asset('meghna2/js/owl.carousel.min.js') }}"></script>
<!-- Portfolio Filtering -->
<script src="{{ asset('meghna2/js/jquery.mixitup.min.js') }}"></script>
<!-- Custom Scrollbar -->
<script src="{{ asset('meghna2/js/jquery.nicescroll.min.js') }}"></script>
<!-- Jappear js -->
<script src="{{ asset('meghna2/js/jquery.appear.js') }}"></script>
<!-- Pie Chart -->
<script src="{{ asset('meghna2/js/easyPieChart.js') }}"></script>
<!-- jQuery Easing -->
<script src="{{ asset('meghna2/js/jquery.easing-1.3.pack.js') }}"></script>
<!-- tweetie.min -->
<script src="{{ asset('meghna2/js/tweetie.min.js') }}"></script>
<!-- Google Map API -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<!-- Highlight menu item -->
<script src="{{ asset('meghna2/js/jquery.nav.js') }}"></script>
<!-- Sticky Nav -->
<script src="{{ asset('meghna2/js/jquery.sticky.js') }}"></script>
<!-- Number Counter Script -->
<script src="{{ asset('meghna2/js/jquery.countTo.js') }}"></script>
<!-- wow.min Script -->
<script src="{{ asset('meghna2/js/wow.min.js') }}"></script>
<!-- For video responsive -->
<script src="{{ asset('meghna2/js/jquery.fitvids.js') }}"></script>
<!-- Grid js -->
<script src="{{ asset('meghna2/js/grid.js') }}"></script>
<!-- Custom js -->
<script src="{{ asset('meghna2/js/custom.js') }}"></script>

</body>
</html>
