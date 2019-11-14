@extends('layouts.master')
@section('slider')
<section class="page-title" >
    <div class="container clearfix">
        <div class="title pull-left">
            <h2>Mengapa STKIP Suar Bangli</h2>
        </div>
        <ul class="title-manu pull-right">
            <li><a href="{{  url('/') }}">home</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
            <li>Mengapa STKIP Suar Bangli</li>
        </ul>         
    </div>
</section>    
@endsection
@section('content')
<section class="welcome-section sp-five">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-sm-12">
                    <div class="wellcome-left-colmun">
                        <div class="sec-title pb-one">
                            <h4>REASON 1</h4>
                        </div>
                        <div class="content-text">                           
                           <p>TEXT</p>                          
                        </div>
                    </div>                                          
                </div>            
            </div>
        </div>
    </section>
@endsection