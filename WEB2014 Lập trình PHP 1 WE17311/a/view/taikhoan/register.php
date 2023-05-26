
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
                            <h2 class="page-title">Registration</h2>
                            <ul class="page-switcher d-flex ">
                                <li><a href="index.html">Home</a> <i class="flaticon-arrow-pointing-to-right"></i></li>
                                <li>Registration</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="register-wrapper ml-110 mt-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="register-switcher text-center">
                        <a href="index.php?act=dangky" class="resister-btn active">Account</a>
                        <a href="index.php?act=login" class="login-btn">Login</a>
                    </div>
                </div>
            </div>
            <div class="row mt-100 justify-content-center">
                <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-10">
                    <div class="reg-login-forms">
                        <h4 class="reg-login-title text-center">
                            Register Your Account
                        </h4>
                        <form action="index.php?act=dangky" method="POST" id="register-form">
                            <div class="reg-input-group">
                                <label for="fullname">Full Name*</label>
                                <input type="text" name="full_name" id="fullname" placeholder="Full name" required>
                            </div>
                            <div class="reg-input-group">
                                <label for="username">UserName*</label>
                                <input type="text" name="username" id="fullname" placeholder="Username" required>
                            </div>
                            <div class="reg-input-group">
                                <label for="email">Email *</label>
                                <input type="email" name="email" id="email" placeholder="Your email" required>
                            </div>
                            <div class="reg-input-group">
                                <label for="password">Password *</label>
                                <input type="password" name="password" id="password" placeholder="Enter a password" required>
                            </div>
                            <div class="reg-input-group">
                                <label for="address">Address *</label>
                                <input type="text" name="address" id="address" placeholder="Your address" required>
                            </div>
                            <div class="reg-input-group">
                                <label for="phone">Phone *</label>
                                <input type="text" name="phone" id="phone" placeholder="Your phone" required>
                            </div>
                            <!-- <div class="reg-input-group">
                                <label for="sure-pass">Confirm Password *</label>
                                <input type="password" name="repassword" id="sure-pass" placeholder="Confirm password" required>
                            </div> -->
                            <div class="reg-input-group reg-check-input d-flex align-items-center">
                                <input type="checkbox" id="form-check" required>
                                <label for="form-check">I agree to the <a href="#">Terms & Policy</a></label>
                            </div>
                            <div class="reg-input-group reg-submit-input d-flex align-items-center">
                                <input type="submit" name="dangky" id="submite-btn" value="CREATE AN ACCOUNT">
                            </div>
                            <div class="reg-input-group reg-submit-input d-flex align-items-center">
                                <?php 
                                    if(isset($thongbao)&&($thongbao)!=""){
                                        echo $thongbao ; } ?>
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