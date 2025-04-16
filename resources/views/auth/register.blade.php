@include('layouts.include.css')

<!-- signup-section -->
<section class="login-section signup-section bg-color-2">
    <div class="auto-container">
        <div class="inner-container">
            <div class="inner-box">
                <h2>Sign up</h2>

                <form action="{{ route('register') }}" method="post" class="signup-form">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input class="@error('name') is-invalid @enderror" type="text" name="name" required="">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="@error('email') is-invalid @enderror" type="email" name="email"
                            required="">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="@error('password') is-invalid @enderror" type="password" name="password" required
                            autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="password_confirmation" required autocomplete="new-password"
                            required="">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="has_company" id="has_company">
                            <label class="form-check-label" for="has_company">
                                I have a company
                            </label>
                        </div>
                    </div>
                    <div class="form-group message-btn">
                        <button type="submit" class="theme-btn-one">Sign up</button>
                    </div>
                </form>
                <div class="othre-text centred">
                    <p>Already have an account? <a href="{{ route('login') }}">Sign in</a></p>
                </div>
                <div class="other-content centred">
                    <div class="text"><span>or</span></div>

                    <ul class="social-links clearfix">
                        <li><a href="#"><i class="fab fa-facebook-f"></i>Login with Facebook</a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i>Login with Google Plus</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- signup-section end -->
