@extends('layouts.app')

@section('content')
    <!-- banner-section -->
    <section class="banner-section style-two centred"
        style="background-image: url({{ asset('assets') }}/images/banner/banner-2.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="text">
                    <h1>Buy, Sell, Rent & Exchange <br />in one Click</h1>
                    <p>Amet consectetur adipisicing elit sed do eiusmod.</p>
                </div>
                <div class="form-inner">
                    <ul class="clearfix radio-select-box">
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
                        <div class="clearfix input-inner">
                            <div class="form-group">
                                <i class="icon-2"></i>
                                <input type="search" name="name" placeholder="Cari Loker..." required="">
                            </div>
                            <div class="form-group">
                                <i class="icon-3"></i>
                                <select class="wide">
                                    {{-- <option data-display="Select Location">Lokasi</option>
                              @foreach ($locations as $location)
                                  <option value="1">{{ $location->name }}</option>
                              @endforeach --}}
                                </select>
                            </div>
                            <div class="form-group">
                                <i class="icon-4"></i>
                                <select class="wide">
                                    <option data-display="Select Category">Kategori</option>
                                    {{-- @foreach ($categories as $category)
                                  <option value="1">{{ $category->name }}</option>
                              @endforeach --}}
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
