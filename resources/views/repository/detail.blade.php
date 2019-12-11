@extends('layouts.master')
@section('slider')
<section class="page-title" >
    <div class="container clearfix">
        <div class="title pull-left">
            <h2>Detail Skripsi</h2>
        </div>
        <ul class="title-manu pull-right">
            <li><a href="{{  url('/') }}">home</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
            <li><a href="{{  url('repository/skripsi') }}">Skripsi</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
            <li>Detail Skripsi</li>
        </ul>         
    </div>
</section>    
@endsection
@section('content')
<section class="courses-list-section sp-ten">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-sm-12">
                    <div class="left-side-area">
                        <div class="image-content">
                            <div class="courses-bottom clearfix">
                                <div class="text-left float-left">
                                    <h3>Judul</h3>
                                    <h6>{{ $skripsi->judul }}</h6>   
                                    <hr>
                                    <h3>Penulis</h3>
                                    <h6>{{ $skripsi->nama.' ('.$skripsi->nim.')' }}</h6>
                                    <hr>
                                    <h3>Pembimbing I</h3>
                                    <h6>{{ $skripsi->pembimbing1.' ('.$skripsi->nidn1.')' }}</h6>
                                    <hr>
                                    <h3>Pembimbing II</h3>
                                    <h6>{{ $skripsi->pembimbing2.' ('.$skripsi->nidn2.')' }}</h6> 
                                                                   
                                </div>                            
                            </div>
                            <div class="content-text">
                                <div class="text-area-one">
                                    <div class="sub-title">
                                        <h3>Abstrak</h3>                                     
                                    </div>                                                                    
                                    {!! $skripsi->abstrak_text !!}
                                    <hr>
                                    <div class="sub-title">
                                        <h3>Download File</h3>                                     
                                    </div> 
                                    <h6><a href="{{ url('repository/skripsi/download/abstark/').'/'.$skripsi->id }}"> <i style="vertical-align: middle;padding-right: 4px" class='fa fa-2x fa-file-pdf-o text-success'></i>  Abstrak</a> </h6>
                                    <h6><a href="{{ url('repository/skripsi/download/full/').'/'.$skripsi->id }}"> <i style="vertical-align: middle;padding-right: 4px" class='fa fa-2x fa-file-pdf-o text-success'></i>  Skripsi Full</a> </h6>
                                </div>                                                                                                                          
                            </div>
                        </div>                                                                             
                    </div>
                </div>
                <div class="col-xl-4 col-sm-12">
                        <div class="right-side-bar">
                            <div class="login-area two">
                                <div class="sec-title-one pb-one">
                                    <h6>Cari Skripsi</h6>
                                </div>
                                {{ Form::open(['url' => 'repository/skripsi/cari','class'=>'form-horizontal','id'=>'cariskripsi']) }}
                                    <div class="form-group">
                                        {!! Form::select('program',[''=>'Pilih Program Studi',
                                            'Pendidikan Bahasa dan Sastra Indonesia'=>'Pendidikan Bahasa dan Sastra Indonesia',
                                            'Pendidikan Bahasa Inggris'=>'Pendidikan Bahasa Inggris',
                                            'Pendidikan Guru Sekolah Dasar'=>'Pendidikan Guru Sekolah Dasar'],null,['class'=>'']) !!}                                      
                                   </div>
                                    <div class="form-group">
                                        {!! Form::text('tahun',null,['class'=>'timepicker','placeholder'=>'Tahun','autocomplete'=>'off']) !!}                                       
                                    </div>                                
                                    <div class="link-btn">
                                            <a href="javascript:void(0)" class="thm-btn bg-clr1" onclick="$('#cariskripsi').submit()">Cari <i class="fa fa-search"></i></a>
                                    </div>                               
                                {{ Form::close() }}
                            </div>
                            <div class="side-menu">
                                <div class="item-one">
                                    <div class="sec-title-one pb-one">
                                        <h6>Arsip</h6>
                                    </div>
                                    <ul class="side-bar-menu">
                                            @foreach($tahun as $th)
                                                <li> <a href="{{ url('repository/skripsi/arsip').'/'.$th->tahun }}"> <p style="font-size:1.2em">{{ $th->tahun }} <i class="fa fa-search text-success"></i></p> </a></li>
                                             @endforeach                                                                                                      
                                    </ul>
                             </div>                                                                          
                        </div>          
                    </div>
                </div> 
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $('.timepicker').datetimepicker({
        format: 'YYYY',
        maxDate: new Date(),
    }); 
    </script>
@endsection