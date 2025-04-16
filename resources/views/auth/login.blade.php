@include('layouts.include.css')

<!-- login-section -->
<section class="login-section bg-color-2">
    <div class="auto-container">
        <div class="inner-container">
            <div class="inner-box">
                <h2>Log in</h2>
                <form action="{{ route('login') }}" method="post" class="login-form">
                    @csrf
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" required="">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" required="">
                    </div>
                    <div class="form-group">
                        <div class="text"><a href="login.html">Forget Password?</a></div>
                    </div>
                    <div class="form-group message-btn">
                        <button type="submit" class="theme-btn-one">Login Now</button>
                    </div>
                </form>
                <div class="other-content centred">
                    <div class="text"><span>or</span></div>
                    <ul class="social-links clearfix">
                        <li><a href="login.html"><i class="fab fa-facebook-f"></i>Login with Facebook</a></li>
                        <li><a href="login.html"><i class="fab fa-google-plus-g"></i>Login with Google Plus</a></li>
                    </ul>
                    <div class="othre-text">
                        <p>Don’t have an account? <a href="signup.html">Register Now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
