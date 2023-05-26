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
                        <h2 class="page-title">Cart</h2>
                        <ul class="page-switcher d-flex ">
                            <li><a href="../../index.php">Home</a> <i class="flaticon-arrow-pointing-to-right"></i></li>
                            <li>Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if(isset($_SESSION['username'])){ ?>
<div class="cart-area mt-100 ml-110">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-12 col-xl-12 col-md-12 col-sm-8">
                <table class="table cart-table">
                    
                    
                        <?php cart(1); ?>
                </table>
            </div>
        </div>
        <style>.ml-5{margin-left: 600px;}</style>
        <div class="col-xxl-10 col-lg-8 ml-5">
            <div class="cart-proceed-btns">
                <a href="index.php?act=bill" class="cart-proceed">Tiến hành đặt hàng</a>
                <a href="index.php?act=product" class="continue-shop">Continue to shopping</a>
            </div>
        </div>
    </div>
</div>
</div>
<?php }else 
    echo '<div class="breadcrumb-content mt-100 text-center">
    <h2 class="page-title">BẠN CẦN ĐĂNG NHẬP MỚI ĐƯỢC PHÉP ĐẶT HÀNG</h2>
    <a href="index.php?act=login">Đăng nhập</a> 
</div>';
?>
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