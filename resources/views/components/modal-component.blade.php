<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-fullscreen-sm-down  modal-dialog-centered">
        <div class="modal-content">
            <div class="card-body">
                <h3 class="modal-title text-center mb-4" id="loginModalLabel">Daftar</h3>
                <form>
                    <!-- Email Input -->
                    <div class="mb-3">
                        <label for="email" class="form-label fs-5">Email address</label>
                        <input type="email" class="form-control form-control-lg" id="email"
                            placeholder="Enter your email" required>
                    </div>
                    <!-- Password Input -->
                    <div class="mb-3">
                        <label for="password" class="form-label fs-5">Password</label>
                        <input type="password" class="form-control form-control-lg" id="password"
                            placeholder="Enter your password" required>
                    </div>
                    <!-- Remember Me and Forgot Password -->
                    <div class="mb-3 form-check d-flex justify-content-between align-items-center">
                        <div>
                            <input type="checkbox" class="form-check-input" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div>
                        <a href="#" class="text-decoration-none text-muted small">Forgot password?</a>
                    </div>
                    <!-- Login Button -->
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-dark btn-lg text-white">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets') }}/js/bootstrap.bundle.js"></script>
