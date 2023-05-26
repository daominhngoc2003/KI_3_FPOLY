<div class="breadcrumb-area ml-110">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-bg d-flex justify-content-center align-items-center">
                    <div class="breadcrumb-shape1 position-absolute top-0 end-0">
                        <img src="./src/assets/images/shapes/bs-right.png" alt="">
                    </div>
                    <div class="breadcrumb-shape2 position-absolute bottom-0 start-0">
                        <img src="./src/assets/images/shapes/bs-left.png" alt="">
                    </div>
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">My Account</h2>
                        <ul class="page-switcher d-flex ">
                            <li><a href="index.html">Home</a> <i class="flaticon-arrow-pointing-to-right"></i></li>
                            <li>My Account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="dashbord-wrapper ml-110 mt-100">
    <div class="container">
        <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12">
                <div class="dashbord-switcher">
                <a href="login.php"><i class="flaticon-user"></i>Đăng nhập</a>
                    <a href="index.php?act=frmdangky" class="active"><i class="flaticon-user"></i>Đăng ký</a>
                    <a href="index.php?act=quenmk"><i class="flaticon-user"></i> Quên mật khẩu</a>
                    <a href="index.php?act=updatemk"><i class="flaticon-user"></i> Cập nhật tài khoản</a>
                    <a href="index.php?act=dangnhapadmin"><i class="flaticon-user"></i> Đăng nhập admin</a>
                    <a href="index.php?act=logout"><i class="flaticon-logout"></i> Logout</a>
                </div>
            </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8">
                <div class="register-wrapper ml-110 mt-100">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="">
                                <div class="reg-login-forms">
                                    <h4 class="reg-login-title text-center">
                                        Đăng ký
                                    </h4>
                                    <form action="#" method="POST" id="register-form">
                                        <div class="reg-input-group">
                                            <label for="fname">First Name*</label>
                                            <input type="text" id="fname" placeholder="Your first name" required>
                                        </div>
                                        <div class="reg-input-group">
                                            <label for="lname">Last Name*</label>
                                            <input type="text" id="lname" placeholder="Your last name" required>
                                        </div>
                                        <div class="reg-input-group">
                                            <label for="email">Email *</label>
                                            <input type="email" id="email" placeholder="Your email" required>
                                        </div>
                                        <div class="reg-input-group">
                                            <label for="password">Password *</label>
                                            <input type="password" id="password" placeholder="Enter a password" required>
                                        </div>
                                        <div class="reg-input-group">
                                            <label for="sure-pass">Confirm Password *</label>
                                            <input type="password" id="sure-pass" placeholder="Confirm password" required>
                                        </div>
                                        <div class="reg-input-group reg-check-input d-flex align-items-center">
                                            <input type="checkbox" id="form-check" required>
                                            <label for="form-check">I agree to the <a href="#">Terms & Policy</a></label>
                                        </div>
                                        <div class="reg-input-group reg-submit-input d-flex align-items-center">
                                            <input type="submit" id="submite-btn" value="CREATE AN ACCOUNT">
                                        </div>
                                    </form>
                                    <div class="reg-social-login">
                                        <h5>or Signup WITH</h5>
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
            </div>
        </div>
    </div>
</div>