@extends('layouts.master')
@section('slider')
<section class="page-title" >
    <div class="container clearfix">
        <div class="title pull-left">
            <h2>Profil Ketua Yayasan</h2>
        </div>
        <ul class="title-manu pull-right">
            <li><a href="{{  url('/') }}">home</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
            <li>Profil Ketua Yayasan</li>
        </ul>         
    </div>
</section>    
@endsection
@section('content')
<section class="blog-single-section sp-five">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-sm-8">
                    <div class="left-side-area">
                        <div class="blog-item-one">
                            <div class="image-box">
                                <figure>
                                <img src="{{ asset('images/profil/Page-1-Image-1.jpg') }}" alt="Ketua Yayasan">
                                </figure>
                                
                            </div>
                            <div class="image-text">
                                <h6>Drs. I Wayan Soklat Arsana, M.M,M.AP.</h6><p></p>
                                <h6>Tempat & Tanggal Lahir</h6>
                                <p>Bangli, 12 Desember 1957 </p>

                                <h6>Pendidikan</h6>
                                <p>S1: Ilmu Administrasi Negara (1988) </p>
                                <p>S2: Magister Ilmu Manajemen (2007) </p>
                                <p>Magister Ilmu Administrasi (2011) </p>
                            </div>
                        </div>
                      
                        <div class="content-text">
                            
                        </div>                                              
                    </div>
                </div>           
            </div>
        </div>
    </section>
@endsection