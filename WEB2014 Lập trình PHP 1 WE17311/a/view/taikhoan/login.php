<div class="breadcrumb-area ml-110">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-bg d-flex justify-content-center align-items-center">
                    <div class="breadcrumb-shape1 position-absolute top-0 end-0">
                        <img src="assets/images/shapes/bs-right.png" alt="">
                    </div>
                    <div class="breadcrumb-shape2 position-absolute bottom-0 start-0">
                        <img src="assets/images/shapes/bs-left.png" alt="">
                    </div>
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Account</h2>
                        <ul class="page-switcher d-flex ">
                            <li><a href="../../index.php">Home</a> <i class="flaticon-arrow-pointing-to-right"></i></li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="register-wrapper ml-110 mt-100">
    <div class="container">
        <?php if(isset($thongbao)&&($thongbao)>0)
        {echo $thongbao;} ?>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="register-switcher text-center">
                    <a href="index.php?act=dangky" class="resister-btn">Account</a>
                    <a href="index.php?act=login" class="login-btn active">Login</a>
                </div>
            </div>
        </div>
        <div class="row mt-100 justify-content-center">
            <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-10">
                <div class="reg-login-forms">
                    <h4 class="reg-login-title text-center">
                        Login Your Account
                    </h4>
                    <form action="index.php?act=login" method="POST" id="login-form">
                        <div class="reg-input-group">
                            <label for="fname">User Name *</label>
                            <input type="text" name="username" id="fname" placeholder="Your first name" required>
                        </div>
                        <div class="reg-input-group">
                            <label for="password">Password *</label>
                            <input type="password" name="password" id="password" placeholder="Enter your password" required>
                        </div>
                        <div class="password-recover-group d-flex justify-content-between">
                            <div class="reg-input-group reg-check-input d-flex align-items-center">
                                <input type="checkbox" id="form-check" required>
                                <label for="form-check">Remember Me</label>
                            </div>
                            <div class="forgot-password-link">
                                <a href="index.php?act=quenmk">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="reg-input-group reg-submit-input d-flex align-items-center">
                            <input type="submit" name="login" id="submite-btn" value="LOG IN">
                        </div>
                    </form>
                    <div class="reg-social-login">
                        <h5>or login WITH</h5>
                        <ul class="social-login-options">
                            <li><a href="#" class="facebook-login"><i class="flaticon-facebook-app-symbol"></i> Sign
                                    up whit facebook</a></li>
                            <li><a href="#" class="google-login"><i class="flaticon-pinterest-1"></i> Signup whit
                                    google</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="newslatter-area ml-110 mt-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="newslatter-wrap text-center">
                    <h5>Connect To EG</h5>
                    <h2 class="newslatter-title">Join Our Newsletter</h2>
                    <p>Hey you, sign up it only, Get this limited-edition T-shirt Free!</p>
                    <form action="#" method="POST">
                        <div class="newslatter-form">
                            <input type="text" placeholder="Type Your Email">
                            <button type="submit">Send <i class="bi bi-envelope-fill"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>