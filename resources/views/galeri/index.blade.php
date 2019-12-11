@extends('layouts.master')
@section('slider')
<section class="page-title">
    <div class="container clearfix">
        <div class="title pull-left">
            <h2>Galeri</h2>
        </div>
        <ul class="title-manu pull-right">
            <li><a href="{{  url('/') }}">home</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
        <li>Galeri</li>
        </ul>         
    </div>
</section>
@endsection
@section('content')
<section class="slide-gallery sp-ten">
        <div class="container">
            <div class="gallery-area">
                <div class="row">
                    @foreach ($galeri  as $item )
                    <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="item two">
                                <figure>
                                  <a href="images/gallery/19.jpg">  <img src="{{ asset('images/gallery/').'/'.$item->gambar }}" alt=""></a>
                                </figure>
                                <div class="overly">
                                    <h6>{{ $item->keterangan }} </h6>                                                                                                      
                                </div>
                                <div class="icon-box">
                                    <a data-fancybox="1" href="{{ asset('images/gallery/').'/'.$item->gambar }}" class="img-popup"><i class="flaticon-play-button"></i></a>
                                </div>
                            </div>
                        </div> 
                    @endforeach
                                   
                                           
                </div>
            </div>
            <div class="styled-pagination text-center">
                {{ $galeri->links() }}
            </div>            
        </div>
    </section>
@endsection