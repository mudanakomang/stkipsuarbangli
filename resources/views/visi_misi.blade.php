@extends('layouts.master')
@section('slider')
<section class="page-title" style="background: url(images/resources/page-title.jpg);">
    <div class="container clearfix">
        <div class="title pull-left">
            <h2>VISI MISI</h2>
        </div>
        <ul class="title-manu pull-right">
            <li><a href="{{  url('/') }}">home</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
            <li>Visi Misi</li>
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
                            <h4>VISI</h4>
                        </div>
                        <div class="content-text">                           
                           <p>MEWUJUDKAN SEKOLAH TINGGI KEGURUAN DAN ILMU PENDIDIKAN (STKIP) SUAR BANGLI MENJADI LEMBAGA PENDIDIKAN TINGGI UNGGULAN, DI BIDANG TENAGA KEPENDIDIKAN PADA TAHUN 2021</p>                          
                        </div>
                    </div>   
                    <div class="wellcome-left-colmun">
                        <div class="sec-title pb-one">
                            <h4>MISI</h4>
                        </div>
                        <div class="content-text">                                                     
                               <ul>
                                   <li><p><i class="fa fa-dot-circle-o"></i> Menghasilkan Sarjana Pendidikan yang memiliki kesiapan, mandiri, dan mempunyai kemampuan untuk mengabdi sebagai kader pembangun bangsa.</li></p>
                                   <li><p><i class="fa fa-dot-circle-o"></i> Menghasilkan lulusan yang mempunyai budi pekerti yang luhur, berimam, dan ketaqwaan yang kuat, serta kepedulian yang tinggi terhadap masalah yang dihadapi masyarakat.</li></p>
                                   <li><p><i class="fa fa-dot-circle-o"></i> Menghasilkan lulusan yang sesuai dengan kebutuhan pembangunan untuk sektor pemerintah, swasta, dan masyarakat.</li></p>
                               </ul>                                                                                                                   
                        </div>
                    </div>                    
                </div>            
            </div>
        </div>
    </section>
@endsection