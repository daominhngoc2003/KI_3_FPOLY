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
<?php
$count = count_cart();
?>

<body>
    <div class="main-sidebar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-1 col-1">
                    <div class="sidebar-wrap d-flex justify-content-between flex-column">
                        <div class="sidebar-top d-flex flex-column align-items-center">
                            <div class="category-icon">
                                <i class="flaticon-menu"></i>
                            </div>
                        </div>
                        <div class="sidebar-bottom">
                            <?php if (isset($_SESSION['username'])) { ?>
                                <ul class="sidebar-icons">
                                    <li><a href="#"><i class="flaticon-user"></i></a></li>
                                    <li><a href="index.php?act=product"><i class="flaticon-heart"></i></a></li>
                                    <li class="cart-icon">
                                        <i class="flaticon-shopping-cart"></i>
                                        <div class="cart-count"><span><?= $count ?></span></div>
                                    </li>
                                </ul>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobil-sidebar">
        <ul class="mobil-sidebar-icons">
            <li class="category-icon"><a href="#"><i class="flaticon-menu"></i></a></li>
            <?php if (isset($_SESSION['username'])) { ?>
                <li class="">
                    <a href="#"><i class="flaticon-user"></i></a>
                </li>
                }<?php } ?>
                <li><a href="#"><i class="flaticon-heart"></i></a></li>
                <li class="cart-icon">
                    <a href="index.php?act=cart"><i class="flaticon-shopping-cart"></i></a>
                    <div class="cart-count"><span><?= $count ?></span></div>
                </li>
        </ul>
    </div>
    <!-- <div class="category-wrapper">
        <div class="category-bar">
            <h5 class="cb-title text-uppercase category-icon">
                Tài khoản
                <i class="flaticon-arrow-pointing-to-left"></i>
            </h5>
            ạdja
        </div>
    </div> -->


    <div class="cart-sidebar-wrappper">
        <div class="main-cart-sidebar">
            <div class="cart-top">
                <div class="cart-close-icon">
                    <i class="flaticon-letter-x"></i>
                </div>
                <?php global $img_path;
                $tong = 0;
                $i = 0; ?>
                <?php foreach ($_SESSION['mycart'] as $cart) {
                    $hinh = $img_path . $cart[1];
                    $thanhtien = $cart[3] * $cart[5];
                    $tong += $thanhtien;
                    $sanphamct = "index.php?act=sanphamct&idsp=" . $cart[0];
                    $xoasp = '<a class="delete-icon" href="index.php?act=delcart&idcart=' . $i . '"><input type="submit" name="xoa" value="X"></a>';
                    echo '<ul class="cart-product-grid">
                    <li class="single-cart-product">
                        <div class="cart-product-info d-flex align-items-center">
                            <div class="product-img"><img src="' . $hinh . '" alt="" class="img-fluid"></div>
                            <div class="product-info">
                                <a href="product-details.html">
                                    <h5 class="product-title">' . $cart[2] . '</h5>
                                </a>
                                <ul class="product-rating d-flex">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star"></i></li>
                                </ul>
                                <p class="product-price"><span>' . $cart[5] . '</span>x <span class="p-price">' . $cart[3] . '</span>
                                </p>
                            </div>
                        </div>
                        <div class="cart-product-delete-btn">
                        '.$xoasp.'
                        </div>
                    </li>
                </ul>';
                } ?>
            </div>
            <?php
            echo ' <div class="cart-bottom">
                <div class="cart-total d-flex justify-content-between">
                    <label>Subtotal :</label>
                    <span>'.$tong.'</span>
                </div>
                <div class="cart-btns">
                    <a href="index.php?act=bill" class="cart-btn checkout">Hóa Đơn</a>
                    <a href="index.php?act=addtocart" class="cart-btn cart">VIEW CART</a>
                </div>
                <p class="cart-shipping-text"><strong>SHIPPING:</strong> Continue shopping up to $64.08 and receive free
                    shipping. stay with EG </p>
            </div>';
            ?>

        </div>
    </div>


    <div class="category-wrapper">
        <div class="category-bar">
            <h5 class="cb-title text-uppercase category-icon">
                Danh mục
                <i class="flaticon-arrow-pointing-to-left"></i>
            </h5>
            <?php foreach ($dsdm as $dm) {
                extract($dm);
                $linksp = "index.php?act=product&iddm=" . $id;
                echo ' <li><a href="' . $linksp . '">' . $name . '</a></li>';
            } ?>
        </div>
    </div>

    <header>
        <div class="header-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12 d-xl-flex align-items-center justify-content-center">
                        <div class="main-logo d-flex justify-content-between align-items-center">
                            <a href="index.html">
                                <img src="assets/images/Logo.png" alt="">
                            </a>
                            <div class="mobile-menu d-flex ">
                                <a href="javascript:void(0)" class="hamburger d-block d-xl-none">
                                    <span class="h-top"></span>
                                    <span class="h-middle"></span>
                                    <span class="h-bottom"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 d-flex justify-content-center">
                        <nav class="main-nav">
                            <div class="inner-logo">
                                <a href="../index.php"><img src="../image/logo.png" alt=""></a>
                            </div>
                            <ul class="nav-item-list">
                                <li><a href="index.php">Trang chủ</a></li>
                                <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
                                <li class="has-child-menu">
                                    <a href="index.php?act=product">Sản phẩm</a>
                                    <i class="fl flaticon-plus">+</i>
                                    <ul class="sub-menu">
                                        <?php foreach ($dsdm as $dm) {
                                            extract($dm);
                                            $linksp = "index.php?act=product&iddm=" . $id;
                                            echo ' <li><a href="' . $linksp . '">' . $name . '</a></li>';
                                        } ?>
                                    </ul>
                                </li>
                                <li><a href="index.php?act=lienhe">Liên hệ</a></li>


                                <li class="has-child-menu">
                                    <?php if (!isset($_SESSION['username'])) { ?>
                                        <a href="javascript:void(0)">Tài khoản</a>
                                    <?php } else { ?>
                                        <a href=""><?= $_SESSION['username']['username'] ?></a>
                                    <?php } ?>
                                    <i class="fl flaticon-plus">+</i>
                                    <ul class="sub-menu">

                                        <?php if (!isset($_SESSION['username'])) { ?>
                                            <li><a href="index.php?act=login">Đăng nhập</a></li>
                                            <li><a href="index.php?act=dangky">Đăng ký</a></li>
                                        <?php } else if (isset($_SESSION['username'])) { ?>
                                            <?php if ($_SESSION['username']['role'] == 1) { ?>
                                                <li><a href="admin/index.php">Truy cập vào trang admin</a></li>
                                                <li><a href="index.php?act=myaccount">Thông tin tài khoản</a></li>
                                                <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                                                <li><a href="index.php?act=logout">Đăng xuất</a></li>
                                            <?php } else { ?>
                                                <li><a href="index.php?act=myaccount">Thông tin tài khoản</a></li>
                                                <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                                                <li><a href="index.php?act=logout">Đăng xuất</a></li>
                                            <?php } ?>

                                    </ul>
                                <?php  } ?>
                                </li>
                            </ul>
                            <div class="inner-top">
                                <div class="inner-mail">
                                    <i class="flaticon-envelope"></i>
                                    <a href="mail.html"><span class="__cf_email__" data-cfemail="0e676068617d7b7e7e617c7a4e6b766f637e626b206d6163">[email&#160;protected]</span></a>
                                </div>
                                <div class="inner-tel">
                                    <i class="flaticon-support"></i>
                                    <a href="tel:+008-12124354">+008-12124354</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="col-xl-2 col-2 d-none d-xl-flex p-0 justify-content-end">
                        <div class="nav-contact-no">
                            <div class="contact-icon">
                                <i class="flaticon-phone-call"></i>
                            </div>
                            <div class="contact-info">
                                <p>Liên hệ qua số điện thoại</p>
                                <a href="tel:0869827432">0869827432</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-2 d-none d-xl-flex p-0  align-items-center justify-content-center">
                        <div class="nav-right text-center">
                            <p class="text-uppercase">BLACK FRIDAY</p>
                            <h5>All items up to 20% off!</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>