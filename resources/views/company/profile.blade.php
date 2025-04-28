<p>
    {{ $company->company_name }}
</p>

description: <br>
<p>
    {{ $company->description }}
</p>

<form action="{{ route('company.update', $company) }}" method="post" class="login-form" enctype="multipart/form-data">
    @csrf
    @method('PUT')

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
        <label>Nama Perusahaan</label>
        <input type="text" name="company_name" value="  {{ $company->company_name .old('company_name') }}" required="">
    </div>
    <div class="form-group">
        <label>Deskripsi</label>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label>Nomor Telepon</label>
        <input type="text" name="phone_number" value="{{ $company->phone_number .old('phone_number') }}">
    </div>
    <div class="form-group">
        <label>Website/Link</label>
        <input type="text" name="company_website" placeholder="https://" value="{{ $company->company_website. old('company_website') }}">
    </div>
    <div class="form-group">
        <label>Industri</label>
        <input type="text" name="industry_type" value="{{ $company->industry_type .old('industry_type') }}">
    </div>
    <div class="form-group">
        <label>Logo Perusahaan</label>
        @if (empty($company->company_logo))
            <p>Logo Perusahaan Belum Ada</p>
        @else
            <img src="{{ asset('storage/' . $company->company_logo) }}" alt="Logo Perusahaan" style="width: 100px; height: auto;">
        @endif
        <input type="file" name="company_logo" value="{{ old('company_logo') }}">
    </div>
    <div class="form-group">
        <label>Alamat Perusahaan</label>
        <input type="text" name="address" value="{{ $company->address .old('address') }}">
    </div>


<div class="form-group">
    <label for="current_password">Current Password</label>
    <input type="password" name="current_password" id="current_password" class="form-control">
</div>

<div class="form-group">
    <label for="new_password">New Password</label>
    <input type="password" name="new_password" id="new_password" class="form-control">
</div>

<div class="form-group">
    <label for="new_password_confirmation">Confirm New Password</label>
    <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control">
</div>

    <div class="form-group message-btn">
        <button type="submit" class="theme-btn-one">Daftar</button>
    </div>
</form>



<form action="{{ route('logout') }}" method="POST" class="logout-form">
    @csrf
    <button type="submit" class="theme-btn-one">Logout</button>
</form>
