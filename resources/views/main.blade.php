@extends('layouts.master')
@section('menu')
    @include('layouts.menu')
@endsection
@section('slider')
    @include('layouts.slider')
@endsection
@section('fakultas')
<section class="team-section sp-five">
    <div class="container">
        <div class="sec-title-two pb-one text-center">
            <h4>Program Studi Kami</h4>
        </div>
        <div class="title-text text-center">
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ullamcorper vehicula nisi, posuere blandit libero dictum sed. Vestibulum mattis pulvinar sapien, sit amet rhoncus nisl vulputate non. Praesent laoreet diam sit amet arcu auctor, id posuere turpis iaculis. Quisque lorem sapien, mollis et iaculis et, eleifend nec leo. Donec molestie porta nunc, a hendrerit magna tempor in. Aenean sagittis, lorem vel fringilla sollicitudin, dolor sapien aliquam tellus, a ornare quam lacus in lacus. Donec pellentesque urna sit amet luctus lobortis. Morbi euismod augue id orci consectetur vestibulum. Phasellus ultricies quis felis sit amet tincidunt.</span>
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