@extends('layouts.master')
@section('slider')
<section class="page-title" >
    <div class="container clearfix">
        <div class="title pull-left">
            <h2>Pendaftaran Mahasiswa Baru</h2>
        </div>
        <ul class="title-manu pull-right">
            <li><a href="{{  url('/') }}">home</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
            <li>Pendaftaran Mahasiswa Baru</li>
        </ul>         
    </div>
</section>    
@endsection
@section('content')
<section class="blog-single-section sp-five">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-sm-12">
                <div class="left-side-area">
                    <div class="blog-item-one">
                        {{-- <div class="image-text text-center">
                            <h6 class="">Alur Pendaftaran Mahasiswa Baru</h6>                            
                        </div> --}}
                        <div class="text-center">
                             {{-- <figure>
                                <img src="{{ asset('images/pendaftaran/alur pendaftaran.jpg') }}" alt="Alur Pendaftaran" width="80%">
                            </figure>                                                                 --}}
                            <video width="320" height="240" controls>
                                <source src="{{URL::asset("videos/STKIP SUAR BANGLI.mp4")}}" type="video/mp4">
                            </video>

                        </div>    
                    </div>
                    <div class="blog-item-one">
                        <hr>
                        <br>
                        <div class="title-text text-center" style="color: black">
                            <h2>Daftar Sekarang</h2>
                        </div>   
                        <ul class="text-center">                             
                            <div class="link-btn">
                                <a href="{{ url('pendaftaran/info') }}" class="thm-btn bg-clr1">Informasi Pendaftaran <i class="fa fa-download"> </i></a>
                            </div>    
                        </ul>   
                        <br>                
                        <ul class="text-center">                            
                            <div class="link-btn">
                                <a href="{{ url('http://bit.ly/gabungstkip') }}" target="_blank" class="thm-btn bg-clr1">Pendaftaran Online <i class="fa fa-list-ul"></i></a>
                            </div>
                        </ul>             
                    </div>                                                                                                   
                </div>
            </div>           
        </div>
    </div>
</section>
@endsection
