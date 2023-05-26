<?php
    // truy cập đến trang lấy dữ liệu sql
    require_once  "../admin_connection/connection.php";

    // Tiến hành kiểm tra lấy dữ liệu hoàn thành chương trình
    if(isset($_POST['btn_luu'])){
        $cate_name = $_POST['cate_name'];

        // lấy tên ảnh cũ
        
        
            $sql = "INSERT INTO categories(cate_name) 
            VALUES('$cate_name')";
    
             // Chuẩn bị
            $stmt = $conn->prepare($sql);
             // Thực thi
            $stmt->execute();
    
            // Chuyển hướng đến trang hiển thị
            header("location: show_categories.php?msg=Thêm dữ liệu thành công");
            die;
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
    <a href="show_users.php">Danh sách users</a>
    <form action="" method="post" enctype="multipart/form-data">
        cate_name : <input type="text" name="cate_name">
        <br>
        <button type="submit" name="btn_luu">Lưu</button>
    </form>
</body>
</html>