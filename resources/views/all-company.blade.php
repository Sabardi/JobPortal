@extends('layouts.app')

@section('content')
    <!-- Page Title -->
    <section class="page-title style-two" style="background-image: url({{ asset('assets') }}/images/banner/banner-2.jpg);">
        <div class="auto-container">

        </div>
    </section>


    <section class="py-5 bg-light">
        <div class="auto-container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12 col-lg-12">
                    @forelse ($companies as $company)
                        <div class="shadow-sm card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <!-- Logo -->
                                    <img src="https://lokerntb.com/wp-content/uploads/2025/04/Lowongan-Kerja-di_Al-Wildan-Islamic-School-20-Mataram-150x150.webp"
                                        alt="company Image" class="img-fluid" style="width: 10%; height: 10%;">

                                    <!-- Company Info -->
                                    <div class="flex-grow-1 ms-3">
                                        <a href="" class="text-decoration-none">
                                            <h4 class="h5">{{ $company->company_name }}</h4>
                                        </a>
                                        <span class="text-muted small">
                                            <i class="far fa-clock"></i> Bergabung
                                            {{ $company->created_at->diffForHumans() }}
                                        </span>
                                    </div>

                                    <!-- Salary Range / Lowongan -->
                                    <div class="ms-3 text-end">
                                        <h6 class="text-muted small">Lowongan</h6>
                                        <span class="badge bg-primary">{{ $company->count() }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    @empty
                        <p>Tidak ada company.</p>
                    @endforelse
                </div>
            </div>

        </div>
    </section>
@endsection
