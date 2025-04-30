@extends('layouts.app')

@section('content')
    <!-- banner-section -->
    <section class="banner-section style-two centred"
        style="background-image: url({{ asset('assets') }}/images/banner.png);">
        <div class="auto-container">
            <div class="content-box">
                <div class="text">
                    <h1>Temukan Pekerjaan Impian Anda
                        <br />Hari Ini
                    </h1>
                    <p>kami menghubungkan Anda dengan perusahaan terkemuka yang mencari talenta seperti Anda. Dengan
                        platform yang mudah digunakan, Anda dapat dengan mudah mencari, melamar, dan mendapatkan pekerjaan.
                        Pekerjaan ideal Anda hanya sejauh klik!</p>
                </div>
                <div class="form-inner">
                    <ul class="clearfix radio-select-box">
                        <li>
                            <div class="single-checkbox">
                                <input type="radio" name="check-box" id="check1" checked="">
                                <label for="check1"><span></span>All</label>
                            </div>
                        </li>
                        <li>
                            <div class="single-checkbox">
                                <input type="radio" name="check-box" id="check2">
                                <label for="check2"><span></span>FreeLance</label>
                            </div>
                        </li>
                        <li>
                            <div class="single-checkbox">
                                <input type="radio" name="check-box" id="check3">
                                <label for="check3"><span></span>Full Time</label>
                            </div>
                        </li>
                        <li>
                            <div class="single-checkbox">
                                <input type="radio" name="check-box" id="check4">
                                <label for="check4"><span></span>Part Time</label>
                            </div>
                        </li>
                    </ul>
                    <form action="" method="post">
                        <div class="clearfix input-inner">
                            <div class="form-group">
                                <i class="icon-2"></i>
                                <input type="search" name="name" placeholder="Cari Loker..." required="">
                            </div>
                            <div class="form-group">
                                <i class="icon-3"></i>
                                <select class="wide">
                                    <option data-display="Select Location">Lokasi</option>
                                    @foreach ($locations as $location)
                                        <option value="1">{{ $location->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <i class="icon-4"></i>
                                <select class="wide">
                                    <option data-display="Select Category">Kategori</option>
                                    @foreach ($categories as $category)
                                        <option value="1">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="btn-box">
                                <button type="submit"><i class="icon-2"></i>Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->


    <!-- category-section -->
    <section class="category-section alternat-2 centred sec-pad">
        <div class="pattern-layer" style="background-image: url({{ asset('assets') }}/images/shape/shape-10.png);"></div>
        <div class="auto-container">
            <div class="sec-title">
                <h2>Kategori Lowongan</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmod tempor incididunt labore
                    <br />dolore magna aliqua enim.
                </p>
            </div>

            <x-modal-component />

            <div class="five-item-carousel owl-carousel owl-theme dots-style-one owl-nav-none">
                <div class="category-block-one">
                    <div class="inner-box">
                        <div class="shape">
                            <div class="shape-1"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-1.png);">
                            </div>
                            <div class="shape-2"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-2.png);">
                            </div>
                        </div>
                        <div class="icon-box"><i class="icon-6"></i></div>
                        <h5>Property</h5>
                        <span>52</span>
                    </div>
                </div>
                <div class="category-block-one">
                    <div class="inner-box">
                        <div class="shape">
                            <div class="shape-1"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-1.png);">
                            </div>
                            <div class="shape-2"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-2.png);">
                            </div>
                        </div>
                        <div class="icon-box"><i class="icon-7"></i></div>
                        <h5>Home Appliances</h5>
                        <span>20</span>
                    </div>
                </div>
                <div class="category-block-one">
                    <div class="inner-box">
                        <div class="shape">
                            <div class="shape-1"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-1.png);">
                            </div>
                            <div class="shape-2"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-2.png);">
                            </div>
                        </div>
                        <div class="icon-box"><i class="icon-8"></i></div>
                        <h5>Electronics</h5>
                        <span>35</span>
                    </div>
                </div>
                <div class="category-block-one">
                    <div class="inner-box">
                        <div class="shape">
                            <div class="shape-1"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-1.png);">
                            </div>
                            <div class="shape-2"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-2.png);">
                            </div>
                        </div>
                        <div class="icon-box"><i class="icon-9"></i></div>
                        <h5>Health & Beauty</h5>
                        <span>10</span>
                    </div>
                </div>
                <div class="category-block-one">
                    <div class="inner-box">
                        <div class="shape">
                            <div class="shape-1"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-1.png);">
                            </div>
                            <div class="shape-2"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-2.png);">
                            </div>
                        </div>
                        <div class="icon-box"><i class="icon-10"></i></div>
                        <h5>Automotive</h5>
                        <span>27</span>
                    </div>
                </div>
                <div class="category-block-one">
                    <div class="inner-box">
                        <div class="shape">
                            <div class="shape-1"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-1.png);">
                            </div>
                            <div class="shape-2"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-2.png);">
                            </div>
                        </div>
                        <div class="icon-box"><i class="icon-6"></i></div>
                        <h5>Property</h5>
                        <span>52</span>
                    </div>
                </div>
                <div class="category-block-one">
                    <div class="inner-box">
                        <div class="shape">
                            <div class="shape-1"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-1.png);">
                            </div>
                            <div class="shape-2"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-2.png);">
                            </div>
                        </div>
                        <div class="icon-box"><i class="icon-7"></i></div>
                        <h5>Home Appliances</h5>
                        <span>20</span>
                    </div>
                </div>
                <div class="category-block-one">
                    <div class="inner-box">
                        <div class="shape">
                            <div class="shape-1"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-1.png);">
                            </div>
                            <div class="shape-2"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-2.png);">
                            </div>
                        </div>
                        <div class="icon-box"><i class="icon-8"></i></div>
                        <h5>Electronics</h5>
                        <span>35</span>
                    </div>
                </div>
                <div class="category-block-one">
                    <div class="inner-box">
                        <div class="shape">
                            <div class="shape-1"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-1.png);">
                            </div>
                            <div class="shape-2"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-2.png);">
                            </div>
                        </div>
                        <div class="icon-box"><i class="icon-9"></i></div>
                        <h5>Health & Beauty</h5>
                        <span>10</span>
                    </div>
                </div>
                <div class="category-block-one">
                    <div class="inner-box">
                        <div class="shape">
                            <div class="shape-1"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-1.png);">
                            </div>
                            <div class="shape-2"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-2.png);">
                            </div>
                        </div>
                        <div class="icon-box"><i class="icon-10"></i></div>
                        <h5>Automotive</h5>
                        <span>27</span>
                    </div>
                </div>
                <div class="category-block-one">
                    <div class="inner-box">
                        <div class="shape">
                            <div class="shape-1"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-1.png);">
                            </div>
                            <div class="shape-2"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-2.png);">
                            </div>
                        </div>
                        <div class="icon-box"><i class="icon-6"></i></div>
                        <h5>Property</h5>
                        <span>52</span>
                    </div>
                </div>
                <div class="category-block-one">
                    <div class="inner-box">
                        <div class="shape">
                            <div class="shape-1"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-1.png);">
                            </div>
                            <div class="shape-2"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-2.png);">
                            </div>
                        </div>
                        <div class="icon-box"><i class="icon-7"></i></div>
                        <h5>Home Appliances</h5>
                        <span>20</span>
                    </div>
                </div>
                <div class="category-block-one">
                    <div class="inner-box">
                        <div class="shape">
                            <div class="shape-1"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-1.png);">
                            </div>
                            <div class="shape-2"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-2.png);">
                            </div>
                        </div>
                        <div class="icon-box"><i class="icon-8"></i></div>
                        <h5>Electronics</h5>
                        <span>35</span>
                    </div>
                </div>
                <div class="category-block-one">
                    <div class="inner-box">
                        <div class="shape">
                            <div class="shape-1"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-1.png);">
                            </div>
                            <div class="shape-2"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-2.png);">
                            </div>
                        </div>
                        <div class="icon-box"><i class="icon-9"></i></div>
                        <h5>Health & Beauty</h5>
                        <span>10</span>
                    </div>
                </div>
                <div class="category-block-one">
                    <div class="inner-box">
                        <div class="shape">
                            <div class="shape-1"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-1.png);">
                            </div>
                            <div class="shape-2"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-2.png);">
                            </div>
                        </div>
                        <div class="icon-box"><i class="icon-10"></i></div>
                        <h5>Automotive</h5>
                        <span>27</span>
                    </div>
                </div>
                <div class="category-block-one">
                    <div class="inner-box">
                        <div class="shape">
                            <div class="shape-1"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-1.png);">
                            </div>
                            <div class="shape-2"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-2.png);">
                            </div>
                        </div>
                        <div class="icon-box"><i class="icon-6"></i></div>
                        <h5>Property</h5>
                        <span>52</span>
                    </div>
                </div>
                <div class="category-block-one">
                    <div class="inner-box">
                        <div class="shape">
                            <div class="shape-1"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-1.png);">
                            </div>
                            <div class="shape-2"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-2.png);">
                            </div>
                        </div>
                        <div class="icon-box"><i class="icon-7"></i></div>
                        <h5>Home Appliances</h5>
                        <span>20</span>
                    </div>
                </div>
                <div class="category-block-one">
                    <div class="inner-box">
                        <div class="shape">
                            <div class="shape-1"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-1.png);">
                            </div>
                            <div class="shape-2"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-2.png);">
                            </div>
                        </div>
                        <div class="icon-box"><i class="icon-8"></i></div>
                        <h5>Electronics</h5>
                        <span>35</span>
                    </div>
                </div>
                <div class="category-block-one">
                    <div class="inner-box">
                        <div class="shape">
                            <div class="shape-1"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-1.png);">
                            </div>
                            <div class="shape-2"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-2.png);">
                            </div>
                        </div>
                        <div class="icon-box"><i class="icon-9"></i></div>
                        <h5>Health & Beauty</h5>
                        <span>10</span>
                    </div>
                </div>
                <div class="category-block-one">
                    <div class="inner-box">
                        <div class="shape">
                            <div class="shape-1"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-1.png);">
                            </div>
                            <div class="shape-2"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-2.png);">
                            </div>
                        </div>
                        <div class="icon-box"><i class="icon-10"></i></div>
                        <h5>Automotive</h5>
                        <span>27</span>
                    </div>
                </div>
                <div class="category-block-one">
                    <div class="inner-box">
                        <div class="shape">
                            <div class="shape-1"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-1.png);">
                            </div>
                            <div class="shape-2"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-2.png);">
                            </div>
                        </div>
                        <div class="icon-box"><i class="icon-6"></i></div>
                        <h5>Property</h5>
                        <span>52</span>
                    </div>
                </div>
                <div class="category-block-one">
                    <div class="inner-box">
                        <div class="shape">
                            <div class="shape-1"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-1.png);">
                            </div>
                            <div class="shape-2"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-2.png);">
                            </div>
                        </div>
                        <div class="icon-box"><i class="icon-7"></i></div>
                        <h5>Home Appliances</h5>
                        <span>20</span>
                    </div>
                </div>
                <div class="category-block-one">
                    <div class="inner-box">
                        <div class="shape">
                            <div class="shape-1"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-1.png);">
                            </div>
                            <div class="shape-2"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-2.png);">
                            </div>
                        </div>
                        <div class="icon-box"><i class="icon-8"></i></div>
                        <h5>Electronics</h5>
                        <span>35</span>
                    </div>
                </div>
                <div class="category-block-one">
                    <div class="inner-box">
                        <div class="shape">
                            <div class="shape-1"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-1.png);">
                            </div>
                            <div class="shape-2"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-2.png);">
                            </div>
                        </div>
                        <div class="icon-box"><i class="icon-9"></i></div>
                        <h5>Health & Beauty</h5>
                        <span>10</span>
                    </div>
                </div>
                <div class="category-block-one">
                    <div class="inner-box">
                        <div class="shape">
                            <div class="shape-1"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-1.png);">
                            </div>
                            <div class="shape-2"
                                style="background-image: url({{ asset('assets') }}/images/shape/shape-2.png);">
                            </div>
                        </div>
                        <div class="icon-box"><i class="icon-10"></i></div>
                        <h5>Automotive</h5>
                        <span>27</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- category-section end -->

    <!-- feature-style-two -->
    <section class="feature-style-two four-column">
        <div class="auto-container">
            <div class="sec-title centred">
                {{-- <span>Features</span> --}}
                <h2>Featured Jobs</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmod tempor incididunt labore
                    <br />dolore magna aliqua enim.
                </p>
            </div>
            <div class="tabs-box">
                <div class="tab-btn-box centred">
                    <ul class="clearfix tab-btns tab-buttons">
                        <li class="tab-btn active-btn" data-tab="#tab-1">Lowongan Terbaru</li>
                        <li class="tab-btn" data-tab="#tab-2">Datfar Perusahaan</li>
                    </ul>
                </div>

                <div class="tabs-content">
                    <div class="tab active-tab" id="tab-1">
                        <div class="clearfix col">
                            @foreach ($jobs as $job)
                                <div class="row-lg-12 row-md-12 row-sm-12 feature-block">
                                    <div class="feature-block-one wow fadeInDown animated">
                                        <div class="inner-box">
                                            <div class="flex justify-between">
                                                <div class="lower-content">
                                                    <div class="category">
                                                        <i class="fas fa-tags"></i>
                                                        <p>{{ $job->job_type }}</p>
                                                    </div>
                                                    <h4><a class="text-decoration-none" href="{{ route('job.show', $job) }}">{{ $job->title }}</a>
                                                    </h4>

                                                    <ul class="clearfix info">
                                                        <li>
                                                            <i
                                                                class="far fa-clock"></i>{{ $job->created_at->diffForHumans() }}
                                                        </li>
                                                        <li><i
                                                                class="fas fa-map-marker-alt"></i>{{ $job->location->name }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab" id="tab-2">
                        <div class="clearfix row">
                            @foreach ($companies as $company)
                                <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                                    <div class="feature-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img
                                                        src="{{ asset('assets') }}/images/resource/feature-7.jpg"
                                                        alt=""></figure>
                                                <div class="shape"></div>
                                                <div class="feature">Featured</div>
                                                <div class="icon">
                                                    <div class="icon-shape"></div>
                                                    <i class="icon-16"></i>
                                                </div>
                                            </div>
                                            <div class="lower-content">
                                                <div class="category"><i class="fas fa-tags"></i>
                                                    <p>{{ $company->industry_type }}</p>
                                                </div>
                                                <h4><a href="" class="text-sm">{{ $company->company_name }} </a>
                                                </h4>
                                                <ul class="clearfix info">
                                                    <li><i class="far fa-clock"></i>Bergabung
                                                        {{ $company->created_at->diffForHumans() }} </li>
                                                    <li><i class="fas fa-map-marker-alt"></i>{{ $company->address }}</li>
                                                </ul>
                                                {{-- <div class="lower-box">
                                                    <h5>$3,000.00</h5>
                                                    <ul class="react-box">
                                                        <li><a href=""><i class="icon-21"></i></a></li>
                                                        <li><a href=""><i class="icon-22"></i></a></li>
                                                    </ul>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature-style-two end -->
@endsection
