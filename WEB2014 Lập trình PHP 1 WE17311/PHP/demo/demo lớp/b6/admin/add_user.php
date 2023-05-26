
<?php
require_once "../connection.php";
if (isset($_POST['btn_luu'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $sex = $_POST['sex'];
    $file =$_FILES['avatar'];
    //lấy ảnh
    $avatar = $file['name'];

    //SQL INTERT
    $sql ="INSERT INTO users(username, email, password, address, sex, avatar)
    VALUES('$username', '$email', '$password', '$address', '$sex', '$avatar')";
    //chuẩn bị 
    $stmt =$conn->prepare($sql);
    //thực thi 
    $stmt->execute();
    //Uload file
    if ($file['size'] >0){
        move_uploaded_file($file['tmp_name'], '../images/' . $avatar);
    }
    //di chuyển đén trang Show_user
    $msg = "Thêm dữ liệu thành công ";
    header("location: Show_user.php?msg=$smg");
    exit();
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
    <h1>Thêm người dùng </h1>
    <a href="show_user.php">Danh sach user</a>
    <form action="" method="post" enctype="multipart/form-data">
        username : <input type="text" name="username" id="">
        <br>
        Email : <input type="email" name="email" id="">
        <br>
        Password : <input type="password" name="password" id="">
        <br>
        address : <input type="text" name="address" id="">
        <br>
        Avatar <input type="file" name="avatar" id="">
        <?php if (isset ($avatar_err)):?>
            <span style="color: red;"><?= $avatar_err?></span>
            <?php endif?>
        <br>
        Sex :
        <select name="sex" id="">
            <option value="Nam">Nam</option>
            <option value="Nữ">Nữ</option>

        </select>
        <br>
        <button type="submit" name="btn_luu">Lưu</button>
    </form>
</body>
</html>