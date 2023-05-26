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
                        <h2 class="page-title">Checkout</h2>
                        <ul class="page-switcher d-flex ">
                            <li><a href="../../index.php">Home</a> <i class="flaticon-arrow-pointing-to-right"></i></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="checkout-area ml-110 mt-100">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-xl-8">
                <form class="billing-from" action="index.php?act=billconfirm" method="post">
                    <h5 class="checkout-title">
                        Chi tiết hóa đơn
                    </h5>
                    <div class="row">
                        <?php
                        if (isset($_SESSION['username'])) {
                            // var_dump($_SESSION['username']);die;
                            // extract($_SESSION['username']);
                            $full_name = $_SESSION['username']['full_name'];
                            $username = $_SESSION['username']['username'];
                            $address = $_SESSION['username']['address'];
                            $phone = $_SESSION['username']['phone'];
                            $email = $_SESSION['username']['email'];
                        } else {
                            $full_name = "";
                            $username = "";
                            $address = "";
                            $phone = "";
                            $email = "";
                        }
                        ?>

                        <div class="col-lg-12 col-md-6">
                            <div class="eg-input-group">
                                <label for="first-name1">Tên tài khoản</label>
                                <input type="text" id="first-name1" name="username" value="<?= $username ?>" placeholder="Tên tài khoản">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="eg-input-group">
                                <label for="first-name">Họ và tên người đặt</label>
                                <input type="text" id="first-name" name="full_name" value="<?= $full_name ?>" placeholder="Họ và tên người đặt">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="eg-input-group">
                                <label>Địa chỉ</label>
                                <input type="text" value="<?= $address ?>" name="address" placeholder="Địa chỉ của bạn">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="eg-input-group">
                                <label for="first-name">Số điện thoại</label>
                                <input type="text" value="<?= $phone ?>" name="phone" placeholder="Số điện thoại của bạn">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="eg-input-group">
                                <label for="first-name">Địa chỉ email người đặt</label>
                                <input type="text" value="<?= $email ?>" name="email" placeholder="Your Email Address">
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-md-12 col-sm-8">
                            <table class="table cart-table">


                                <?php cart(0); ?>
                            </table>
                        </div>
                        <div class="col-xxl-12 col-xl-12">
                            <div class="order-summary">
                                <div class="added-product-summary">
                                    <div class="payment-methods">
                                        <div class="form-check payment-check">
                                            <input class="form-check-input" type="radio" value="1" name="pttt" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Thanh toán khi nhận hàng
                                            </label>
                                            <p>Please send a check to Store Name, Store Street, Store Town, Store State /
                                                County, Store Postcode.</p>

                                        </div>
                                        <div class="form-check payment-check">
                                            <input class="form-check-input" type="radio" value="2" name="pttt" id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Thanh toán bằng chuyển khoản
                                            </label>
                                            <p>Pay with cash upon delivery.</p>
                                        </div>
                                        <div class="form-check payment-check paypal">
                                            <input class="form-check-input" type="radio" value="3" name="pttt" id="flexRadioDefault3" checked>
                                            <label class="form-check-label" for="flexRadioDefault3">
                                                Thanh toán online
                                            </label>
                                            <img src="./src/assets/images/payment/payment-cards.png" alt="">
                                            <a href="#" class="about-paypal">What is PayPal</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="place-order-btn">
                            <input type="submit" class="cart-proceed" name="dongydathang" value="Xác nhận đặt hàng"></input>
                        </div>
                    </div>
            </div>
        </div>
        </form>
    </div>

</div>
</div>
</div>