@extends('layouts.master')
@section('slider')
<section class="page-title">
    <div class="container clearfix">
        <div class="title pull-left">
            <h2>POSTING</h2>
        </div>
        <ul class="title-manu pull-right">
            <li><a href="{{  url('/') }}">home</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
        <li>Posting</li>
        </ul>         
    </div>
</section>
@endsection
@section('content')
<section class="blog-single-section sp-three">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-sm-12">
                <div class="left-side-area">
                        <div class="row">
                            @foreach ($posts as $post)
                            <div class="col-xl-6 col-md-6 col-sm-12">
                                    <div class="blog-item-one">
                                        <div class="image-box">
                                            <figure>
                                                <a href="{{ url('post/detail').'/'.$post->id }}"><img src="{{ !empty($post->gambar) ? url('images/post/').'/'.$post->gambar : url('images/post/').'/'.$post->kategori.'.png' }}" alt=""></a>
                                            </figure>
                                            <div class="overlay">
                                                <a class="link-btn" href="{{ url('post/detail').'/'.$post->id }}">
                                                    <i class="fa fa-link"></i>
                                                </a>                                
                                            </div>
                                            <div class="date-box">
                                                <p>{{ \Carbon\Carbon::parse($post->created_at)->format('d M Y') }}</p>
                                            </div>
                                        </div>
                                        <div class="image-text">
                                            <h6><a href="{{ url('post/detail').'/'.$post->id }}">{{ $post->judul}}</a></h6>
                                            {!! substr($post->isi,0,300)  !!} ...
                                            <div class="link-btn">
                                                <a href="{{ url('post/detail').'/'.$post->id }}">Selengkapnya <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div> 
                            @endforeach                                                            
                            </div>
                            <ul class="styled-pagination three text-center">
                                    {!! $posts->render() !!}
                            </ul>
                </div>    
            </div>
            <div class="col-xl-4 col-sm-12">
                <div class="right-side-bar">                    
                    <div class="side-menu">
                        <div class="item-one">
                            <div class="sec-title-one pb-one">
                                <h6>Kategori</h6>
                            </div>
                            <ul class="side-bar-menu">
                                <li><a href="{{ url('post/kategori').'/berita' }}"><span></span>Berita</a></li>
                                <li><a href="{{ url('post/kategori').'/agenda' }}"><span></span>Agenda</a></li>
                                <li><a href="{{ url('post/kategori').'/pengumuman' }}"><span></span>Pengumuman</a></li>                              
                            </ul>
                        </div>
                        <div class="item-five">
                            <div class="sec-title-one pb-one">
                                <h6>Post Terkini</h6>
                            </div>
                            <div class="side-bar-blog">
                                @foreach (\App\Post::orderBy('created_at','desc')->limit(5)->get() as $post)
                                <div class="item">
                                        <div class="image-box">
                                            <figure>
                                                <a href="{{ url('post/detail').'/'.$post->id }}"><img src="{{ !empty($post->gambar) ? url('images/post/').'/'.$post->gambar : url('images/post/').'/'.$post->kategori.'.png' }}" alt=""></a>
                                            </figure>
                                        </div>
                                        <div class="image-text">
                                            <a href="{{ url('post/detail').'/'.$post->id }}"><p>{{ $post->judul }}<br></p></a>
                                            <ul class="blog-info">
                                                <li><span class="border-right"></span><i class="fa fa-calendar" aria-hidden="true"></i>{{ \Carbon\Carbon::parse($post->created_at)->format('d M Y') }}</li>
                                                {{-- <li><i class="fa fa-user" aria-hidden="true"></i>{{  \App\User::find($post->user_id)->name  }}</li> --}}
                                            </ul>
                                        </div>
                                    </div>  
                                @endforeach                              
                            </div>
                        </div>                        
                        <div class="item-eight">
                            <div class="sec-title-one pb-one">
                                <h6>Tag Populer</h6>
                            </div>
                            <ul class="tag-list">
                                    @foreach (\App\Tags::orderBy('count','desc')->get() as $tag )
                                    <li><a href="{{ url('post/tags').'/'.$tag->id }}">{{ $tag->name }}</a></li>
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