
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ASIGNMENT GD1</title>
        <link rel="stylesheet" href="../../css/dangky.css">
        <link rel="stylesheet" href="../../css/sanpham.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>
    <body>

 <div id="container">
              <!-- Page nav -->
    <nav class="">
           <!-- Container -->
        <div class="container">
            <div class="nav-main">
                <img src="img/logo.jpg" class="logo" width="200" height="50" alt="">
                <!-- nav -->
                <ul class="header-nav">
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="gioithieu.php">Giới thiệu</a></li>
                    <li><a href="lienhe.php">Liên hệ</a></li>
                    <li><a href="sanpham.php"  style="color: red;">Sản phẩm</a>
                        <ul class="sub-menu">
                            <li><a href="">Quần áo mùa đông</a></li>
                            <li><a href="">Quần áo nam</a></li>
                            <li><a href="">Quần áo nữ</a></li>
                            <li><a href="">Quần áo mùa hè</a></li>
                        </ul>
                    </li>
                    <li><a href="quantri.php">Quản trị</a></li>
                </ul>
            </div>


            <form action="" class="search">
                <input class="ip-search text-20" type="text" placeholder="search" required>
                <button class="btn-search" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>


            <div class="frm-dangnhap">
            <a href="quantri.php"><i class="fa-solid fa-user"></i></a>
            <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
        </div>
    </nav>

            <!-- FORM đăng nhập -->
            <form class="can" action="./admin/dangky/dangky.php" method="post">
                <div class="chung">
                    <lable>Họ tên: </lable> <br>
                    <input type="text" class="name" name="name" style="outline: none;" value = "<?= isset($name) ? $name : ''?>" placeholder="Họ và tên">
                </div>

                <!-- code php họ tên -->
                <?php if(isset($err_name)) : ?>
                    <div style="color: red;">
                        <?= $err_name ?>
                    </div>
                <?php endif ?>

                <div class="chung">
                    <lable>Email: </lable><br>
                    <input type="text" style="outline: none;" value = "<?= isset($email) ? $email : ''?>" name="email" placeholder="Email">
                </div>


                <!-- code php email -->
                <?php if(isset($err_email)) : ?>
                    <div style="color: red;" >
                        <?= $err_email ?>
                    </div>
                <?php endif ?>


                <div class="chung">
                    <lable>Số điện thoại: </lable><br>
                    <input type="text" style="outline: none;" value = "<?= isset($phone) ? $phone : ''?>" name="phone" placeholder="Số điện thoại">
                </div>

            <!-- code php phone -->
                <?php if(isset($err_phone)) : ?>
                        <div style="color: red;" >
                            <?= $err_phone ?>
                        </div>
                    <?php endif ?>


                    <div class="chung">
                        <lable>Mật khẩu: </lable><br>
                        <input type="password" style="outline: none;"  value = "<?= isset($pass) ? $pass : ''?>" name="password" placeholder="Mật khẩu">
                    </div>

            <!-- code php mật khẩu -->
            <?php if(isset($err_pass)) : ?>
                    <div style="color: red;" >
                        <?= $err_pass ?>
                    </div>
                <?php endif ?>

                <div class="chung">
                        <lable>Nhập lại mật khẩu: </lable><br>
                        <input type="password" style="outline: none;"  value = "<?= isset($repass) ? $pass : ''?>" name="repassword" placeholder="Nhập lại Mật khẩu">
                    </div>

            <!-- code php mật khẩu -->
            <?php if(isset($err_repass)) : ?>
                    <div style="color: red;">
                        <?= $err_repass ?>
                    </div>
                <?php endif ?>


                <div class="chung">
                    <button class="bam" name="btn" type="submit">Đăng nhập</button>
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
        </div>
    </body>
    </html>