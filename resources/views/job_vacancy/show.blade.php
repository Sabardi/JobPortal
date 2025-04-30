@extends('layouts.app')

@section('content')
    <!-- Page Title -->
    <section class="page-title style-two" style="background-image: url({{ asset('assets') }}/images/banner/banner-2.jpg);">
        <div class="auto-container">

        </div>
    </section>
    <!-- End Page Title -->
    <section class="py-5 bg-light">
        <div class="auto-container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12 col-lg-12">
                    <!-- Job Details Card -->
                    <div class="shadow-sm card">
                        <div class="card-body">
                            <div class="mb-4 d-flex flex-column flex-md-row text-md-start">
                                <!-- Logo -->
                                <img src="https://lokerntb.com/wp-content/uploads/2025/04/Lowongan-Kerja-di_Al-Wildan-Islamic-School-20-Mataram-150x150.webp"
                                    alt="Job Image" class="mb-3 img-fluid mb-md-0" style="width:10%; height: 10%;"
                                    class="me-md-3">

                                <!-- Job Title -->
                                <div class="flex-grow-1">
                                    <h1 class="h4">{{ $jobVacancy->title }}</h1>
                                    <span class="text-muted small">{{ $jobVacancy->company->company_name }}
                                        <br>
                                        <i class="far fa-clock"></i> {{ $jobVacancy->created_at->diffForHumans() }}
                                    </span>
                                </div>

                                <!-- Salary Range -->
                                <div class="">
                                    <h6 class="text-muted small">Gaji/bulan</h6>
                                    <span class="badge bg-primary">{{ $jobVacancy->salary_range }}</span>
                                </div>
                            </div>

                            <div class="my-4" style="border-bottom: 1px solid #dee2e6;"></div>
                            <!-- Job Requirements -->
                            <h5 class="mb-3">Deskripsi:</h5>
                            <ul class="list-unstyled">
                                {{ $jobVacancy->description }}
                            </ul>

                            <!-- Important Notes -->
                            <div class="mt-4 alert alert-info">
                                <h5 class="mb-3">PERHATIAN!!</h5>
                                <ul class="list-unstyled">
                                    <li>1. Batas akhir pengiriman lowongan pada: 31 Jul 2025 23:59</li>
                                    <li>2. Al-Wildan Islamic School 20 Mataram tidak memungut biaya apapun</li>
                                    <li>3. Jika menemukan indikasi penipuan, silahkan laporkan ke admin kami, klik <a
                                            href="#">disini</a></li>
                                    <li>4. Sebelum mengirim lamaran, silahkan baca ke-dua hal ini, klik <a
                                            href="#">disini</a> dan klik <a href="#">disini</a></li>
                                </ul>
                            </div>

                            <!-- Apply Button -->
                            <div class="mt-4 text-center">
                                <a href="{{ route('job.apply.create', $jobVacancy) }}" class="btn btn-primary">Lamar
                                    Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


{{--
{{ $jobVacancy->title }}


lamar : <a href="{{ route('job.apply.create', $jobVacancy) }}">Apply Now</a> --}}

{{-- Add a link to the job application form --}}
