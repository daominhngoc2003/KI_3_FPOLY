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
<?php
if (isset($bill) && is_array($bill)) {
    extract($bill);
}
?>
<div class="checkout-area ml-110 mt-100">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-xl-8">
                <h5 class="checkout-title billing-from">ĐÃ ĐẶT ĐƯỢC HÀNG. CẢM ƠN BẠN ĐÃ MUA HÀNG BÊN SHIRT FS</h5>
                <h5 class="checkout-title billing-from">Trạng thái đơn hàng <?php if ($bill['status'] == 0) {
                                                                                    echo "Đơn hàng mới";
                                                                                } elseif ($bill['status'] == 1) {
                                                                                    echo "Đang xử lý";
                                                                                } elseif ($bill['status'] == 2) {
                                                                                    echo "Đang giao hàng";
                                                                                } else {
                                                                                    echo "Giao hàng thành công";
                                                                                }
                                                                                ?></h5>
            </div>
            <div class="col-xxl-12 col-xl-8">
                <form class="billing-from">
                    <h5 class="checkout-title">
                        THÔNG TIN ĐƠN HÀNG
                    </h5>
                    <div class="row">
                        <li>Mã đơn hàng: DAM-<?= $bill['id'] ?></li> -<li>Ngày đặt hàng: <?= $bill['ngaydathang'] ?></li>-<li>Tổng đơn hàng: <?= $bill['tongdonhang'] ?></li>-<li>Phương thức thanh toán: <?= $bill['pttt'] ?></li>
                    </div>
                </form>
            </div>
            <div class="col-xxl-12 col-xl-8">
                <form class="billing-from" action="index.php?act=billconfirm">
                    <h5 class="checkout-title">
                        Thông tin đặt hàng
                    </h5>
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="eg-input-group">
                                <label for="first-name1">Tên tài khoản</label>
                                <input type="text" id="first-name1" value="<?= $bill['username'] ?>" placeholder="Tên tài khoản" disabled>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="eg-input-group">
                                <label for="first-name">Họ và tên người đặt</label>
                                <input type="text" id="first-name" value="<?= $bill['full_name'] ?>" placeholder="Họ và tên người đặt" disabled>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="eg-input-group">
                                <label>Địa chỉ</label>
                                <input type="text" value="<?= $bill['address'] ?>" placeholder="Địa chỉ của bạn" disabled>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="eg-input-group">
                                <label for="first-name">Số điện thoại</label>
                                <input type="text" value="<?= $bill['phone'] ?>" placeholder="Số điện thoại của bạn" disabled>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="eg-input-group">
                                <label for="first-name">Địa chỉ email người đặt</label>
                                <input type="text" value="<?= $bill['email'] ?>" placeholder="Your Email Address" disabled>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xxl-12 col-xl-8">
                <form class="billing-from">
                    <h5 class="checkout-title">
                        Phương thức thanh toán
                    </h5>
                    <div class="row"><input class="form-check-input" type="radio" disabled id="flexRadioDefault1">
                        <?php if ($pttt == 1) {
                            echo "Thanh toán khi nhận hàng";
                        } else if ($pttt == 2) {
                            echo "Thanh toán bằng chuyển khoản";
                        } else if ($pttt == 3) {
                            echo "Thanh toán online";
                        } else {
                            echo "Không tìm thấy phương thức thanh toán";
                        } ?>
                    </div>
                </form>
            </div>
            <div class="col-xxl-12 col-xl-8">
                <form class="billing-from">
                    <h5 class="checkout-title">
                        THÔNG TIN GIỎ HÀNG HÀNG
                    </h5>
                    <div class="row">
                        <table class="table cart-table">

                            <tbody>
                                <?php bill_chi_tiet($billct); ?>

                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>