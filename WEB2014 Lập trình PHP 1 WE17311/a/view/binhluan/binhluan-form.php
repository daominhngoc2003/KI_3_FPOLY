<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
$idsp = $_REQUEST['idsp'];
$dsbl = loadall_binhluan($idsp);
?>

<!doctype html>
<html lang="en">
<!-- Mirrored from demo-egenslab.b-cdn.net/html/eg-shop-fashion/v1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Nov 2022 11:42:06 GMT -->

<head>
    <title>EG Shop Fashion - Multipurpose e-Commerce HTML Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./src/assets/images/favicon.png" type="image/png" sizes="20x20">
    <link rel="stylesheet" href="./src/assets/css/swiper.css">
    <link rel="stylesheet" href="./src/assets/font/flaticon.css">
    <link rel="stylesheet" href="./src/assets/css/bootstrap-icons.css">
    <link rel="stylesheet" href="./src/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./src/assets/css/global.css">
    <link rel="stylesheet" href="./src/assets/css/style.css">
    <link rel="stylesheet" href="./src/assets/css/responsive.css">
    <link rel="stylesheet" href="../src/css/dropright.css">
</head>

<!-- PHẦN HIỂN THỊ DANH SÁCH BÌNH LUẬN -->

<div class="row">
    <div class="col-lg-12">

            <?php
            foreach ($dsbl as $bl) {
                extract($bl);
                ?>
                <div class="client-review-card">
                    <div class="review-card-head">
                        <div class="client-img">
                            <img src="" alt="">
                        </div>
                        <div class="client-info">
                            <h5 class="client-name"><?= $full_name ?> <span class="review-date">- <?= $ngaybinhluan ?></span> </h5>
                            <ul class="review-rating d-flex">
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <p class="review-text">
                       <?=  $content ?>
                    </p>
                    <ul class="review-actions d-flex align-items-center">
                        <li><a href="#"><i class="flaticon-like"></i></a></li>
                        <li><a href="#"><i class="flaticon-heart"></i></a></li>
                        <li><a href="#">Reply</a></li>
                    </ul>
                </div>


            <?php }?>
    </div>

    <div class="review-form-wrap">
        <h5>Phần bình luận</h5>
        <h3>Chào bạn</h3>
        <p>Bạn cho chúng tôi xin đánh giá về sản phẩm bên chúng tôi</p>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" class="review-form">
            <div class="row">
                <!-- PHẦN ĐIỀN HỌ VÀ TÊN -->
                <div class="col-lg-12">
                    <div class="review-input-group">
                        <label for="lname">Họ và tên</label>
                        <input type="text" name="full_name" id="lname" placeholder="Họ và tên">
                    </div>
                </div>
                <!-- PHẦN NHẬP NỘI DUNG BÌNH LUẬN -->
                <div class="col-lg-12">
                    <div class="review-input-group">
                        <textarea id="review-area" name="content" cols="30" rows="7" placeholder="Comment"></textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="review-rating">
                        <p>Your Rating</p>
                        <ul class="d-flex">
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                        </ul>
                    </div>
                    <!-- PHẦN THỰC HIỆN CHỨC NĂNG SUBMIT -->
                    <div class="submit-btn">
                        <input type="hidden" name="idsp" value="<?= $idsp ?>">
                        <input type="submit" name="guibinhluan" value="Gửi bình luận">
                    </div>
                </div>
            </div>
        </form>
        <?php
            if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
                $idsp = $_POST['idsp'];
                $iduser = $_SESSION['username']['id'];
                $full_name = $_POST['full_name'];
                $username = $_SESSION['username']['username'];
                $content = $_POST['content'];
                $ngaybinhluan = date("h:i:sa d/m/Y");
                insert_binhluan($username, $full_name, $content, $iduser, $idsp, $ngaybinhluan);
                header("location: " . $_SERVER['HTTP_REFERER']);
            }
        ?>


    </div>
</div>

<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="./src/assets/js/jquery-3.6.0.min.js"></script>
<script src="./src/assets/js/bootstrap.min.js"></script>
<script src="./src/assets/js/popper.min.js"></script>
<script src="./src/assets/js/swiper.js"></script>
<script src="./src/assets/js/jquery-ui.min.js"></script>
<script src="./src/assets/js/jquery.fancybox.min.js"></script>

<script src="./src/assets/js/main.js"></script>
</body>

<!-- Mirrored from demo-egenslab.b-cdn.net/html/eg-shop-fashion/v1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Nov 2022 11:42:27 GMT -->

</html>