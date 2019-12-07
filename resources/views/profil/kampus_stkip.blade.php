@extends('layouts.master')
@section('slider')
<section class="page-title" >
    <div class="container clearfix">
        <div class="title pull-left">
            <h2>Profil Kampus</h2>
        </div>
        <ul class="title-manu pull-right">
            <li><a href="{{  url('/') }}">home</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
            <li>Profil Kampus</li>
        </ul>         
    </div>
</section>    
@endsection
@section('content')
<section class="blog-single-section sp-five">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-sm-12">
                    <div class="left-side-area">
                        <div class="blog-item-one">
                            <div class="image-box">
                                <figure>
                                <img src="{{ asset('images/profil/Page-5-Image-9.jpg') }}" alt="Rancangan Bangunan Rektorat  STKIP Suar Bangli1">
                                </figure>                                                                
                            </div>
                            <div class="image-box">
                                <figure>
                                    <img src="{{ asset('images/profil/Page-5-Image-11.jpg') }}" alt="Rancangan Bangunan Rektorat  STKIP Suar Bangli2">
                                </figure>
                            </div>
                            <div class="image-text">
                                <h6>Rancangan Bangunan Rektorat  STKIP Suar Bangli</h6>
                            </div>
                        </div>
                      
                        <div class="content-text">
                        </div>
                        <div class="media-links-single"></div> 
                        <div class="blog-item-one">
                                <div class="image-box">
                                    <figure>
                                    <img src="{{ asset('images/profil/Page-6-Image-13.jpg') }}" alt="Rancangan Hotel STKIP Suar Bangli1">
                                    </figure>                                                                
                                </div>
                                <div class="image-box">
                                    <figure>
                                        <img src="{{ asset('images/profil/Page-6-Image-14.jpg') }}" alt="Rancangan Hotel STKIP Suar Bangli2">
                                    </figure>
                                </div>
                                <div class="image-text">
                                    <h6>Rancangan Hotel STKIP Suar Bangli </h6>
                                </div>
                            </div>
                          
                            <div class="content-text">
                            </div>
                            <div class="media-links-single"></div>                         
                        <div class="blog-item-one">                                
                                <div class="image-box">
                                    <figure>
                                        <img src="{{ asset('images/profil/Page-7-Image-16.jpg') }}" alt="Rancangan  Ruangan Aula 1">
                                    </figure>
                                </div>
                                <div class="image-box">
                                        <figure>
                                            <img src="{{ asset('images/profil/Page-8-Image-17.jpg') }}" alt="Rancangan  Ruangan Aula 2">
                                        </figure>
                                    </div>
                                <div class="image-text">
                                    <h6>Rancangan  Ruangan Aula   </h6>
                                </div>
                            </div>
                                  
                            <div class="content-text">
                            </div>
                            <div class="media-links-single"></div>
                            <div class="blog-item-one">                                
                                    <div class="image-box">
                                        <figure>
                                            <img src="{{ asset('images/profil/Page-9-Image-18.jpg') }}" alt="Rancangan Ruangan Laboratorium Komputer  1">
                                        </figure>
                                    </div>
                                    <div class="image-box">
                                            <figure>
                                                <img src="{{ asset('images/profil/Page-9-Image-19.jpg') }}" alt="Rancangan Ruangan Laboratorium Komputer  2">
                                            </figure>
                                        </div>
                                    <div class="image-box">
                                            <figure>
                                                <img src="{{ asset('images/profil/Page-10-Image-20.jpg') }}" alt="Rancangan Ruangan Laboratorium Komputer  2">
                                            </figure>
                                            </div>
                                    <div class="image-text">
                                        <h6>Rancangan Ruangan Laboratorium Komputer  </h6>
                                    </div>
                                </div>
                                      
                                <div class="content-text">
                                </div>
                                <div class="media-links-single"></div>                                                                                   
                    </div>
                </div>           
            </div>
        </div>
    </section>
@endsection