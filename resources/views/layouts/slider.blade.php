<section class="main-slider style-1">
    <div class="main-slider-carousel owl-carousel owl-theme">
        
        @foreach ($slider as $item)       
        <div class="slide" style="background-image:url('{{ asset('images/slides/').'/'.$item->gambar}}'")>
            <div class="container">
                <div class="content">
                    <div class="image"><img src="images/icon/logo.png" alt=""></div>
                    <h3>Get Started with Murcia Learning System</h3>
                    <h2>A Complete Learning Management<br>Solution Process</h2>
                    <div class="link-box">
                        <a href="#" class="theme-btn btn-style-one">Our Services</a> <a href="contactus.html" class="theme-btn btn-style-two">Contact Us</a>
                    </div>
                </div>
            </div>
        </div> 
        @endforeach
        
        {{-- <div class="slide" style="background-image:url(images/slides/1.jpg)">
            <div class="container">
                <div class="content">
                    <div class="image"><img src="images/icon/logo.png" alt=""></div>
                    <h3>Get Started with Murcia Learning System</h3>
                    <h2>A Complete Learning Management<br>Solution Process</h2>
                    <div class="link-box">
                        <a href="#" class="theme-btn btn-style-one">Our Services</a> <a href="contactus.html" class="theme-btn btn-style-two">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="slide" style="background-image:url(images/slides/2.jpg)">
            <div class="container">
                <div class="content">
                    <div class="image"><img src="images/icon/logo.png" alt=""></div>
                    <h3>Get Started with Murcia Learning System</h3>
                    <h2>A Complete Learning Management<br>Solution Process</h2>
                    <div class="link-box">
                        <a href="#" class="theme-btn btn-style-one">Our Services</a> <a href="contactus.html" class="theme-btn btn-style-two">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide" style="background-image:url(images/slides/3.jpg)">
            <div class="container">
                <div class="content">
                    <div class="image"><img src="images/icon/logo.png" alt=""></div>
                    <h3>Get Started with Murcia Learning System</h3>
                    <h2>A Complete Learning Management<br>Solution Process</h2>
                    <div class="link-box">
                        <a href="#" class="theme-btn btn-style-one">Our Services</a> <a href="contactus.html" class="theme-btn btn-style-two">Contact Us</a>
                    </div>
                </div>
            </div>
        </div> --}}
        
    </div>
</section>