@extends('layouts.app')

@section('content')
    <div class="container p-4 mt-5 rounded shadow bg-light">
        <p class="h4 font-weight-bold text-dark">
            {{ $company->company_name }}
        </p>

        <p class="mt-3 text-secondary">
            <strong>Description:</strong><br>
            {{ $company->description }}
        </p>

        <form action="{{ route('company.update', $company) }}" method="post" class="mt-4" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="pl-3 mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <label class="font-weight-bold">Nama Perusahaan</label>
                <input type="text" name="company_name" value="{{ $company->company_name . old('company_name') }}"
                    required class="form-control">
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Deskripsi</label>
                <textarea name="description" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Nomor Telepon</label>
                <input type="text" name="phone_number" value="{{ $company->phone_number . old('phone_number') }}"
                    class="form-control">
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Website/Link</label>
                <input type="text" name="company_website" placeholder="https://"
                    value="{{ $company->company_website . old('company_website') }}" class="form-control">
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Industri</label>
                <input type="text" name="industry_type" value="{{ $company->industry_type . old('industry_type') }}"
                    class="form-control">
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Logo Perusahaan</label>
                @if (empty($company->company_logo))
                    <p class="text-danger">Logo Perusahaan Belum Ada</p>
                @else
                    <img src="{{ asset('storage/' . $company->company_logo) }}" alt="Logo Perusahaan"
                        class="mt-2 img-thumbnail" style="width: 100px;">
                @endif
                <input type="file" name="company_logo" value="{{ old('company_logo') }}" class="mt-2 form-control-file">
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Alamat Perusahaan</label>
                <input type="text" name="address" value="{{ $company->address . old('address') }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="current_password" class="font-weight-bold">Current Password</label>
                <input type="password" name="current_password" id="current_password" class="form-control">
            </div>

            <div class="form-group">
                <label for="new_password" class="font-weight-bold">New Password</label>
                <input type="password" name="new_password" id="new_password" class="form-control">
            </div>

            <div class="form-group">
                <label for="new_password_confirmation" class="font-weight-bold">Confirm New Password</label>
                <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control">
            </div>

            <div class="text-right form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>

        <form action="{{ route('logout') }}" method="POST" class="mt-3">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>

@endsection
