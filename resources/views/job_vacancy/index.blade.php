@extends('layouts.app')

@section('content')
    <!-- news-section -->
    <section class="news-section sec-pad-2">
        <div class="auto-container">
            <div class="clearfix row">
                @forelse ($jobVacancies as $jobVacancy)
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="assets/images/news/news-1.jpg" alt="">
                                    <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                </figure>
                                <div class="lower-content">
                                    <figure class="admin-thumb"><img src="assets/images/news/admin-1.png" alt="">
                                    </figure>
                                    <span class="category">{{ $jobVacancy->job_type }}</span>
                                    <h3><a href="blog-details.html">{{ $jobVacancy->title }}</a></h3>
                                    <p>{{ $jobVacancy->description }}</p>
                                    <span class="post-info">By <a
                                            href="blog-details.html">{{ $jobVacancy->company->company_name }}</a>
                                        {{ $jobVacancy->created_at }}</span>
                                    <a href="{{ route('job.edit', $jobVacancy->id) }}">edit</a>
                                    <form action="{{ route('job.destroy', $jobVacancy->id) }}" method="post">
                                        @csrf
                                        @method('delete')

                                        <button type="submit"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus lowongan ini?')">Hapus</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                @empty
                    <p>Tidak ada lowongan ditemukan</p>
                    silahkan <a href="{{ route('job.create') }}">buat lowongan baru</a>
                @endforelse
            </div>
        </div>
    </section>
    <!-- news-section end -->
@endsection
