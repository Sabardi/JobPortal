@extends('layouts.app')

@section('content')
    <!-- Page Title -->
    {{-- <section class="page-title style-two">
        <div class="auto-container">

        </div>
    </section> --}}


    <section class="category-section sec-pad">
        <div class="auto-container">
            <div class="row justify-content-center">
                <div class="card-header">
                    <div class="col-12 col-md-12 col-lg-12">
                        @forelse ($jobs as $job)
                            <div class="shadow-sm card">
                                <div class="card-body">
                                    <div class=" d-flex flex-column flex-md-row text-md-start">
                                        <!-- Logo -->
                                        <img src="https://lokerntb.com/wp-content/uploads/2025/04/Lowongan-Kerja-di_Al-Wildan-Islamic-School-20-Mataram-150x150.webp"
                                            alt="Job Image" class="mb-3 img-fluid mb-md-0" style="width:10%; height: 10%;"
                                            class="me-md-3">

                                        <!-- Job Title -->
                                        <div class="flex-grow-1">
                                            <a href="{{ route('job.show', $job) }}" class="text-decoration-none">
                                                <h1 class="h4">{{ $job->title }} </h1>
                                            </a>
                                            <span class="text-muted small"> {{ $job->company->company_name }}</span>
                                            <br>
                                            <span class="text-muted small">
                                                <i class="far fa-clock"></i> {{ $job->created_at->diffForHumans() }}
                                            </span>
                                        </div>

                                        <!-- Salary Range -->
                                        <div class="">
                                            <h6 class="text-muted small">Gaji/bulan</h6>
                                            <span class="badge bg-primary"> {{ $job->salary_range }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        @empty
                            <p>Tidak ada lowongan kerja yang tersedia.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
