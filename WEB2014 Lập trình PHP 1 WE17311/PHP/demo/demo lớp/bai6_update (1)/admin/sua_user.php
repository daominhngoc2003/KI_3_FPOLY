<?php
require_once "../connection.php";

if (isset($_POST['btn_luu'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $gender = $_POST['sex'];

    $file = $_FILES['avatar'];
    //Lấy tên ảnh cũ
    $avatar = $_POST['avatar'];

    if ($file['size'] > 0) {
        //Nếu có ảnh thì lấy tên ảnh mới
        $avatar = $file['name'];
    }

    //SQL Update
    $sql = "UPDATE users SET username='$username', email='$email', password='$password', address='$address', sex='$gender', avatar='$avatar' WHERE id=$id";

    //Chuẩn bị
    $stmt = $conn->prepare($sql);
    //Thực thi
    $stmt->execute();

    //Upload file
    if ($file['size'] > 0) {
        move_uploaded_file($file['tmp_name'], '../images/' . $avatar);
    }
    //Di chuyển đến trang show_user
    $msg = "Cập nhật dữ liệu thành công";
    header("location: show_user.php?msg=$msg");
    exit();
}

//Đoạn code để lấy dữ liệu cần sửa
$id = $_GET['id'];
//SQL select
$sql = "Select * From users WHERE id=$id";
//Chuẩn bị
$stmt = $conn->prepare($sql);
$stmt->execute();
//Lấy ra 1 bản ghi của bảng / hàm fetch sẽ lấy ra 1 bản ghi
$user = $stmt->fetch(PDO::FETCH_ASSOC);

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
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        username : <input type="text" name="username" value="<?= $user['username'] ?>" />
        <br>
        email: <input type="email" name="email" value="<?= $user['email'] ?>">
        <br>
        password: <input type="password" name="password" value="<?= $user['password'] ?>">
        <br>
        address: <input type="text" name="address" value="<?= $user['address'] ?>">
        <br>
        <img src="../images/<?= $user['avatar'] ?>" width="123" alt="">
        <input type="hidden" name="avatar" value="<?= $user['avatar'] ?>">
        <br>
        Avatar <input type="file" name="avatar" id="">
        <?php if (isset($avatar_err)) : ?>
            <span style="color: red;"><?= $avatar_err ?></span>
        <?php endif ?>
        <br>
        Sex
        <select name="sex" id="">
            <option value="Nam" <?= ($user['sex'] == 'Nam') ? 'selected' : '' ?>>Nam</option>
            <option value="Nữ" <?= ($user['sex'] == 'Nữ') ? 'selected' : '' ?>>Nữ</option>
        </select>
        <br>
        <button type="submit" name="btn_luu">Lưu</button>
    </form>
</body>

</html>