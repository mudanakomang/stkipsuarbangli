@extends('layouts.master')
@section('menu')
    @include('layouts.menu')
@endsection
@section('slider')
    @include('layouts.slider')
@endsection
@section('about')
<section class="welcome-section sp-five">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-12 col-sm-12">
                <div class="wellcome-left-colmun">
                    <div class="sec-title pb-one text-center">
                        <h4>Selamat Datang di STKIP Suar Bangli</h4>
                    </div>
                    <div class="content-text">
                        <div class="text">                           
                            <h6>Be A Quality And Trustworthy Campus</h6>
                        </div>
                        <p>MEWUJUDKAN SEKOLAH TINGGI KEGURUAN DAN ILMU PENDIDIKAN (STKIP) SUAR BANGLI MENJADI LEMBAGA PENDIDIKAN TINGGI UNGGULAN, DI BIDANG TENAGA KEPENDIDIKAN PADA TAHUN 2021</p>
                        {{-- <div class="link-btn">
                            <a href="#" class="thm-btn bg-clr1">Read More</a>
                        </div> --}}
                    </div>
                </div>                    
            </div>
            <div class="col-xl-5 col-lg-12 col-xs-12">
                <div class="image-box">
                    <figure>
                        <img src="{{ asset('images/about.jpg')}}"" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('fakultas')
<section class="team-section sp-five">
    <div class="container">
        <div class="sec-title-two pb-one text-center">
            <h4>Program Studi Kami</h4>
        </div>
        <div class="title-text text-center">
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ullamcorper vehicula nisi, posuere blandit libero dictum sed. Vestibulum mattis pulvinar sapien, sit amet rhoncus nisl vulputate non. Praesent laoreet diam sit amet arcu auctor, id posuere turpis iaculis. Quisque lorem sapien, mollis et iaculis et, eleifend nec leo. Donec molestie porta nunc, a hendrerit magna tempor in. Aenean sagittis, lorem vel fringilla sollicitudin, dolor sapien aliquam tellus, a ornare quam lacus in lacus. Donec pellentesque urna sit amet luctus lobortis. Morbi euismod augue id orci consectetur vestibulum. Phasellus ultricies quis felis sit amet tincidunt.</span>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-item-one ">
                    <div class="image-box">
                        <figure>
                            <a href="#"><img src="{{ asset('images/book.png') }}" alt=""></a>
                        </figure>
                    </div>
                    <div class="image-text">
                        <a href="#"><h3 class="text-center">Pendidikan Bahasa Dan Sastra Indonesia</h3></a>
                        <p class="text-justify">Menjadi pusat pengembangan pendidikan bahasa dan sastra Indonesia yang unggul, serta menghasilkan calon guru pendidikan bahasa dan satra Indonesia yang cerdas, bermatabat, dan berdaya saing pada tahun 2021</p>                     
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-item-one ">
                    <div class="image-box">
                        <figure>
                            <a href="#"><img src="{{ asset('images/book.png') }}" alt=""></a>
                        </figure>
                    </div>
                    <div class="image-text">
                        <a href="#"><h3 class="text-center">Pendidikan Bahasa Inggris</h3></a>
                        <p class="text-justify">Menyiapkan tenaga pendidik dalam bidang Bahasa Inggris yang cerdas dan berdaya saing pada tahun 2021</p>                                            
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-item-one ">
                    <div class="image-box">
                        <figure>
                            <a href="#"><img src="{{ asset('images/book.png') }}" alt=""></a>
                        </figure>
                    </div>
                    <div class="image-text">
                        <a href="#"><h3 class="text-center">Pendidikan Guru Sekolah Dasar</h3></a>
                        <p class="text-justify">Menjadi program studi yang siap mencetak calon guru sekolah dasar yang cerdas dan berdaya saing tinggi di tingkat nasional tahun 2025</p>                                                               
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('posts')
<section class="blog-section sp-five">
        <div class="container">
            <div class="sec-title-two pb-one text-center">
                <h4>Berita/Agenda/Pengumuman Terbaru</h4>
            </div>
            <div class="title-text text-center">
                {{-- <span>Then along come two they got nothing but their jeans made rich these days are all share them<br>with me oh baby said californ is the place you ought</span> --}}
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
            <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 text-center">
                     
                            <div class="link-btn">
                                <a href="#" class="thm-btn bg-clr1">Semua Posting</a>
                            </div>                       
                    </div>
            </div>
        </div>
</section>
@endsection