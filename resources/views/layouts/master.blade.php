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

<header class="main-header">
    <!--Start Header Top Area -->
    <section class="header-style-one">
        <div class="container clearfix">
            <div class="left-side float-left">
                <ul class="top-info clearfix">
                    
                </ul>
            </div>
            <div class="right-side float-right">
                <ul class="top-info">
                    <li><a href="login.html"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a><span class="border-right"></span></li>                   
                </ul>
            </div>
        </div>
    </section>
    <!--Start Header Top Area -->
    <!--Start header area-->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="header-logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('images/logo.jpg') }}" alt="Logo STKIP Suar Bangli">
                        </a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12">
                    <div class="header-contact-info">
                        <ul>
                            <li>
                                <div class="iocn-holder">
                                    <span class="flaticon-home-button"></span>
                                </div>
                                <div class="text-holder">
                                    <strong>ADDRESS:</strong>
                                    <p>25BG, Murcia, United States.</p>
                                </div>
                            </li>
                            <li>
                                <div class="iocn-holder">
                                    <span class="flaticon-phone-call"></span>
                                </div>
                                <div class="text-holder">
                                    <strong>PHONE:</strong>
                                    <p>(1-8016-7890-168)</p>
                                </div>
                            </li>   
                            <li>
                                <div class="iocn-holder">
                                    <span class="flaticon-message"></span>
                                </div>
                                <div class="text-holder">
                                    <strong>EMAIL:</strong>
                                    <p>(1-8016-7890-168)</p>
                                </div>
                            </li>                             
                        </ul>
                    </div>
                </div>           
            </div>
        </div>
    </header>
    <!--End header area-->
    <!--Start mainmenu area-->
    <section class="main-menu-one stricky">
        @yield('menu')
    </section>
    <!--End mainmenu area-->
</header>

<!--Main Slider-->

    @yield('slider')    

<!--End Main Slider-->

<!--Start Callout Section-->
{{-- <section class="callout-section">
    <div class="container-fluid">
        <div class="row m0">
            <div class="callout-item light-bg col-xl-4 col-lg-6">
                <div class="inner-item">
                    <div class="icon-box">
                        <i class="flaticon-message"></i>
                    </div>
                    <div class="icon-text">
                        <h5>Get a Quotes</h5>
                        <div class="text">Then along come two they got nothing but jeans.</div>
                    </div>
                </div>
            </div>
            <div class="callout-item default-bg col-xl-4 col-lg-6">
                <div class="inner-item">
                    <div class="icon-box">
                        <i class="flaticon-headphones"></i>
                    </div>
                    <div class="icon-text">
                        <h5>Ask Questions</h5>
                        <div class="text">Then along come two they got nothing but jeans.</div>
                    </div>                    
                </div>
            </div>
            <div class="callout-item deep-bg col-xl-4 col-lg-6">
                <div class="inner-item">
                    <div class="icon-box">
                        <i class="flaticon-user"></i>
                    </div>
                    <div class="icon-text">
                        <h5>Join Community</h5>
                        <div class="text">Then along come two they got nothing but jeans.</div>
                    </div>                    
                </div>
            </div>                
        </div>
    </div>
</section> --}}
<!--End Callout Section-->
@yield('fakultas')

<!--Start Wellcome Section-->
<section class="welcome-section sp-two">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-12 col-sm-12">
                <div class="wellcome-left-colmun">
                    <div class="sec-title pb-one">
                        <h4>Welcome to LMS</h4>
                    </div>
                    <div class="content-text">
                        <div class="text">
                            <h1>20</h1>
                            <h6>Years of Excellence in Learning<br>Management System</h6>
                        </div>
                        <p>These days are all share them with me oh baby said Californy till the one day when the lady met this fellow and they knew it was much more than a hunch making your way in the world today takes everything you have got taking a break from all your worries till the one day when the lady met this fellow and hunch.</p>
                        <p>Till the one day when the lady met this fellow and they knew it was much more than a hunch an making your way in the world today takes everything you've got taking a break from all your way worries sure would help a lot.</p>
                        <div class="link-btn">
                            <a href="#" class="thm-btn bg-clr1">Read More</a>
                        </div>
                    </div>
                </div>                    
            </div>
            <div class="col-xl-5 col-lg-12 col-xs-12">
                <div class="image-box">
                    <figure>
                        <img src="images/services/1.jpg" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Wellcome Section-->

<!--Start Course Search Section-->
<section class="course-search">
    <div class="container">
        <div class="course-search-bg" style="background: url(images/resources/course-search-bg.jpg);">
            <div class="row">            
                <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">
                    <div class="course-search-title text-center">
                        <div class="icon">
                            <figure>
                                <img src="images/icon/course-logo.png" alt="">
                            </figure>
                        </div>
                        <h5>Course Search</h5>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-12 col-md-12">
                    <form class="form-style-one form-area-one" name="contact_form" action="sendmail.php" method="post">
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <i class="fa fa-folder-open-o" aria-hidden="true"></i>
                                    <input type="text" name="search" class="form-control" value="" placeholder="Course Name" required="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <i class="fa fa-server" aria-hidden="true"></i>
                                    <select name="Consulting Services">
                                        <option>Select Category</option>
                                        <option>Education</option>
                                        <option>Finance</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <div class="form-group button-area">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button class="thm-btn bg-clr2" type="button" data-loading-text="Please wait..."><span class="fa fa-search" aria-hidden="true"></span> search now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>                
        </div>
    </div>
</section>
<!--End Course Search Section-->

<!--Gallery Section-->
<section class="gallery-section sp-three">
    <div class="container">
        <div class="title-area clearfix">
            <div class="sec-title-one pb-one">
                <h4>Popular Courses</h4>
            </div>
            <div class="gallery-filter">
                <ul class="post-filter">
                    <li class="active" data-filter=".filter-item">
                        <span>All Courses</span>
                    </li>
                    <li data-filter=".Finance">
                        <span>IT & Software</span>
                    </li>
                    <li data-filter=".Consulting">
                        <span>Technology</span>
                    </li>
                    <li data-filter=".Marketing">
                        <span>Game Design</span>
                    </li>
                    <li data-filter=".Growth">
                        <span>Photography</span>
                    </li>
                </ul>
            </div>
        </div>           

        <div class="row filter-layout">
            <article class="col-xl-4 col-lg-6 col-sm-12 filter-item Consulting Growth">
                <div class="gallery-item">
                    <div class="image-box">
                        <img src="images/gallery/7.jpg" alt="">
                        <div class="overlay">
                            <a class="link-btn" href="courses-single.html">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                    <div class="image-content">
                        <div class="date-box">
                            <h6>$350</h6>
                        </div>
                        <div class="reting clearfix">
                            <div class="float-left">
                                <div class="reting-star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="float-right">
                                <a href="courses-single.html">Join Now</a>
                            </div>
                        </div>
                        <div class="bottom-text">
                            <h6><a href="courses-single.html">Computer Management System with Infomatics</a></h6>
                        </div>
                        <div class="info clearfix">
                            <div class="float-left"><p><i class="fa fa-calendar" aria-hidden="true"></i>Start date: 05 Mar 2018</p></div>
                            <div class="float-right"><p><i class="fa fa-user" aria-hidden="true"></i>52 Students</p></div>
                        </div>                       
                    </div>                        
                </div>                    
            </article>

            <article class="col-xl-4 col-lg-6 col-sm-12 filter-item Finance Marketing">
                <div class="gallery-item">
                    <div class="image-box">
                        <img src="images/gallery/8.jpg" alt="">
                        <div class="overlay">
                            <a class="link-btn" href="courses-single.html">
                                <i class="fa fa-link"></i>
                            </a>                                
                        </div>
                    </div>
                    <div class="image-content">
                        <div class="date-box">
                            <h6>Free</h6>
                        </div>
                        <div class="reting clearfix">
                            <div class="float-left">
                                <div class="reting-star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="float-right">
                                <a href="courses-single.html">Join Now</a>
                            </div>
                        </div>
                        <div class="bottom-text">
                            <h6><a href="courses-single.html">Software Management System with Infomatics</a></h6>
                        </div>
                        <div class="info clearfix">
                            <div class="float-left"><p><i class="fa fa-calendar" aria-hidden="true"></i>Start date: 05 Mar 2018</p></div>
                            <div class="float-right"><p><i class="fa fa-user" aria-hidden="true"></i>52 Students</p></div>
                        </div>                       
                    </div>                        
                </div>
            </article>

            <article class="col-xl-4 col-lg-6 col-sm-12 filter-item Consulting Growth">
                <div class="gallery-item">
                    <div class="image-box">
                        <img src="images/gallery/9.jpg" alt="">
                        <div class="overlay">
                            <a class="link-btn" href="courses-single.html">
                                <i class="fa fa-link"></i>
                            </a>                                
                        </div>
                    </div>
                    <div class="image-content">
                        <div class="date-box">
                            <h6>$250</h6>
                        </div>
                        <div class="reting clearfix">
                            <div class="float-left">
                                <div class="reting-star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="float-right">
                                <a href="courses-single.html">Join Now</a>
                            </div>
                        </div>
                        <div class="bottom-text">
                            <h6><a href="courses-single.html">Design Management System with & Infomatics</a></h6>
                        </div>
                        <div class="info clearfix">
                            <div class="float-left"><p><i class="fa fa-calendar" aria-hidden="true"></i>Start date: 05 Mar 2018</p></div>
                            <div class="float-right"><p><i class="fa fa-user" aria-hidden="true"></i>52 Students</p></div>
                        </div>                       
                    </div>                        
                </div>
            </article>

            <article class="col-xl-4 col-lg-6 col-sm-12 filter-item Marketing Finance">
                <div class="gallery-item">
                    <div class="image-box">
                        <img src="images/gallery/10.jpg" alt="">
                        <div class="overlay">
                            <a class="link-btn" href="courses-single.html">
                                <i class="fa fa-link"></i>
                            </a>                                
                        </div>
                    </div>
                    <div class="image-content">
                        <div class="date-box">
                            <h6>$420</h6>
                        </div>
                        <div class="reting clearfix">
                            <div class="float-left">
                                <div class="reting-star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="float-right">
                                <a href="courses-single.html">Join Now</a>
                            </div>
                        </div>
                        <div class="bottom-text">
                            <h6><a href="courses-single.html">Embedded Systems of Arithmetic & Logarthm</a></h6>
                        </div>
                        <div class="info clearfix">
                            <div class="float-left"><p><i class="fa fa-calendar" aria-hidden="true"></i>Start date: 05 Mar 2018</p></div>
                            <div class="float-right"><p><i class="fa fa-user" aria-hidden="true"></i>52 Students</p></div>
                        </div>                       
                    </div>                        
                </div>
            </article>

            <article class="col-xl-4 col-lg-6 col-sm-12 filter-item Growth Marketing">
                <div class="gallery-item">
                    <div class="image-box">
                        <img src="images/gallery/11.jpg" alt="">
                        <div class="overlay">
                            <a class="link-btn" href="courses-single.html">
                                <i class="fa fa-link"></i>
                            </a>                                
                        </div>
                    </div>
                    <div class="image-content">
                        <div class="date-box">
                            <h6>$500</h6>
                        </div>
                        <div class="reting clearfix">
                            <div class="float-left">
                                <div class="reting-star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="float-right">
                                <a href="courses-single.html">Join Now</a>
                            </div>
                        </div>
                        <div class="bottom-text">
                            <h6><a href="courses-single.html">VLSI Design Management of Analog Electronics</a></h6>
                        </div>
                        <div class="info clearfix">
                            <div class="float-left"><p><i class="fa fa-calendar" aria-hidden="true"></i>Start date: 05 Mar 2018</p></div>
                            <div class="float-right"><p><i class="fa fa-user" aria-hidden="true"></i>52 Students</p></div>
                        </div>                       
                    </div>                        
                </div>
            </article>

            <article class="col-xl-4 col-lg-6 col-sm-12 filter-item Consulting Finance">
                <div class="gallery-item">
                    <div class="image-box">
                        <img src="images/gallery/12.jpg" alt="">
                        <div class="overlay">
                            <a class="link-btn" href="courses-single.html">
                                <i class="fa fa-link"></i>
                            </a>                                
                        </div>
                    </div>
                    <div class="image-content">
                        <div class="date-box">
                            <h6>$380</h6>
                        </div>
                        <div class="reting clearfix">
                            <div class="float-left">
                                <div class="reting-star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="float-right">
                                <a href="courses-single.html">Join Now</a>
                            </div>
                        </div>
                        <div class="bottom-text">
                            <h6><a href="courses-single.html">Formal Language of Arithmetic & Bio Information</a></h6>
                        </div>
                        <div class="info clearfix">
                            <div class="float-left"><p><i class="fa fa-calendar" aria-hidden="true"></i>Start date: 05 Mar 2018</p></div>
                            <div class="float-right"><p><i class="fa fa-user" aria-hidden="true"></i>52 Students</p></div>
                        </div>                       
                    </div>                        
                </div>
            </article>
        </div>
    </div>
</section>
<!--End Gallery Section-->

<!--Service Section-->
<section class="service-section sp-one" style="background-image: url(images/services/bg.jpg);">
    <div class="container">
        <div class="sec-title-two pb-one text-center">
            <h4>Our Awesome Services</h4>
        </div>
        <div class="title-text text-center">
            <span>Then along come two they got nothing but their jeans made rich these days are all share them<br>with me oh baby said californ is the place you ought</span>
        </div>
        <div class="services-carousel">
            <div class="slide-item one">
                <div class="service-item-one text-center">
                    <div class="icon-box bg-red">
                        <i class="flaticon-sunglasses"></i>
                    </div>
                    <h6><a href="#">Free Consultation</a></h6>
                    <p>These days are all share them with me oh baby said Californy.</p>
                    <div class="link-btn">
                        <a href="#">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="slide-item two">
                <div class="service-item-one text-center">
                    <div class="icon-box bg-yellow">
                        <i class="flaticon-physics"></i>
                    </div>
                    <h6><a href="#">Excellent Trainers</a></h6>
                    <p>These days are all share them with me oh baby said Californy.</p>
                    <div class="link-btn">
                        <a href="#">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="slide-item three">
                <div class="service-item-one text-center">
                    <div class="icon-box bg-green">
                        <i class="flaticon-school"></i>
                    </div>
                    <h6><a href="#">Best E-books</a></h6>
                    <p>These days are all share them with me oh baby said Californy.</p>
                    <div class="link-btn">
                        <a href="#">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="slide-item four">
                <div class="service-item-one text-center">
                    <div class="icon-box bg-orange">
                        <i class="flaticon-lens"></i>
                    </div>
                    <h6><a href="#">Certified Courses</a></h6>
                    <p>These days are all share them with me oh baby said Californy.</p>
                    <div class="link-btn">
                        <a href="#">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Service Section-->

<!--Team Section-->

<!--Team Section-->

<!--testimonials Section-->
<section class="testimonials-section bg-two">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-12 col-xs-12">
                <div class="image-box">
                    <figure>
                        <img src="images/resources/testimonial.jpg" alt="">
                    </figure>
                </div>
            </div>
            <div class="col-xl-8 col-lg-12 col-xs-12">
                <div class="testimonial-area sp-four">
                    <div class="sec-title-two pb-one text-center">
                        <h4>What our Student says</h4>
                    </div>
                    <div class="testimonial-carousel">
                        <div class="slide-item text-center">
                            <h6>Glory Princess</h6>
                            <p>Automation, Student</p>
                            <span>Then along come two they got nothing but their jeans made rich these days are all share them with me oh baby said californ is the place you ought and when the odds are against him and their  life speed racer he will see it through the black gold.</span>
                        </div>
                        <div class="slide-item text-center">
                            <h6>Glory Princess</h6>
                            <p>Automation, Student</p>
                            <span>Then along come two they got nothing but their jeans made rich these days are all share them with me oh baby said californ is the place you ought and when the odds are against him and their  life speed racer he will see it through the black gold.</span>
                        </div>
                        <div class="slide-item text-center">
                            <h6>Glory Princess</h6>
                            <p>Automation, Student</p>
                            <span>Then along come two they got nothing but their jeans made rich these days are all share them with me oh baby said californ is the place you ought and when the odds are against him and their  life speed racer he will see it through the black gold.</span>
                        </div>
                    </div>                  
                </div>
            </div>
        </div>                    
    </div>
</section>
<!--testimonials Section-->

<!--Blog Section-->
<section class="blog-section sp-three">
    <div class="container">
        <div class="sec-title-two pb-one text-center">
            <h4>Latest Blog</h4>
        </div>
        <div class="title-text text-center">
            <span>Then along come two they got nothing but their jeans made rich these days are all share them<br>with me oh baby said californ is the place you ought</span>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="blog-item-one">
                    <div class="image-box">
                        <figure><img src="images/blog/1.jpg" alt=""></figure>
                        <div class="overlay">
                            <a class="link-btn" href="blog-single.html">
                                <i class="fa fa-link"></i>
                            </a>                                
                        </div>
                        <div class="date-box">
                            <p>26TH, SEP, 2018</p>
                        </div>
                    </div>
                    <div class="image-text">
                        <h6><a href="blog-single.html">Think of me once in awhile</a></h6>
                        <p>These days are all share them with me oh baby said inspet Californy till the one day when the lady met this fellow and they knew it was much more than a hunch.</p>
                        <div class="link-btn">
                            <a href="blog-single.html">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="blog-item-one">
                    <div class="image-box">
                        <figure><img src="images/blog/2.jpg" alt=""></figure>
                        <div class="overlay">
                            <a class="link-btn" href="blog-single.html">
                                <i class="fa fa-link"></i>
                            </a>                                
                        </div>
                        <div class="date-box">
                            <p>07TH, OCT, 2018</p>
                        </div>
                    </div>
                    <div class="image-text">
                        <h6><a href="blog-single.html">A beautiful day for a neighbor</a></h6>
                        <p>These days are all share them with me oh baby said inspet Californy till the one day when the lady met this fellow and they knew it was much more than a hunch.</p>
                        <div class="link-btn">
                            <a href="blog-single.html">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="blog-item-one">
                    <div class="image-box">
                        <figure><img src="images/blog/3.jpg" alt=""></figure>
                        <div class="overlay">
                            <a class="link-btn" href="blog-single.html">
                                <i class="fa fa-link"></i>
                            </a>                                
                        </div>
                        <div class="date-box">
                            <p>19TH, NOV, 2018</p>
                        </div>
                    </div>
                    <div class="image-text">
                        <h6><a href="blog-single.html">Travelled down the roadmania</a></h6>
                        <p>These days are all share them with me oh baby said inspet Californy till the one day when the lady met this fellow and they knew it was much more than a hunch.</p>
                        <div class="link-btn">
                            <a href="blog-single.html">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Blog Section-->

<!--Start Brand area-->
<section class="brand-area bg-two sp-five">
    <div class="container">
        <div class="brand">
            <!--Start single item-->
            <a class="tool_tip" title="Media Partner" href="#">
                <div class="single-item">
                    <img src="images/brand/1.png" alt="Awesome Brand Image">
                </div>
            </a>
            <!--End single item-->

            <!--Start single item-->
            <a class="tool_tip" title="Media Partner" href="#">
                <div class="single-item">
                   <img src="images/brand/2.png" alt="Awesome Brand Image">
                </div>
            </a>
            <!--End single item-->

            <!--Start single item-->
            <a class="tool_tip" title="Media Partner" href="#">
                <div class="single-item">
                    <img src="images/brand/3.png" alt="Awesome Brand Image">
                </div>
            </a>
            <!--End single item-->

            <!--Start single item-->
            <a class="tool_tip" title="Media Partner" href="#">
                <div class="single-item" title="Media Partner">
                    <img src="images/brand/4.png" alt="Awesome Brand Image">
                </div>
            </a>
            <!--End single item-->

            <!--Start single item-->
            <a class="tool_tip" title="Media Partner" href="#">
                <div class="single-item">
                    <img src="images/brand/5.png" alt="Awesome Brand Image">
                </div>
            </a>
            <!--End single item-->
        </div>
    </div>
</section>
<!--End Brand area-->

<!--main-footer-->
<footer class="main-footer bg-four sp-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-sm-12 footer-colmun">
                <div class="footer-clomun footer-about-widget">
                    <div class="footer-logo">
                        <figure>
                            <a href="index.html"><img src="images/logo-2.png" alt=""></a>
                        </figure>
                    </div>
                    <p>These days are all share them with me oh said Cali forny till the one day when the making your way in the world  and when the odds are against him and their dangers work to do.</p>
                    <ul class="social-links">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-6 col-sm-12 footer-colmun">
                <div class="footer-clomun footer-menu-link">
                    <div class="sec-title-one pb-one">
                        <h6>Archives</h6>
                    </div>                            
                    <ul>
                        <li><a href="#"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Janaury 2018</a></li>
                        <li><a href="#"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>February 2018</a></li>
                        <li><a href="#"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>March 2018</a></li>
                        <li><a href="#"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>April 2018</a></li>
                        <li><a href="#"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>May 2018</a></li>
                    </ul>
                </div>
            </div>                    
            <div class="col-xl-3 col-lg-6 col-sm-12 footer-colmun">
                <div class="footer-clomun footer-blog">
                    <div class="sec-title-one pb-one">
                        <h6>Twitter Feeds</h6>
                    </div>                            
                    <div class="item">
                        <div class="icon-box">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </div>
                        <div class="icon-text">
                            <p><a href="#">HJDUYDYTSBS</a> share is the baby said Californy.</p>
                            <span><i class="fa fa-calendar" aria-hidden="true"></i>5 min ago</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon-box">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </div>
                        <div class="icon-text">
                            <p><a href="#">HJDUYDYTSBS</a> share is the baby said Californy.</p>
                            <span><i class="fa fa-calendar" aria-hidden="true"></i>3 days ago</span>
                        </div>
                    </div>
                </div>                                    
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-12 footer-colmun">
                <div class="footer-clomun footer-gallery-widget">
                    <div class="sec-title-one pb-one">
                        <h6>Image Gallery</h6>
                    </div>
                    <div class="innar-box">
                        <div class="row">                        
                            <div class="col-sm-4">
                                <figure class="image">
                                    <a data-fancybox="1" href="images/gallery/1.jpg" class="img-popup"><img src="images/gallery/1.jpg" alt=""></a>
                                </figure>
                            </div>
                            <div class="col-sm-4">
                                <figure class="image">
                                    <a data-fancybox="1" href="images/gallery/2.jpg" class="img-popup"><img src="images/gallery/2.jpg" alt=""></a>
                                </figure>
                            </div>
                            <div class="col-sm-4">
                                <figure class="image">
                                    <a data-fancybox="1" href="images/gallery/3.jpg" class="img-popup"><img src="images/gallery/3.jpg" alt=""></a>
                                </figure>
                            </div>
                            <div class="col-sm-4">
                                <figure class="image">
                                    <a data-fancybox="1" href="images/gallery/4.jpg" class="img-popup"><img src="images/gallery/4.jpg" alt=""></a>
                                </figure>
                            </div>
                            <div class="col-sm-4">
                                <figure class="image">
                                    <a href="#"><img src="images/gallery/5.jpg" alt=""></a>
                                </figure>
                            </div>
                            <div class="col-sm-4">
                                <figure class="image">
                                    <a data-fancybox="1" href="images/gallery/6.jpg" class="img-popup"><img src="images/gallery/6.jpg" alt=""></a>
                                </figure>
                            </div>
                        </div>                            
                    </div>
                </div> 
            </div>
        </div>
    </div>   
</footer>
<!--End main-footer--> 


<!--Start Footer Bottom--> 
<section class="footer-bottom bg-three">
    <div class="container">
        <div class="bottom-text text-center">
            <p>&copy; Copyrights 2018 Murcia. All Rights Reserved</p>
        </div>
    </div>
</section>
<!--End Footer Bottom-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html">
    <span class="fa fa-angle-up"></span>
</div>
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


</div>
</body>
</html>