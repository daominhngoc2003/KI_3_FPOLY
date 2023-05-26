<?php
// truy cập đến trang lấy dữ liệu sql
    require_once  "../admin_connection/connection.php";

    // Tiến hành kiểm tra lấy dữ liệu hoàn thành chương trình
    if(isset($_POST['btn_luu'])){
        $id = $_POST['id'];
        $masanpham = $_POST['masanpham'];
        $nameproduct = $_POST['nameproduct'];
        $size = $_POST['size'];
        $quantity = $_POST['quantity'];
        $unit = $_POST['unit'];

        $file = $_FILES['image'];

        // lấy tên ảnh cũ
        $image = $_POST['image'];
        
        if($file['size'] > 0){
            // nếu có ảnh thì lấy tên ảnh mới
            $image = $file['name'];
        }

        // SQL UPDATE
        $sql = "UPDATE products SET masanpham= '$masanpham',nameproduct = '$nameproduct' ,size = '$size',quantity = '$quantity',unit = '$unit', image = '$image' WHERE id = $id";

        
    
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            
            // Upload file ảnh
            move_uploaded_file($file['tmp_name'], '../../../img/' . $image);
    
            // Chuyển hướng đến trang hiển thị
            $msg = "cập nhật dữ liệu thành công";
            header("location: show_product.php?msg=$msg");
            die;
    }

    // Đoạn code để láy dữ liệu cần sửa
        $id = $_GET['id'];
    // SQL select
        $sql = "SELECT* FROM products where id = $id";
    // Chuẩn bị
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    // láy ra 1 bản ghi của bảng    
        $product = $stmt->fetch(PDO::FETCH_ASSOC);
    
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
    <h1>thêm người dùng</h1>
    <a href="show_product.php">Danh sách product</a>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        mã sản phẩm: <input type="text" name="masanpham" value="<?= $product['masanpham'] ?>">
        <br>
        Tên sản phẩm : <input type="text" name="nameproduct" value="<?= $product['nameproduct'] ?>">
        <br>
        image : <input type="file" name="image">
                <?php if(isset($image_err)) : ?>
                    <span style="color: red;">
                        <?= $image_err ?>
                    </span>
                <?php endif ?>
        <br>
        size  : <input type="text" name="size" value="<?= $product['size'] ?>">
        <br>
        Số lượng : <input type="text" name="quantity" value="<?= $product['quantity'] ?>">
        <br>
        unit: <input type="text" name="unit" value="<?= $product['unit'] ?>">
        <br>
        <button type="submit" name="btn_luu">Lưu</button>
    </form>
</body>
</html>