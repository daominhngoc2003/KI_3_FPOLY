<?php
// truy cập đến trang lấy dữ liệu sql
    require_once  "../admin_connection/connection.php";

    // Tiến hành kiểm tra lấy dữ liệu hoàn thành chương trình
    if(isset($_POST['btn_luu'])){
        $cate_id = $_POST['cate_id'];
        $cate_name = $_POST['cate_name'];
        
        // SQL UPDATE
        $sql = "UPDATE categories SET cate_name= '$cate_name' WHERE cate_id = $cate_id";

        
    
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            

            // Chuyển hướng đến trang hiển thị
            $msg = "cập nhật dữ liệu thành công";
            header("location: show_categories.php?msg=$msg");
            die;
    }

    // Đoạn code để láy dữ liệu cần sửa
        $cate_id = $_GET['cate_id'];
    // SQL select
        $sql = "SELECT* FROM categories where cate_id = $cate_id";
    // Chuẩn bị
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    // láy ra 1 bản ghi của bảng    
        $categories = $stmt->fetch(PDO::FETCH_ASSOC);
    
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
    <a href="show_categories.php">DANH SÁCH NGƯỜI DÙNG</a>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="cate_id" value="<?= $categories['cate_id'] ?>">
        cate_name : <input type="text" name="cate_name" value="<?= $categories['cate_name'] ?>">
        <br>
        <button type="submit" name="btn_luu">Lưu</button>
    </form>
</body>
</html>