@extends('layouts.app')

@section('content')
    <!-- Page Title -->
    <section class="page-title style-two" style="background-image: url({{ asset('assets') }}/images/banner/banner-2.jpg);">
        <div class="auto-container">

        </div>
    </section>
    <!-- End Page Title -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <!-- Job Application Form Card -->
                    <div class="shadow-sm card">
                        <div class="card-body">
                            <h4 class="mb-4 text-center card-title">Apply for Job</h4>

                            <!-- Form -->
                            <form action="{{ route('job.apply.store', $jobVacancy) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf

                                <!-- Cover Letter -->
                                <div class="mb-3">
                                    <label for="cover_letter" class="form-label">Cover Letter (PDF, DOCX)</label>
                                    <input type="file" class="form-control" name="cover_letter" id="cover_letter"
                                        accept=".pdf,.docx" required>
                                </div>

                                <!-- CV Link -->
                                <div class="mb-3">
                                    <label for="cv_link" class="form-label">CV Link (URL)</label>
                                    <input type="url" class="form-control" name="cv_link" id="cv_link"
                                        placeholder="Enter your CV link" required>
                                </div>

                                <!-- Submit Button -->
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary w-100">Apply Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Display job details --}}
@endsection
