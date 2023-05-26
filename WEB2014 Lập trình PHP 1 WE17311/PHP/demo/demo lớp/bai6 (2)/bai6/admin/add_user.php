<?php
require_once "../connection.php";
if (isset($_POST['btn_luu'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $sex = $_POST['sex'];

    $avatar = $_FILES['avatar'];
    //Kiểm tra xem người dùng có nhập vào ảnh avatar không
    if ($avatar['size'] > 0) {
        $ext = pathinfo($avatar['name'], PATHINFO_EXTENSION);
        if ($ext != 'jpg' && $ext != 'png' && $ext != 'gif') {
            $avatar_err = "Ảnh không đúng định dạng";
        }
    } else {
        $avatar_err = "Bạn chưa nhập ảnh";
    }

    //Nếu trường hợp người dùng nhập ảnh avatar thành công
    if (!isset($avatar_err)) {
        $avatar_name = $avatar['name'];
        $sql = "INSERT INTO users(username, email, avatar, password, address, sex) VALUES('$username', '$email', '$avatar_name', '$password', '$address', '$sex')";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        //Upload ảnh
        move_uploaded_file($avatar['tmp_name'], '../images/' . $avatar_name);

        //Chuyển hướng đến trang hiển thị danh sách user
        header("location: show_user.php?msg=Thêm dữ liệu thành công");
        die;
    }
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