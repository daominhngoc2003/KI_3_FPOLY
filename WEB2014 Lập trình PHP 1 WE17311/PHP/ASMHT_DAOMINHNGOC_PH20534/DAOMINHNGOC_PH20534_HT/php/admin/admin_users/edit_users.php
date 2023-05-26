<?php
// truy cập đến trang lấy dữ liệu sql
    require_once  "../admin_connection/connection.php";

    // Tiến hành kiểm tra lấy dữ liệu hoàn thành chương trình
    if(isset($_POST['btn_luu'])){
        $id = $_POST['id'];
        $manguoidung = $_POST['manguoidung'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];

        $file = $_FILES['image'];

        // lấy tên ảnh cũ
        $image = $_POST['image'];
        
        if($file['size'] > 0){
            // nếu có ảnh thì lấy tên ảnh mới
            $image = $file['name'];
        }

        // SQL UPDATE
        $sql = "UPDATE users SET manguoidung = '$manguoidung', username= '$username',email = '$email' ,password = '$password',address = '$address',gender = '$gender', image = '$image' WHERE id = $id";

        
    
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            
            // Upload file ảnh
            move_uploaded_file($file['tmp_name'], '../../../img/' . $image);
    
            // Chuyển hướng đến trang hiển thị
            $msg = "cập nhật dữ liệu thành công";
            header("location: show_users.php?msg=$msg");
            die;
    }

    // Đoạn code để láy dữ liệu cần sửa
        $id = $_GET['id'];
    // SQL select
        $sql = "SELECT* FROM users where id = $id";
    // Chuẩn bị
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    // láy ra 1 bản ghi của bảng    
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
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
    <a href="show_users.php">DANH SÁCH NGƯỜI DÙNG</a>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        manguoidung : <input type="text" name="manguoidung" value="<?= $user['manguoidung'] ?>">
        <br>
        username : <input type="text" name="username" value="<?= $user['username'] ?>">
        <br>
        email : <input type="text" name="email" value="<?= $user['email'] ?>">
        <br>
        password  : <input type="text" name="password" value="<?= $user['password'] ?>">
        <br>
        address : <input type="text" name="address" value="<?= $user['address'] ?>">
        <br>
        <img src="../../../img/?= $user['image'] ?>" width="123" alt="">
        <input type="hidden" name="image" value="<?= $user['image'] ?>">
        <br>
        image: <input type="file" name="image" id="">
        <?php if(isset($image_err)) : ?>
            <span style="color: red;">
                <?= $image_err ?>
            </span>
        <?php endif ?>
        <br>
        Sex : 
        <select name="gender" id="">
            <option value="Nam" <?= ($user['gender'] =='Nam') ? 'selected' : '' ?>>Nam</option>
            <option value="Nữ" <?= ($user['gender']== 'Nữ' ? 'selected' : '') ?>>Nữ</option>
        </select>
        <br>
        <button type="submit" name="btn_luu">Lưu</button>
    </form>
</body>
</html>