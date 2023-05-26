<?php
    if(isset($_POST['btn'])){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $page = $_POST['page'];
        $file = $_FILES['image'];

        // validate
        if($name == ''){
            $err_name = "Tên sách không được để trống";
        }

        if($price == ''){
            $err_price = "Giá không được để trống";
        }

        else if($price < 0){
            $err_price ="Giá phải là số dương";
        }

        if($page == ''){
            $err_page = "Số trang không được để trống";
        }

        else if($page < 0){
            $err_page = "Số trang phải là số dương";
        }

        if($file['size'] > 0){
            $ext = pathinfo($file['name'], PATHINFO_EXTENSION);

            // Chuyển sang chữ thường
            $ext = strtolower($ext);
            if($ext != 'png' && $ext != 'jpeg' && $ext != 'gif' && $ext != 'jpg'){
                echo "file  chưa đúng dịnh dạng ảnh";
            }
            else  move_uploaded_file($file['tmp_name'], $file['name']);
        }
        else "bạn chưa nhập file";

        if(!isset($err_name) && !isset($err_page) && !isset($err_price)){
            echo "Thành công";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="bai3.php" method="post" enctype="multipart/form-data">

    <!-- Book name -->
        <div>
            <label for="">Tên sách: </label>
            <input type="text" name="name" value = "<?= isset($name) ? $name : ''?>" placeholder="Tên sách">
        </div>

    <!-- code php  name-->
        <?php if(isset($err_name)) : ?>
            <div style="color:red;">
                <?= $err_name ?>
            </div>
        <?php endif ?>

    <!-- Price -->
        <div>
            <label for="">Giá: </label>
            <input type="text" name="price" value="<?= isset($price) ? $price : '' ?>" placeholder="Giá">
        </div>

    <!-- code php  price-->
        <?php if(isset($err_price)) : ?>
            <div style="color: red;">
                <?= $err_price ?>
            </div>
        <?php endif ?>

    <!-- Page -->
        <div>
            <label for="">Số trang: </label>
            <input type="text" name="page" value="<?= isset($page) ? $page : '' ?>" placeholder="Số trang">
        </div>

    <!-- code php page -->
        <?php if(isset($err_page)) : ?>
            <div style="color: red;">
                <?= $err_page ?>
            </div>
        <?php endif ?>

    <!-- Image -->
        <div>
            <label for="">Ảnh: </label>
            <input type="file" name="image" placeholder="Ảnh">
        </div>
        <div>
            <button name="btn" type="submit">Kiểm tra</button>
        </div>
    </form>
</body>
</html>
