@extends('layouts.app')

@section('content')
    <!-- banner-section -->
    <section class="banner-section style-two centred"
        style="background-image: url({{ asset('assets') }}/images/banner/banner-2.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="text">
                    <h1>Buy, Sell, Rent & Exchange <br />in one Click</h1>
                    <p>Amet consectetur adipisicing elit sed do eiusmod.</p>
                </div>
                <div class="form-inner">
                    <ul class="radio-select-box clearfix">
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
                        <div class="input-inner clearfix">
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
                    <ul class="tab-btns tab-buttons clearfix">
                        <li class="tab-btn active-btn" data-tab="#tab-1">Lowongan Terbaru</li>
                        <li class="tab-btn" data-tab="#tab-2">Datfar Perusahaan</li>
                    </ul>
                </div>
                <div class="tabs-content">
                    <div class="tab active-tab" id="tab-1">
                        <div class="row clearfix">
                            @foreach ($jobs as $job)
                                <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                                    <a href="{{ route('job.show', $job) }}">
                                        <div class="feature-block-one wow fadeInDown animated animated"
                                            data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <figure class="image"><img
                                                            src="{{ asset('assets') }}/images/resource/feature-7.jpg"
                                                            alt=""></figure>
                                                    <div class="shape"></div>
                                                    <div class="feature">Featured</div>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="category"><i class="fas fa-tags"></i>
                                                        <p>{{ $job->job_type }}</p>
                                                    </div>
                                                    <h4><a href="browse-ads-details.html">{{ $job->title }}</a></h4>

                                                    <ul class="info clearfix">
                                                        <li><i
                                                                class="far fa-clock"></i>{{ $job->created_at->diffForHumans() }}
                                                        </li>
                                                        <li><i
                                                                class="fas fa-map-marker-alt"></i>{{ $job->location->name }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach()
                        </div>
                    </div>
                    <div class="tab" id="tab-2">
                        <div class="row clearfix">
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
                                                <ul class="info clearfix">
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


    <!-- chooseus-section -->
    <section class="chooseus-section bg-color-1">
        <div class="anim-icon">
            <div class="icon anim-icon-1 rotate-me"
                style="background-image: url({{ asset('assets') }}/images/icons/anim-icon-1.png);"></div>
            <div class="icon anim-icon-2 rotate-me"
                style="background-image: url({{ asset('assets') }}/images/icons/anim-icon-2.png);"></div>
            <div class="icon anim-icon-3 rotate-me"
                style="background-image: url({{ asset('assets') }}/images/icons/anim-icon-2.png);"></div>
            <div class="icon anim-icon-4 rotate-me"
                style="background-image: url({{ asset('assets') }}/images/icons/anim-icon-1.png);"></div>
            <div class="icon anim-icon-5 rotate-me"
                style="background-image: url({{ asset('assets') }}/images/icons/anim-icon-2.png);"></div>
        </div>
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url({{ asset('assets') }}/images/shape/shape-4.png);"></div>
            <div class="pattern-2" style="background-image: url({{ asset('assets') }}/images/shape/shape-11.png);"></div>
            <div class="pattern-3" style="background-image: url({{ asset('assets') }}/images/shape/shape-11.png);"></div>
        </div>
        <figure class="image-layer"><img src="{{ asset('assets') }}/images/resource/chooseus-1.png" alt="">
        </figure>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-xl-6 col-lg-12 col-md-12 offset-xl-6 content-column">
                    <div class="content_block_2">
                        <div class="content-box">
                            <div class="sec-title light">
                                <span>Testimonials</span>
                                <h2>Why Choose Classiera</h2>
                            </div>
                            <div class="inner-box">
                                <div class="single-item">
                                    <div class="icon-box"><i class="icon-26"></i></div>
                                    <h3>Sell Your Product Safely</h3>
                                    <p>Lorem ipsum dolor sit amet consectur adipisicing sed do eiusmod tempor.</p>
                                </div>
                                <div class="single-item">
                                    <div class="icon-box"><i class="icon-27"></i></div>
                                    <h3>Meet seller at a safe location</h3>
                                    <p>Lorem ipsum dolor sit amet consectur adipisicing sed do eiusmod tempor.</p>
                                </div>
                                <div class="single-item">
                                    <div class="icon-box"><i class="icon-28"></i></div>
                                    <h3>Pay only after collecting item</h3>
                                    <p>Lorem ipsum dolor sit amet consectur adipisicing sed do eiusmod tempor.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- chooseus-section end -->

    <!-- download-section -->
    <section class="download-section">
        <div class="pattern-layer" style="background-image: url({{ asset('assets') }}/images/shape/shape-8.png);"></div>
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                    <div class="image-box">
                        <figure class="image image-1"><img src="{{ asset('assets') }}/images/resource/laptop-1.png"
                                alt="">
                        </figure>
                        <figure class="image image-2 rotate-me"><img
                                src="{{ asset('assets') }}/images/resource/ball-1.png" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                    <div class="content_block_1">
                        <div class="content-box">
                            <span class="upper-text">Download</span>
                            <h2>Download Our Android and IOS App for Experience</h2>
                            <div class="download-btn">
                                <a href="" class="app-store">
                                    <i class="icon-23"></i>
                                    <span>Download on</span>
                                    <h4>App Store</h4>
                                </a>
                                <a href="" class="play-store">
                                    <i class="icon-24"></i>
                                    <span>Get It On</span>
                                    <h4>Google Play</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- download-section end -->


    <!-- news-section -->
    <section class="news-section sec-pad">
        <div class="auto-container">
            <div class="sec-title centred">
                <span>News & Article</span>
                <h2>Stay Update with Docpro</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{ asset('assets') }}/images/news/news-1.jpg" alt="">
                                <a href="blog-details.html"><i class="fas fa-link"></i></a>
                            </figure>
                            <div class="lower-content">
                                <figure class="admin-thumb"><img src="{{ asset('assets') }}/images/news/admin-1.png"
                                        alt="">
                                </figure>
                                <span class="category">Electronics</span>
                                <h3><a href="blog-details.html">Including animation in your design system</a></h3>
                                <p>Lorem ipsum dolor sit amet consectur adipisicing sed do eiusmod tempor incididunt
                                    labore.</p>
                                <span class="post-info">By <a href="blog-details.html">Eva Green</a> - October
                                    13, 2020</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInDown animated animated" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{ asset('assets') }}/images/news/news-2.jpg" alt="">
                                <a href="blog-details.html"><i class="fas fa-link"></i></a>
                            </figure>
                            <div class="lower-content">
                                <figure class="admin-thumb"><img src="{{ asset('assets') }}/images/news/admin-2.png"
                                        alt="">
                                </figure>
                                <span class="category">Electronics</span>
                                <h3><a href="blog-details.html">A digital prescription for the industry.</a></h3>
                                <p>Lorem ipsum dolor sit amet consectur adipisicing sed do eiusmod tempor incididunt
                                    labore.</p>
                                <span class="post-info">By <a href="blog-details.html">Eva Green</a> - October
                                    13, 2020</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{ asset('assets') }}/images/news/news-3.jpg" alt="">
                                <a href="blog-details.html"><i class="fas fa-link"></i></a>
                            </figure>
                            <div class="lower-content">
                                <figure class="admin-thumb"><img src="{{ asset('assets') }}/images/news/admin-3.png"
                                        alt="">
                                </figure>
                                <span class="category">Electronics</span>
                                <h3><a href="blog-details.html">Strategic & commercial approach with issues.</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet consectur adipisicing sed do eiusmod tempor incididunt
                                    labore.</p>
                                <span class="post-info">By <a href="blog-details.html">Eva Green</a> - October
                                    13, 2020</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- news-section end -->


    <!-- subscribe-section -->
    <section class="subscribe-section">
        <div class="pattern-layer" style="background-image: url({{ asset('assets') }}/images/shape/shape-9.png);">
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                    <div class="text">
                        <div class="icon-box"><i class="icon-25"></i></div>
                        <h2>Subscribe to Newsletter</h2>
                        <p>and receive new ads in inbox</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 form-column">
                    <form action="contact.html" method="post" class="subscribe-form">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Inout your email address" required="">
                            <button type="submit" class="theme-btn-one">Subscribe Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe-section end -->
@endsection
