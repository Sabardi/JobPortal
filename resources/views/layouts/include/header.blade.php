        <!-- main header -->
        <header class="main-header style-two">
            <!-- header-lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href=""><img src="{{ asset('assets') }}/images/logo-2.png"
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
                                                <li><a href="">Semua Loker</a></li>
                                                <li><a href="">Daftar Perusahaan</a></li>
                                                <li><a href="">Kategori Loker</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="">Lokasi</a>
                                            <ul>
                                                <li><a href="">Kota Mataram</a></li>
                                                <li><a href="">Kota Sorong</a></li>
                                                <li><a href="">Kabupaten Lombok Timur</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="">Featured Jobs</a></li>
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
                                    {{-- <x-modal-component /> --}}
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Launch demo modal
                                      </button>
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
                            <figure class="logo"><a href=""><img src="{{ asset('assets') }}/images/logo.png"
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
                                </div>
                            @endif
                        @endguest

                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->
