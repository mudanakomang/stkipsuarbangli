@extends('layouts.master')
@section('slider')
<section class="page-title">
    <div class="container clearfix">
        <div class="title pull-left">
            <h2>VIDEO PROFIL</h2>
        </div>
        <ul class="title-manu pull-right">
            <li><a href="{{  url('/') }}">home</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
        <li>Video Profil STKIP Suar Bangli</li>
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
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item"  height="648" width="1152"
                                src="https://www.youtube.com/embed/8u5JIWcuiiA">
                            </iframe>
                        </div>                    
                    </div>                                                                                  
                </div>
            </div>           
        </div>
    </div>
</section>
@endsection