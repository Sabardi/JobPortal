@extends('layouts.app')

@section('content')

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
                                                    <h4><a class="text-decoration-none"
                                                            href="{{ route('job.show', $job) }}">{{ $job->title }}</a>
                                                    </h4>

                                                    <ul class="clearfix info">
                                                        <li>
                                                            <i
                                                                class="far fa-clock"></i>{{ $job->created_at->diffForHumans() }}
                                                        </li>
                                                        <li><i class="fas fa-map-marker-alt"></i>{{ $job->location->name }}
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
