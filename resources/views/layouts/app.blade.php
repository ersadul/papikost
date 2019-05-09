<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta Tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="SAFA Guest House">
    {{-- <meta name="keywords"
        content="blog, bootstrap, company portfolio, cv template, experience, html template, one page, personal, portfolio, team members"> --}}

    <!-- Required style of the theme -->
    <!--===============================================================================================-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
    <!--===============================================================================================-->

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">


    <link rel="stylesheet" href="{{ asset('template/css/bootstrap-4.1.3.min.css') }}">

    <!-- Bootstrap Dropdown Hover CSS -->
    <link href="{{ asset('template/css/animate.min.css') }}" rel="stylesheet">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('template/css/fontawesome-all-5.2.0.min.css') }}">
    <!--===============================================================================================-->
    <link href="{{ asset('template/css/flaticon.css') }}" rel="stylesheet">
    <!--===============================================================================================-->
    <link href="{{ asset('template/css/loaders.css') }}" rel="stylesheet">
    <!--===============================================================================================-->
    <link href="{{ asset('template/css/settings.css') }}" rel="stylesheet">
    <!-- Settings CSS -->
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('template/css/layerslider.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('template/css/color.css') }}" id="color-change">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('template/css/default_animation.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('template/css/jquery.fancybox.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('template/css/responsive.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap-datepicker.css') }}">
    <!--===============================================================================================-->

    <title>Safa Guest House</title>
</head>

<body>
    <!-- Start page loader -->
    <!--<div class="preloader bg-primary">
	<div id="tout">
	  <div>
		<div>
		  <div>
		  </div>
		</div>
	  </div>
	</div>
</div> -->
    <!--
<div class="preloader bg-primary">
	<div class="loader-circle">Loading...</div>
</div>
-->
    <!-- <div class="preloader bg-dark">
        <div id="cupcake" class="box">
            <span class="letter text-default">H</span>
            <div class="cupcakeCircle box bg-default">
                <div class="cupcakeInner box bg-dark">
                    <div class="cupcakeCore box bg-default"></div>
                </div>
            </div>
            <span class="letter text-default">T</span>
            <span class="letter text-default">E</span>
            <span class="letter text-default">L</span>
        </div>
    </div> -->
    <!-- End page loader -->


    <div id="page_wrapper">
        <div class="row">
            @yield('content')

            @include('components.footer')
            <div class="scroll-to-top">
                <a href="#" class="btn-scroll" data-target="body"><i class="fa fa-angle-up" aria-hidden="true"></i><b>Back to Top</b></a>
            </div>
        </div>
    </div>
    <!-- Wrapper End -->

    <!-- jQuery first, Layer slider, then Popper.js, then Bootstrap JS -->
    <!--===============================================================================================-->
    <script src="{{ asset('template/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('template/js/greensock.js') }}"></script>
    <!--===============================================================================================-->
    <!--jQuery Layer Slider -->
    <script src="{{ asset('template/js/layerslider.transitions.js') }}"></script>
    <script src="{{ asset('template/js/layerslider.kreaturamedia.jquery.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('template/js/popper-1.14.3.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap-4.1.3.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap-select.js') }}"></script>
    <!--===============================================================================================-->
    <!--Achievement Number Animation-->
    <script src="{{ asset('template/js/nsc.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('template/js/jquery.fancybox.pack.js') }}"></script>
    <!--===============================================================================================-->
    <!--Home 1 page Offer limit-->
    <script src="{{ asset('template/js/countdowntime.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('template/js/owl.js') }}"></script>
    <script src="{{ asset('template/js/wow.js') }}"></script>
    <!--===============================================================================================-->
    <!--Photo galary-->
    <script src="{{ asset('template/js/mixitup.js') }}"></script>
    <!--===============================================================================================-->
    <!--Date Piker -->
    <script src="{{ asset('template/js/jquery.timepicker.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('template/js/site.js') }}"></script>
    <script src="{{ asset('template/js/datepair.js') }}"></script>
    <script src="{{ asset('template/js/jquery.datepair.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('template/js/loaders.css.js') }}"></script>
    <script src="{{ asset('template/js/YouTubePopUp.jquery.js') }}"></script>
    <script src="{{ asset('template/js/validate.js') }}"></script>
    <!--===============================================================================================-->
    <!--- Template Settings Jquery -->
    <script src="{{ asset('template/js/jquery.cookie.js') }}"></script>
    <script src="{{ asset('template/js/settings.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('template/js/custom.js') }}"></script>
    <!-- Map jQuery -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPZ-Erd-14Vf2AoPW2Pzlxssf6-2R3PPs&callback=initMap"></script>
<script src="{{ asset('template/js/map.scripts.js') }}"></script> -->
    @yield('script')


    <!-- For Home page5 side nav -->
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginRight = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginRight = "0";
        }
    </script>

</body>

</html>