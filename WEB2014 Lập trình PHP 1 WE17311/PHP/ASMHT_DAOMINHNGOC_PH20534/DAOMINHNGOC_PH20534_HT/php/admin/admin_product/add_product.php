<?php
    // truy cập đến trang lấy dữ liệu sql
    require_once  "../admin_connection/connection.php";

    // Tiến hành kiểm tra lấy dữ liệu hoàn thành chương trình
    if(isset($_POST['btn_luu'])){
        $masanpham = $_POST['masanpham'];
        $nameproduct = $_POST['nameproduct'];
        $size = $_POST['size'];
        $quantity = $_POST['quantity'];
        $unit = $_POST['unit'];

        // lấy tên ảnh cũ
        $image = $_FILES['image'];
        
        if($image['size']>0){
            $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
            if($ext != 'jpg' && $ext != 'ext' && $ext != 'png' && $ext='JPG'){
                $image_err = "Ảnh không đúng định dạng";
            }
        }
        else $image_err = "Bạn chưa nhập ảnh";

        // kiểm tra image
        if(!isset($image_err)){
            var_dump($_POST);
            $image_name = $image['name'];
            $sql = "INSERT INTO products(masanpham,nameproduct,size,quantity,unit, image) 
            VALUES('$masanpham','$nameproduct','$size','$quantity','$unit', '$image_name')";
    
             // Chuẩn bị
            $stmt = $conn->prepare($sql);
             // Thực thi
            $stmt->execute();
            
            // Upload file ảnh
            move_uploaded_file($image['tmp_name'], '../../../img/' . $image_name);
    
            // Chuyển hướng đến trang hiển thị
            header("location: show_product.php?msg=Thêm dữ liệu thành công");
            die;
        }
    }
    
?>


<!--  trang html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>thêm người dùng</h1>
    <a href="show_product.php">Danh sách product</a>
    <form action="" method="post" enctype="multipart/form-data">
        masanpham: <input type="text" name="masanpham">
        <br>
        nameproduct : <input type="text" name="nameproduct">
        <br>
        image : <input type="file" name="image" id="">
                <?php if(isset($image_err)) : ?>
                    <span style="color: red;">
                        <?= $image_err ?>
                    </span>
                <?php endif ?>
        <br>
        size  : <input type="text" name="size">
        <br>
        quantity : <input type="text" name="quantity">
        <br>
        unit: <input type="text" name="unit">
        <br>
        <button type="submit" name="btn_luu">Lưu</button>
    </form>
</body>
</html>