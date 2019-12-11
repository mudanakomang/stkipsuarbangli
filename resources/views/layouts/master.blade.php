<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>STKIP SUAR BANGLI</title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- master stylesheet -->
	<link rel="stylesheet" href="{{  asset('css/style.css') }}">
	<!-- Responsive stylesheet-->
	<link rel="stylesheet" href="{{  asset('css/responsive.css') }}">
    <!-- Favicon -->
    <link rel="stylesheet" href="{{ asset('css/tagsinput.css') }} "> 
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.min.css') }} "> 


    <link rel="apple-touch-icon" sizes="57x57" href="{{  asset('images/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{  asset('images/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{  asset('images/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{  asset('images/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{  asset('images/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{  asset('images/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{  asset('images/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{  asset('images/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{  asset('images/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    
</head>
<body>
<div class="boxed_wrapper">

<!--Start Preloader -->
<div class="preloader"></div>
<!--End Preloader -->  

<header class="main-header-two">
    <!--Start Header Top Area -->
    <section class="header-style-two">
        <div class="container clearfix">
            <div class="left-side float-left">
                <ul class="social-links">
                    <li><a href="{{ url('https://id-id.facebook.com/stkipsuarbangli.ac.id/') }}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>                                                                      
                    <li><a href="{{ url('https://www.instagram.com/stkipsuar.bangli/') }}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="{{ url('https://twitter.com/stkipsuarbangli') }}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="right-side float-right clearfix">
                <ul class="top-info login-info float-left">
                    <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a></li>                        
                </ul>                   
            </div>
        </div>
   </section>    
    <section class="main-menu-two stricky">
        @include('layouts.menu')
    </section>
    <!--End mainmenu area-->
</header>

<!--Main Slider-->

    @yield('slider')    

<!--End Main Slider-->

<!--Start Callout Section-->
<!--End Callout Section-->
<!--Start Wellcome Section-->
@yield('header-content')
<!--End Wellcome Section-->
@yield('content')
@yield('fakultas')

<!--Start Course Search Section-->

<!--End Course Search Section-->

<!--Gallery Section-->

<!--End Gallery Section-->

<!--Service Section-->

<!--Service Section-->

<!--Team Section-->

<!--Team Section-->

<!--testimonials Section-->

<!--testimonials Section-->

<!--Blog Section-->
@yield('posts')
<!--Blog Section-->

<!--Start Brand area-->

<!--End Brand area-->

@include('layouts.footer')

<!--Scroll to top-->

<!--End Scroll to top-->


<!-- main jQuery -->
<script src="{{  asset('js/jquery-1.11.1.min.js') }}"></script>

<!-- bootstrap -->
<script src="{{  asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>

<!-- bx slider -->
<script src="{{  asset('js/jquery.bxslider.min.js') }}"></script>

<!-- owl carousel -->
<script src="{{  asset('js/owl.carousel.min.js') }}"></script>

<!-- validate -->
<script src="{{  asset('js/validation.js') }}"></script>

<!-- mixit up -->
<script src="{{  asset('js/jquery.mixitup.min.js') }}"></script>
<script src="{{  asset('js/html5lightbox.js') }}"></script>

<!-- easing -->
<script src="{{  asset('js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>

<!-- fancy box -->
<script src="{{  asset('js/jquery.fancybox.pack.js') }}"></script>
<script src="{{ asset('js/isotope.js') }}"></script>

<!-- Language Switche  -->
<script src="{{  asset('assets/language-switcher/jquery.polyglot.language.switcher.js') }}"></script>

<!-- Bootstrap select picker js -->
<script src="{{ asset('assets/bootstrap-sl-1.12.1/bootstrap-select.js') }}"></script> 

<!-- jQuery ui js -->
<script src="{{ asset('assets/jquery-ui-1.11.4/jquery-ui.js') }}"></script>

<!-- thm custom script -->
<script src="{{  asset('js/custom.js') }}"></script>
<script src="{{  asset('js/tagsinput.js') }}"></script>
<script src="{{ asset('js/moment.min.js') }}"></script>
<script src="{{  asset('js/bootstrap-datetimepicker.min.js') }}"></script>


@yield('script')

</div>
</body>
</html>