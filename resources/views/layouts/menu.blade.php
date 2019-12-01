<div class="container">
    <div class="menu-style-two clearfix">
        <div class="menu-logo">
             <figure>
             <a href="{{ url('/')}}"><img src="{{ asset('images/logo.jpg') }}" alt="Logo STKIP Suar Bangli"></a>
            </figure>
        </div>
        <div class="menu-area clearfix">
            <nav class="main-menu float-left">
                <div class="navbar-header">     
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                    <ul class="navigation clearfix">
                        <li>
                            <a href="{{ url('/') }}"><i class="fa fa-home" aria-hidden="true"></i>Home</a>                            
                        </li>
                        <li class="dropdown"><a href="#">Profil</a>
                            <ul>
                                <li><a href="{{ url('profil/mengapa-stkipsuar') }}">Mengapa STKIP Suar Bangli</a></li>
                                <li><a href="{{ url('profil/visi-misi') }}">Visi & Misi</a></li>
                                <li><a href="{{ url('profil/profil-ketua-yayasan') }}">Profil Ketua Yayasan</a></li>
                                <li><a href="{{ url('profil/profil-pejabat-struktural') }}">Profil Pejabat Struktural</a></li>
                                <li><a href="{{ url('profil/kampus-stkip') }}">Kampus STKIP Suar Bangli</a></li>
                                <li><a href="{{ url('profil/video-profil') }}">Video Profil STKIP Suar Bangli</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Program Studi</a>
                            <ul>
                            <li><a href="{{ url('prodi/pendidikan-bahasa-dan-sastra-indonesia') }}">Pendidikan Bahasa Dan Sastra Indonesia</a></li>
                            <li><a href="{{ url('prodi/pendidikan-bahasa-inggris') }}">Pendidikan Bahasa Inggris</a></li>
                            <li><a href="{{ url('prodi/pendidikan-guru-sekolah-dasar') }}">Pendidikan Guru Sekolah Dasar</a></li>                                
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Coursse</a>
                            <ul>
                                <li><a href="courses-grid.html">Courses Grid</a></li>
                                <li><a href="courses-list.html">Courses list</a></li>
                                <li><a href="courses-single.html">Courses Single</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Events</a>
                            <ul>                                
                                <li><a href="event.html">Events</a></li>
                                <li><a href="event-single.html">Events Single</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Blog</a>
                            <ul>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                            </ul>
                        </li>
                        <li><a href="contactus.html">Contact Us</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        {{-- <div class="right-side-menu clearfix">
            <div class="outer-search-box float-left">
                <div class="seach-toggle"><i class="fa fa-search"></i></div>
                <div class="search-box">
                    <form method="post" action="index.html">
                        <div class="form-group">
                            <input type="search" name="search" placeholder="Search Here" required>
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <span class="border-right two"></span>
            </div>                 
        </div> --}}
    </div>            
</div>