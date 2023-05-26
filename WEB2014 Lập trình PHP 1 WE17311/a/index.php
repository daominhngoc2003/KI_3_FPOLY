<?php
session_start();
ob_start();
include "./global.php";
include "./model/pdo.php";
include "./model/danhmuc.php";
include "./model/sanpham.php";
include "./model/taikhoan.php";
include "./model/cart.php";
include "./model/bill.php";

if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

// LOAD TẤT CẢ SẢN PHẨM MỚI
$spnew = loadall_sanpham_home();

// LOAD TẤT CẢ DANH MỤC
$dsdm = loadall_danhmuc();
include "./view/header.php";

// LOAD DANH SÁCH TOP SẢN PHẨM
$dstop10 = loadall_sanpham_top();
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
            // Trang sản phẩm
        case 'product':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $tendm = load_tendm($iddm);
            include "./view/sanpham/product.php";
            break;
        case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET['idsp']) > 0) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $sp_cungloai = loadone_sanpham_cungloai($id, $iddm);
            }
            include "./view/sanpham/sanphamct.php";
            break;
            // Trang giới thiệu
        case 'gioithieu':
            include "./view/about.php";
            break;
            // Trang liên hệ
        case 'lienhe':
            include "./view/contact.php";
            break;
            // Tài khoản
        case 'login':
            if (isset($_POST['login']) && ($_POST['login'] > 0)) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $checkuser = checkuser($username, $password);
                if (is_array($checkuser)) {
                    $_SESSION['username'] = $checkuser;
                    header('location:index.php');
                    // $thongbao = "successfull";
                } else {
                    $thongbao = "Tài khoản không tồn tại! Vui lòng kiểm tra lại";
                }
            }
            include "./view/taikhoan/login.php";
            break;
            // My acount
        case 'myaccount':
            // if (isset($_SESSION['username'])) {
            //     $full_name = $_POST['full_name'];
            //     $username = $_POST['username'];
            // } else {
            //     header('location: ?act=login');
            // }
            include "view/taikhoan/myaccount.php";
            break;
            // Logout
        case 'logout':
            session_unset();
            header('location:index.php');
            break;
            // Quên mât khẩu
        case 'quenmk':
            if(isset($_POST['btnsubmit'])&&($_POST['btnsubmit']>0)){
                $email  = $_POST['email'];
                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là:" . $checkemail['password'];
                } else {
                    $thongbao = "email không tồn tại";
                }
            }
            include "./view/taikhoan/quenmk.php";
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'] > 0)) {
                $full_name = $_POST['full_name'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                insert_taikhoan($full_name, $username, $password, $email);
                $thongbao = "Đã đăng ký thành công";
            }
            include "./view/taikhoan/register.php";
            break;

            // Đặt hàng
        case 'myorder':
            include "./view/cart/order.php";
            break;
            // Thêm Giỏ hàng
        case 'addtocart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['id'];
                $price = $_POST['price'];
                $discount = $_POST['discount'];
                $image = $_POST['image'];
                $name = $_POST['name'];
                $color_product = $_POST['color_product'];
                $size_product = $_POST['size_product'];
                $soluong = 1;
                $thanhtien = $soluong * $price;
                $spadd = [$id, $image, $name, $price, $discount, $soluong, $thanhtien,$color_product,$size_product];
                array_push($_SESSION['mycart'], $spadd);
            }
            include "./view/cart/cart.php";
            break;
            // Delcart
        case 'delcart':
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
                header('location:index.php');
            }
            header('location:index.php?act=addtocart');
            break;
            // Bill
        case 'bill':
            include "./view/cart/bill.php";
            break;
        case 'billconfirm':
            if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
                if (isset($_SESSION['username'])) {
                    $iduser = $_SESSION['username']['id'];
                    $full_name = $_POST['full_name'];
                    $username = $_SESSION['username']['username'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $pttt = $_POST['pttt'];
                    $address = $_POST['address'];
                    $ngaydathang = date('hi:a:a d/m/Y');
                    $tongdonhang = tongdonhang();
                }
                // Tạo bill

                $idbill = insert_bill($iduser, $full_name, $username, $address, $phone, $email, $pttt, $ngaydathang, $tongdonhang);

                // insert into cart : $session['mycart'] & idbill
                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['username']['id'], $cart[0], $cart[1], $cart[2], $cart[3], $cart[5], $cart[6], $cart[7], $cart[8], $idbill);
                }
                $_SESSION['mycart'] = [];
            }
            $bill = loadone_bill($idbill);
            $billct = loadall_cart($idbill);
            include "./view/cart/billconfirm.php";
            break;
        case 'setting':
            include "./view/taikhoan/setting.php";
            break;
        case 'checkout':
            include "./view/cart/checkout.php";
            break;
    }
} else {
    include "./view/content.php";
}
include "./view/footer.php";

ob_end_flush();
