@extends('layouts.master')
@section('slider')
    @include('layouts.slider')
@endsection
@section('header-content')
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
                        <p>STKIP Suar Bangli adalah kampus generasi Milenial yang siap mencetak lulusan siap kerja dalam segala aspek bidang keahlian dengan kompetensi utama lulusan adalah bidang kependidikan, pariwisata, manajemen, technopreneur, dan bidang penunjang kegiatan pelestarian budaya dan tradisi. Tujuan utama STKIP Suar Bangli adalah menghasilkan lulusan yang berkualitas sehingga dapat dipercaya oleh masyarakat.  </p>
                        {{-- <div class="link-btn">
                            <a href="#" class="thm-btn bg-clr1">Read More</a>
                        </div> --}}
                    </div>
                </div>                    
            </div>
            <div class="col-xl-5 col-lg-12 col-xs-12">
                <div class="image-box">
                    <figure>
                        <img src="{{ asset('images/about.jpg')}}" alt="">
                    </figure>
                </div>
            </div>            
        </div>
    </div>
</section>
<section class="page-title" >
        <div class="container clearfix">
            <div class="title text-center">
                <h2>Daftar Sekarang</h2>
            </div>
            <p></p>
            <p></p>
            <ul class="title-manu text-center">
                <div class="link-btn">
                    <a href="#" class="thm-btn bg-clr1">Informasi & Pendaftaran Online</a>
                </div>
            </ul>         
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
            <span></span>
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
<div class="form-group">
<section class="blog-section sp-five">
    <div class="container">
        <div class="sec-title-two pb-one text-center">
            <h4>Berita Terkini</h4>
        </div>
        <div class="title-text text-center">            
        </div>
        <div class="row">
            @foreach ($posts as $post)
            <article class="col-xl-4 col-lg-6 col-sm-12 filter-item ">
                    <div class="gallery-item">
                        <div class="image-box"><img src="{{ !empty($post->gambar) ? url('images/post/').'/'.$post->gambar : url('images/post/').'/'.$post->kategori.'.png' }}" alt="">
                            <div class="overlay">
                                <a class="link-btn" href="{{ url('post/detail').'/'.$post->id }}">
                                     <i class="fa fa-link"></i>
                                </a>
                            </div>
                        </div>
                        <div class="image-content">
                            <div class="reting clearfix">
                                <div class="float-left">
                                    <p><a href="{{ url('post/kategori').'/'.$post->kategori }}"><i class="fa fa-folder" aria-hidden="true"></i> {{ $post->kategori }}</a></p> 
                                    <small>  
                                        @foreach ($post->tags as $tag)<i class="fa fa-hashtag" aria-hidden="true"></i>
                                            <a href="{{ url('post/tags').'/'.$tag->id }}">{{  $tag->name }}</a>
                                         @endforeach
                                    </small> 
                                </div>
                            </div>
                            <div class="bottom-text">
                                <h6><a href="{{ url('post/detail').'/'.$post->id }}">{{ $post->judul}}</a></h6>
                                {!! substr($post->isi,0,300)  !!} ...
                                <div class="link-btn">
                                    <a href="{{ url('post/detail').'/'.$post->id }}">Selengkapnya <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="info clearfix">
                                <div class="float-left"><p><i class="fa fa-calendar" aria-hidden="true"></i> {{ \Carbon\Carbon::parse($post->created_at)->format('Y M d') }}</p></div>
                                <div class="float-right"><p><i class="fa fa-user" aria-hidden="true"></i> {{ \App\User::find($post->user_id)->name }}</p></div>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach         
        </div>
        <div class="row">
            <div class="col-xl-12 col-md-12 col-sm-12 text-center">
                <div class="link-btn">
                    <a href="{{ url('post/kategori').'/all' }}" class="thm-btn bg-clr1">Semua Posting</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('content')
    
@endsection