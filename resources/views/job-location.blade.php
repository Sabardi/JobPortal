@extends('layouts.app')

@section('content')
    <!-- feature-style-two -->
    <section class="feature-style-two four-column">
        <div class="auto-container">
            <div class="sec-title centred">
                <h2>Featured Jobs</h2>
            </div>
            <div class="clearfix row">
                @forelse ($jobs as $job)
                    <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInDown animated" data-wow-delay="00ms"
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

                                    <ul class="clearfix info">
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
