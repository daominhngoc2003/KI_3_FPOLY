<?php
    if(isset($_POST['btn'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $pass = $_POST['password'];

        // validate
        if($name == ''){
            $err_name = "Không được để trống ô họ tên";
        }

        

        if(!isset($name)){
            echo "Đăng nhập thành công";
        }
        else echo " Đăng nhập chưa thành công";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASIGNMENT GD1</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&display=swap" rel="stylesheet">

</head>
<body>

    <!-- Page nav -->
    <nav class="">
           <!-- Container -->
        <div class="container">
            <div class="nav-main">
                <img src="img/logo.jpg" class=" ml-6 my-4" width="200" height="50" alt="">
                <!-- nav -->
                <ul class="header-nav">
                    <li><a href="index.php" style="color: red;">Trang chủ</a></li>
                    <li><a href="gioithieu.php">Giới thiệu</a></li>
                    <li><a href="lienhe.php">Liên hệ</a></li>
                    <li><a href="sanpham.php">Sản phẩm</a>
                        <ul class="sub-menu">
                            <li><a href="">Quần áo mùa đông</a></li>
                            <li><a href="">Quần áo nam</a></li>
                            <li><a href="">Quần áo nữ</a></li>
                            <li><a href="">Quần áo mùa hè</a></li>
                        </ul>
                    </li>
                    <li><a href="tintuc.html">Tin tức</a></li>
                </ul>
            </div>


            <form action="" class="search">
                <input class="ip-search text-20" type="text" placeholder="search" required>
                <button class="btn-search" type="submit">Tìm kiếm</button>
            </form>


            <div class="frm-dangnhap">
                <a href="dangky.php">Đăng ký</a>
                <span>|</span>
                <a href="dangnhap.php">Đăng nhập</a>
            </div>
        </div>
    </nav>
    <!-- end page nav -->

    <!-- FORM đăng nhập -->
    <form action="dangnhap.php" method="post">
        <div>
            <lable>Họ tên: </lable>
            <input type="text" name="name" value = "<?= isset($name) ? $name : ''?>" placeholder="Họ và tên">
        </div>

         <!-- code php họ tên -->
        <?php if(isset($err_name)) : ?>
            <div style="color: red;">
                <?= $err_name ?>
            </div>
        <?php endif ?>

        <div>
            <lable>Email: </lable>
            <input type="text" value = "<?= isset($email) ? $email : ''?>" name="email" placeholder="Email">
        </div>


        
    </form>
       



    
    <footer >
        <section class="footer">
            <div class="row-footer">
                <div class="col-footer">
                    <h3>HỖ TRỢ KHÁCH HÀNG</h3>
                    <p>
                        <a href=""> Các câu hỏi thường gặp </a> <br>
                        <a href="">Liên hệ chúng tôi</a> <br>
                        <a href="">Hệ thống cửa hàng</a> <br>
                        <a href="">Tra cứu đơn hàng</a> <br>
                        <a href="">Hướng dẫn đo kích thước</a> <br>
                        <a href="">Chính sách đổi hàng</a> <br>
                        <a href="">Chính sách giao hàng</a> <br>
                        <a href="">Chính sách khách hàng thân thiết Tam Sơn</a> <br>
                    </p>
                </div>
                <div class="col-footer">
                    <h3>BỘ SƯU TẬP NỮ</h3>
                    <p>
                        <a href="">Bộ sưu tập Xuân/Hè</a> <br>
                        <a href="">Đầm</a><br>
                        <a href="">Áo sơmi & Áo kiểu</a><br>
                        <a href=""> Quần dài</a><br>
                        <a href=""> Ví da</a><br>
                        <a href="">Giày dép</a><br>
                    </p>
                </div>
                <div class="col-footer">
                    <h3>BỘ SƯU TẬP NAM</h3>
                    <p>
                        <a href="">Bộ sưu tập Xuân/Hè</a><br>
                        <a href="">Áo sơ mi</a><br>
                        <a href="">  Áo thun & Áo Polo</a><br>
                        <a href="">Quần dài & Quần short</a><br>
                        <a href=""> Túi xách</a><br>
                        <a href="">Giày dép</a><br>
                    </p>
                </div>
                <div class="col-footer">
                    <h3>THÔNG BÁO PHÁP LÝ</h3>
                    <p>
                        <a href="">Thông tin công ty</a><br>
                        <a href="">Điều khoản sử dụng</a><br>
                        <a href="">Chính sách bảo mật</a><br>
                        <a href="">Chính sách Cookie</a><br>
                        <a href=""> Quản lý Cookie của tôi</a><br>
                    </p>
                </div>
            </div>
        </section>
    </footer>
</body>
</html>