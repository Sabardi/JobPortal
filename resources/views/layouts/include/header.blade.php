        <!-- main header -->
        <header class="main-header style-two">
            <!-- header-lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="{{ route('home') }}"><img src="{{ asset('assets') }}/images/logo-2.png"
                                        alt=""></a></figure>
                        </div>
                        <div class="menu-area">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current dropdown"><a href="#">Loker</a>
                                            <ul>
                                                <li><a href="{{ route('loker') }}">Semua Loker</a></li>
                                                <li><a href="{{ route('company') }}">Daftar Perusahaan</a></li>
                                                <li><a href="{{ route('category') }}">Kategori Loker</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="">Lokasi</a>
                                            <ul>
                                                {{-- <li><a href="">Kota Mataram</a></li> --}}
                                                <x-header />
                                            </ul>
                                        </li>

                                        <li><a href="">Featured Jobs</a></li>
                                        @auth
                                            @if (Auth::User()->user_type == 'company')
                                                <li class="dropdown"><a href="">Upload Loker</a>
                                                    <div class="megamenu">
                                                        <div class="row clearfix">
                                                            <div class="col-xl-6 column">
                                                                <ul>
                                                                    <li>
                                                                        <h4>Post a Job</h4>
                                                                    </li>
                                                                    <li><a href="{{ route('job.create') }}">Buat Loker</a></li>
                                                                    <li><a href="{{ route('job.index') }}">Daftar lowongan</a></li>
                                                                    <li><a href="feature-element-1.html">Data Pendaftar</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-xl-6 column">
                                                                <ul>
                                                                    <li>
                                                                        <h4>Manage company</h4>
                                                                    </li>
                                                                    <li><a href="testimonial-element.html">Profile
                                                                            company</a>
                                                                    </li>
                                                                    <li><a href="">Account Settings</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endif
                                        @endauth

                                        <li class="dropdown"><a href="">Aboute</a>
                                            <div class="megamenu">
                                                <div class="row clearfix">
                                                    <div class="col-xl-6 column">
                                                        <ul>
                                                            <li>
                                                                <h4>About</h4>
                                                            </li>
                                                            <li><a href="about-element.html">About us</a></li>
                                                            <li><a href="category-element-1.html">contact</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-xl-6 column">
                                                        <ul>
                                                            <li>
                                                                <h4>Syarat dan Ketentuan</h4>
                                                            </li>
                                                            <li><a href="feature-element-1.html">Kebijakan Privasi</a>
                                                            </li>
                                                            <li><a href="testimonial-element.html">Saluran Whatsapp</a>
                                                            </li>
                                                            <li><a href="testimonial-element.html">Group Whatsapp</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href="">Blog</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>

                        @guest
                            @if (Route::has('login'))
                                <div class="btn-box">
                                    <a href="{{ route('login') }}" class="theme-btn-one">Masuk</a>
                                    {{-- <button type="button" class="theme-btn-one" data-bs-toggle="modal"
                                        data-bs-target="#loginModal">
                                        Masuk
                                    </button>
                                    <button type="button" class="theme-btn-one" data-bs-toggle="modal"
                                        data-bs-target="#registerModal">
                                        Daftar
                                    </button> --}}
                                </div>
                            @endif
                        @endguest
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="{{ route('home') }}"><img src="{{ asset('assets') }}/images/logo.png"
                                        alt=""></a></figure>
                        </div>
                        <div class="menu-area">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        @guest
                            @if (Route::has('login'))
                                <div class="btn-box">
                                    <a href="{{ route('login') }}" class="theme-btn-one">Masuk</a>

                                    {{-- <button type="button" class="theme-btn-one" data-bs-toggle="modal"
                                        data-bs-target="#loginModal">
                                        Masuk
                                    </button>

                                    <button type="button" class="theme-btn-one" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Daftar
                                    </button> --}}
                                </div>
                            @endif
                        @endguest
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->
