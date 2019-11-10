<section class="main-slider">    
    <div class="main-slider-carousel owl-carousel owl-theme">     
        @foreach ($slider as $item)       
        <div class="slide" style="background-image:url('{{ asset('images/slides/').'/'.$item->gambar}}'")>
            <div class="container">
                <div class="content">
                    <div class="image"></div> 
                    <h3></h3>
                    <h2></h2>
                    <div class="link-box"> 
                       <br><br>
                     </div>
                </div>
            </div>
        </div> 
        @endforeach            
    </div>
</section>