<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-fullscreen-sm-down  modal-dialog-centered">
        <div class="modal-content">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title">Daftar sebagai Pencari</h5>
                                <p class="card-text">Bergabunglah sebagai pencari kerja untuk menemukan pekerjaan impian
                                    Anda.</p>
                                <a href="{{ route('register') }}" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title">Daftar sebagai Perusahaan</h5>
                                <p class="card-text">Daftarkan perusahaan Anda untuk menemukan kandidat terbaik.</p>
                                <a href="{{ route('register.company') }}" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="{{ asset('assets') }}/js/bootstrap.bundle.js"></script>

