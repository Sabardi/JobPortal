@extends('layouts.app')

@section('content')
    <!-- banner-section -->
    <section class="banner-section style-two centred"
        style="background-image: url({{ asset('assets') }}/images/banner/banner-2.jpg);">
        <div class="auto-container">
            <div class="content-box">
                {{-- <div class="text">
                    <h1>Buat Lowongan Perusahaan</h1>
                </div> --}}
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

    <section class="login-section bg-color-1">
        <div class="auto-container">
            <div class="inner-container">
                <div class="inner-box">
                    <h2 class="text-center">edit lowongan Perusahaan</h2>
                    <form action="{{ route('job.update', $id->id) }}" method="POST" class="login-form"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT') <!-- Indicating this is a PUT request for update -->

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="form-group">
                            <label>Nama lowongan</label>
                            <input type="text" name="title" value="{{ old('title', $id->title) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="location_id">Lokasi</label>
                            <select class="form-control" name="location_id" id="location_id">
                                <option value="" class="form-control">Pilih lokasi</option>
                                @foreach ($locations as $location)
                                    <option value="{{ $location->id }}"
                                        {{ $id->location_id == $location->id ? 'selected' : '' }}>
                                        {{ $location->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Type Lowongan</label>
                            <div class="col d-flex flex-column">
                                <div>
                                    <input type="radio" name="job_type" value="full_time" id="full_time"
                                        {{ $id->job_type == 'full_time' ? 'checked' : '' }}> Full Time
                                </div>
                                <div>
                                    <input type="radio" name="job_type" value="part_time" id="part_time"
                                        {{ $id->job_type == 'part_time' ? 'checked' : '' }}> Part Time
                                </div>
                                <div>
                                    <input type="radio" name="job_type" value="internship" id="internship"
                                        {{ $id->job_type == 'internship' ? 'checked' : '' }}> Internship
                                </div>
                                <div>
                                    <input type="radio" name="job_type" value="remote" id="remote"
                                        {{ $id->job_type == 'remote' ? 'checked' : '' }}> Remote
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>kisaran gaji
                                <span style="color: red;">opsional (negotiable)</span>
                            </label>
                            <input type="text" name="salary_range"
                                value="{{ $id->salary_range == '-' ? 'negotiable' : $id->salary_range }}" readonly
                                id="">
                            <span>min :</span>
                            <input id="min" type="number" name="salary_min"
                                value="{{ old('salary_min', $id->salary_min) }}" placeholder="cth: 5000000">
                            <span>max :</span>
                            <input id="max" type="number" name="salary_max"
                                value="{{ old('salary_max', $id->salary_max) }}" placeholder="cth: 5000000">
                        </div>

                        <div class="form-group">
                            <label for="categories">Categories</label>
                            belom solved
                            <div class="form-group">
                                <label for="categories">Categories</label>
                                <div class="category-checkboxes">
                                    @foreach ($categories as $category)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="categories[]"
                                                value="{{ $category->id }}" id="category-{{ $category->id }}">
                                            <label class="form-check-label" for="category{{ $category->id }}">
                                                {{ $category->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                                @error('categories')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            @error('categories')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Deskripsi lowongan</label>
                            <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ old('description', $id->description) }}</textarea>
                        </div>

                        <div class="form-group message-btn">
                            <button type="submit" class="theme-btn-one">Perbarui</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection
