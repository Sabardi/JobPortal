@include('layouts.include.css')
@include('layouts.include.header')
@include('layouts.include.mobileMenu')


<section class="login-section bg-color-1">
    <div class="auto-container">
        <div class="inner-container">
            <div class="inner-box">
                <h2 class="text-center">Form Pendaftaran Perusahaan</h2>
                <form action="{{ route('company.store') }}" method="post" class="login-form" enctype="multipart/form-data">
                    @csrf

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
                        <input type="text" name="company_name" value="{{ old('company_name') }}" required="">
                    </div>
                    <div class="form-group">
                        <label>Nomor Telepon</label>
                        <input type="text" name="phone_number" value="{{ old('phone_number') }}">
                    </div>
                    <div class="form-group">
                        <label>Website/Link</label>
                        <input type="text" name="company_website" placeholder="https://" value="{{ old('company_website') }}">
                    </div>
                    <div class="form-group">
                        <label>Industri</label>
                        <input type="text" name="industry_type" value="{{ old('industry_type') }}">
                    </div>
                    <div class="form-group">
                        <label>Logo Perusahaan</label>
                        <input type="file" name="company_logo">
                    </div>
                    <div class="form-group">
                        <label>Alamat Perusahaan</label>
                        <input type="text" name="address" value="{{ old('address') }}">
                    </div>

                    <div class="form-group message-btn">
                        <button type="submit" class="theme-btn-one">Daftar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- login-section end -->

@include('layouts.include.footer')
