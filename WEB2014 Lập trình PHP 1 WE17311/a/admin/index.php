<?php
session_start();
ob_start();
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/cart.php";
include "../model/binhluan.php";
include "../model/thongke.php";
include "../model/bill.php";
include "./head.php";
include "./header.php";
// Controller
if (isset($_GET['act']) && ($_SESSION['username'])) {
    $act = $_GET['act'];
    switch ($act) {

            //-------------- BẢNG DANH MỤC-------------------------------
            // add  danh mục
        case 'adddm':
            // Kiểm tra xem người dùng có click vào nút Thêm mới hay không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $name = $_POST['name'];
                insert_danhmuc($name);
                $thongbao = "Thêm thành công";
            }
            include "./danhmuc/add.php";
            break;
            // List danh mục
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "./danhmuc/list.php";
            break;
            //  Xóa danh mục
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "./danhmuc/list.php";
            break;
            // Sửa dm
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sql = "SELECT * from danhmuc where id=" . $_GET['id'];
                $dm = pdo_query_one($sql);
            }
            $listdanhmuc = loadall_danhmuc();
            include "./danhmuc/update.php";
            break;
            // Cập nhật danh mục
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $sql = "UPDATE danhmuc SET name = '" . $name . "' where id =" . $_POST['id'];
                pdo_execute($sql);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "./danhmuc/list.php";
            break;
            //---------------------------BẢNG SẢN PHẨM-----------------------------------------
            // add sản phẩm
        case 'addsp':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $name = $_POST['name'];
                $discount = $_POST['discount'];
                $price = $_POST['price'];
                $mota_dai = $_POST['mota_dai'];
                $mota_ngan = $_POST['mota_ngan'];
                $date = $_POST['date'];
                $size_product = $_POST['size_product'];
                $color_product = $_POST['color_product'];
                $image = $_FILES['image']['name'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);

                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                insert_sanpham($name, $image, $discount, $price, $mota_ngan, $mota_dai, $date, $size_product, $color_product, $iddm);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "./sanpham/add.php";
            break;
            // danh sách sản phẩm
        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include "./sanpham/list.php";
            break;
            // Xóa sản phẩm
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham("", 0);
            include "./sanpham/list.php";
            break;
            // Sửa sản phẩm
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sp = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham("", 0);
            include "./sanpham/update.php";
            break;
            // Update sản phẩm
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $name = $_POST['name'];
                $discount = $_POST['discount'];
                $price = $_POST['price'];
                $mota_ngan = $_POST['mota_ngan'];
                $mota_dai = $_POST['mota_dai'];
                $date = $_POST['date'];
                $size_product = $_POST['size_product'];
                $color_product = $_POST['color_product'];
                $image = $_FILES['image']['name'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);

                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                $listsanpham = update_sanpham($id, $name, $image, $discount, $price, $mota_ngan, $mota_dai, $date, $size_product, $color_product, $iddm);
                $thongbao = "Cập nhật thành công";
            }
            $sql = "select * from danhmuc order by  id desc";
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham("", 0);
            include "./sanpham/list.php";
            break;
            //--------------------------PHẦN TÀI KHOẢN-----------------------------------------
            // DANH SÁCH TÀI KHOẢN
        case 'listtaikhoan':
            $listtaikhoan = loadall_taikhoan();
            // echo $listtaikhoan; die;
            include "./taikhoan/list.php";
            break;
            // XÓA TÀI KHOẢN
        case 'xoatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_taikhoan($_GET['id']);
            }
            $listtaikhoan = loadall_taikhoan();
            include "./taikhoan/list.php";
            break;
            // SỬA TÀI KHOẢN
        case 'suatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $tk = loadone_taikhoan($_GET['id']);
            }
            $listtaikhoan = loadall_taikhoan();
            include "./taikhoan/update.php";
            break;
            // UPDATE TÀI KHOẢN
        case 'updatetk':
            if (isset($_POST['id']) && ($_POST['id'] > 0)) {
                $id = $_POST['id'];
                $full_name = $_POST['full_name'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $role = $_POST['role'];
                $image_user = $_FILES['image_user']['name'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["image_user"]["name"]);

                if (move_uploaded_file($_FILES["image_user"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                $listsanpham = update_taikhoan($id, $full_name, $username, $password, $email, $address, $phone, $role, $image_user);
                $thongbao = "Cập nhật thành công";
            }
            $listtaikhoan = loadall_taikhoan();
            include "./taikhoan/list.php";
            break;
            // DANH SÁCH HÓA ĐƠN
        case 'listbill':
            $listbill = loadall_bill_admin();
            include "./cart/list-bill.php";
            break;
            // XÓA BILL
        case 'xoabill':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_bill($_GET['id']);
            }
            $listbill = loadall_bill_admin();
            include "./cart/list-bill.php";
            break;
            // SỬA BILL
        case 'suabill':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $bill = loadone_bill($_GET['id']);
            }
            $listbill = loadall_bill_admin();
            include "./cart/update-bill.php";
            break;
            // CẬP NHẬT BILL
        case 'updatebill':
            if (isset($_POST['id']) && ($_POST['id'] > 0)) {
                $id = $_POST['id'];
                $status = $_POST['status'];
                $listbill= update_bill($id,$status);
                $thongbao = "Cập nhật thành công";
            }
            $listbill = loadall_bill_admin();
            include "./cart/list-bill.php";
            break;
        case 'listbl':
            $listbinhluan = loadall_binhluan_admin();
            include "./binhluan/list.php";
            break;
        case 'xoabl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_binhluan($_GET['id']);
            }
            $listbinhluan = loadall_binhluan_admin();
            include "./binhluan/list.php";
            break;
        case 'listthongke':
            $listthongke = loadall_thongke();
            include "./thongke/list.php";
            break;
        case 'bieudo':
            include "./thongke/bieudo.php";
            break;
    }
} else {
    include "./content.php";
}
include "./footer.php";
ob_end_flush();
