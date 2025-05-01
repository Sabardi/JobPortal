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
@endsection
