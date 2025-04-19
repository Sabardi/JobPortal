@extends('layouts.app')

@section('content')
    <!-- banner-section -->
    <section class="banner-section style-two centred"
        style="background-image: url({{ asset('assets') }}/images/banner/banner-2.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="text">
                    <h1>Lowongan wilayah {{ $name }}</h1>
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

    <!-- feature-style-two -->
    <section class="feature-style-two four-column">
        <div class="auto-container">
            <div class="sec-title centred">
                <h2>Featured Jobs</h2>
            </div>
            <div class="row clearfix">
                @forelse ($jobs as $job)
                    <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInDown animated animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('assets') }}/images/resource/feature-7.jpg"
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
                                        <li><i class="far fa-clock"></i>{{ $job->created_at->diffForHumans() }}
                                        </li>
                                        <li><i class="fas fa-map-marker-alt"></i>{{ $job->location->name }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>Tidak ada lowongan ditemukan</p>
                @endforelse

            </div>
        </div>
    </section>
    <!-- feature-style-two end -->
@endsection
