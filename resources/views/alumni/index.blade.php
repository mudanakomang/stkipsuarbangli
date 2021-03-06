@extends('layouts.master')
@section('slider')
<section class="page-title">
    <div class="container clearfix">
        <div class="title pull-left">
            <h2>Alumni</h2>
        </div>
        <ul class="title-manu pull-right">
            <li><a href="{{  url('/') }}">home</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
        <li>Alumni</li>
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
                        <div id="alumni"></div>                        
                    </div>
                </div>
                <div class="col-xl-4 col-sm-12">
                        <div class="right-side-bar">
                            <div class="login-area two">
                                <div class="sec-title-one pb-one">
                                    <h6>Cari Alumni</h6>
                                </div>                                                              
                                    <div class="form-group">
                                        {!! Form::text('nama',null,['class'=>'timepicker','placeholder'=>'Nama Alumni','autocomplete'=>'off','id'=>'nama']) !!}                                       
                                    </div>                                                                                                                           
                            </div>
                            <div class="side-menu">
                                <div class="item-one">
                                    <div class="sec-title-one pb-one">
                                        <h6>Cari Berdasarkan Jurusan</h6>
                                    </div>
                                    <ul class="side-bar-menu">
                                        <div class="form-group">
                                        {!! Form::select('jurusan',[''=>'Pilih Jurusan']+\App\Alumni::groupBy('jurusan')->pluck('jurusan','jurusan')->all(),null,['id'=>'jurusan']) !!}                                                                                                                                                 
                                        </div>
                                    </ul>
                                </div>                                                                          
                            </div>  
                            <div class="side-menu">
                                <div class="item-one">
                                    <div class="sec-title-one pb-one">
                                        <h6>Cari Berdasarkan Periode</h6>
                                    </div>
                                    <ul class="side-bar-menu">
                                        <div class="form-group">
                                            {!! Form::select('jurusan',[''=>'Pilih Periode']+\App\Alumni::groupBy('periode')->pluck('periode','periode')->all(),null,['id'=>'periode']) !!}                                                                                                                                                 
                                        </div>                                                                                                   
                                    </ul>
                                </div>                                                                          
                            </div>         
                        </div>
                    </div> 
                    <div id="paging">
                            <ul class="styled-pagination two text-center">
                                    {{-- <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li> --}}
                            </ul>
                    </div>                    
            </div>
        </div>
</section>
@endsection
@section('script')
    <script>
        $('#nama').on('keyup paste ',function(){
            getPageData()
        })
        $('#jurusan').on('change',function(){
            getPageData()
        })
        $('#periode').on('change',function(){
            getPageData()
        })
        function getNext(page,last){            
            var nextPage=parseFloat(page)+1
          if(parseFloat(page)==parseFloat(last)){
              getPageData(parseFloat(last))
          }else{
            getPageData(nextPage)
          }
        }
        function getPrev(page){           
            var prevPage=parseFloat(page)-1
            if(parseFloat(page)==1){
                getPageData()
            }else{
                getPageData(prevPage)
            }
        }
        function getPageData(page=1){
            $.ajax({
               url:'{{ route('getalumni') }}',
               type:'POST',
               data:{
                   _token:'{{ csrf_token() }}',
                   page:page, 
                   nama:$('#nama').val(),
                   jurusan:$('#jurusan').val(), 
                   periode:$('#periode').val()               
               },success:function(v){                                                  
                      console.log(v)
                      var currentp=v['data']['current_page'] 
                      $('#paging ul').empty()          
                       var prev='<li><a href="javascript:void(0)" onclick="getPrev('+currentp+')"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>'
                       $('#paging ul').append(prev)                
                       for(var p=1;p<=v['data']['last_page'];p++){
                           var li=''
                            if(v['data']['current_page']==p){
                               li+= '<li class="active">'+p+'</li>' 
                            }else{
                                li+='<li><a href="javascript:void(0)" id="'+p+'" onclick="getPageData(this.id)">'+p+'</a></li>'
                            }                          
                            $('#paging ul').append(li)
                       } 
                        var next= '<li><a href="javascript:void(0)"  onclick="getNext('+currentp+','+v['data']['last_page']+')"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>'                                       
                        $('#paging ul').append(next) 
                        $('#alumni').empty()              
                        $.each(v['data']['data'],function(index,item){
                         var html='<div class="course-item-one"> '+                                   
                                    '<div class="image-text">'+
                                        '<h6><a href="javascript:void(0)">'+item['nama']+' '+'('+item['nim']+')</a></h6>'+
                                        '<div class="course-info clearfix">'+
                                            '<ul class="float-left">'+
                                                '<li>Jurusan: '+item['jurusan']+'</li>'+
                                                '<li>Periode Wisuda : '+item['periode']+'</li>'+
                                            '</ul>'+
                                            '<ul class="float-right">'+
                                                '<li>IPK</li>'+
                                                '<li><h5>'+item['ipk']+'</h5></li>'+
                                            '</ul>'+
                                        '</div>'+                                     
                                '</div>'+
                            '</div> ';                              
                         $('#alumni').append(html)
                     })
                   
               }
           })
        }
       $(document).ready(function(){
           getPageData()
       })
    </script>
@endsection