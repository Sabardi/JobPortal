@extends('layouts.app')

@section('content')
    <!-- banner-section -->
    <section class="banner-section style-two centred" style="background-image: url({{ asset('assets') }}/images/banner.png);">
        <div class="auto-container">
        </div>
    </section>
    <!-- banner-section end -->


    <!-- category-section -->
    <section class="category-section alternat-2 centred sec-pad">
        <div class="pattern-layer" style="background-image: url({{ asset('assets') }}/images/shape/shape-10.png);"></div>
        <div class="auto-container">
            <div class="sec-title">
                <h2>Kategori Lowongan</h2>
            </div>

            @forelse ($categories as $category)
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
                        <h5>{{ $category->name }}</h5>
                        <span>{{ $category->jobVacancies()->count() }}</span>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
        </div>
    </section>
    <!-- category-section end -->

    {{-- <!-- category-section -->
    <section class="category-section alternat-2 centred sec-pad">
        <div class="pattern-layer" style="background-image: url({{ asset('assets') }}/images/shape/shape-10.png);"></div>
        <div class="auto-container">
            <div class="sec-title">
                <h2>Kategori Lowongan</h2>
            </div>
            <div class="category-block-one">
                <div class="inner-box">
                    <div class="shape">
                        <div class="shape-1" style="background-image: url({{ asset('assets') }}/images/shape/shape-1.png);">
                        </div>
                        <div class="shape-2" style="background-image: url({{ asset('assets') }}/images/shape/shape-2.png);">
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
                        <div class="shape-1" style="background-image: url({{ asset('assets') }}/images/shape/shape-1.png);">
                        </div>
                        <div class="shape-2" style="background-image: url({{ asset('assets') }}/images/shape/shape-2.png);">
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
                        <div class="shape-1" style="background-image: url({{ asset('assets') }}/images/shape/shape-1.png);">
                        </div>
                        <div class="shape-2" style="background-image: url({{ asset('assets') }}/images/shape/shape-2.png);">
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
                        <div class="shape-1" style="background-image: url({{ asset('assets') }}/images/shape/shape-1.png);">
                        </div>
                        <div class="shape-2" style="background-image: url({{ asset('assets') }}/images/shape/shape-2.png);">
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
    <!-- category-section end --> --}}
@endsection
