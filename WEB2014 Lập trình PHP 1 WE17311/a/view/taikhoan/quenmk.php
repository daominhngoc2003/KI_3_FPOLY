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
                        <h2 class="page-title">Welcome to Shop</h2>
                        <ul class="page-switcher d-flex ">
                            <li><a href="index.html">Trang chủ</a> <i class="flaticon-arrow-pointing-to-right"></i></li>
                            <li>My Account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .ml-300 {
        margin-left: 400px;
    }
</style>
<div class="dashbord-wrapper  ml-300 mt-100">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-xl-8 col-lg-8">
                <div class="register-wrapper ml-110 ">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="">
                                <div class="reg-login-forms">
                                    <h4 class="reg-login-title text-center">
                                        Quên mật khẩu
                                    </h4>
                                    <form action="index.php?act=quenmk" method="POST" id="login-form">
                                        <div class="reg-input-group">
                                            <label for="email">Email</label>
                                            <input type="text" name="email" id="email" placeholder="Mời bạn điền email đã đăng ký với tài khoản này trước đó" required>
                                        </div>
                                        <div class="reg-input-group reg-submit-input d-flex align-items-center">
                                            <input type="submit" name="btnsubmit" id="submite-btn" value="GỬI">
                                            <a href="index.php?act=quenmk"><input type="submit" name="btnsubmit" id="submite-btn" value="Nhập lại"></a>
                                        </div>
                                    </form>
                                    <h5>
                                        <?php
                                        if (isset($thongbao) && ($thongbao) != "") {
                                            echo $thongbao;
                                        } ?>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>