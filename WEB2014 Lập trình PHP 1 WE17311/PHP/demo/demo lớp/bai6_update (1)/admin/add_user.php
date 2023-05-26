<?php
require_once "../connection.php";

if (isset($_POST['btn_luu'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];

    $file = $_FILES['avatar'];
    //Lấy tên ảnh
    $avatar = $file['name'];

    //SQL insert
    $sql = "INSERT INTO users(username, email, password, address, sex, avatar) Values('$username', '$email', '$password', '$address', '$gender', '$avatar')";

    //Chuẩn bị
    $stmt = $conn->prepare($sql);
    //Thực thi
    $stmt->execute();

    //Upload file
    if ($file['size'] > 0) {
        move_uploaded_file($file['tmp_name'], '../images/' . $avatar);
    }
    //Di chuyển đến trang show_user
    $msg = "Thêm dữ liệu thành công";
    header("location: show_user.php?msg=$msg");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
</head>

<body>
    <h1>Thêm người dùng</h1>
    <a href="show_user.php">Danh sách users</a>
    <form action="" method="post" enctype="multipart/form-data">
        username : <input type="text" name="username" />
        <br>
        email: <input type="email" name="email">
        <br>
        password: <input type="password" name="password">
        <br>
        address: <input type="text" name="address">
        <br>
        Avatar <input type="file" name="avatar" id="">
        <?php if (isset($avatar_err)) : ?>
            <span style="color: red;"><?= $avatar_err ?></span>
        <?php endif ?>
        <br>
        Sex
        <select name="sex" id="">
            <option value="Nam">Nam</option>
            <option value="Nữ">Nữ</option>
        </select>
        <br>
        <button type="submit" name="btn_luu">Lưu</button>
    </form>
</body>

</html>