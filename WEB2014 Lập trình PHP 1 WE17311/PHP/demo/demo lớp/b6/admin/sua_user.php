
<?php
require_once "../connection.php";
if (isset($_POST['btn_luu'])){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $sex = $_POST['sex'];
    $file =$_FILES['avatar'];
    //lấy ảnh
    $avatar = $file['name'];
    if ($file['size'] >0){
        //Nếu có ảnh thì lấy tên ảnh 
        $avatar =$file['name'];
    }
    //SQL Update
    $sql = "UPDATE users SET username ='$username', email='$email', password='$password', address='$address', sex='$sex', avatar='$avatar' WHERE id=$íd";
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


//đoạn code dể lấy dữ liệu càn sủa $
$id = $_GET['id'];
//SQL select
$sql = "SELECT * From users WHERE id=$id";
//chuan bi 
$stmt= $conn->prepare($sql);
$stmt->execute();
//lấy ra một bản lưu của bảng 
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
    <h1>Thêm người dùng </h1>
    <a href="show_user.php">Danh sach user</a>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $user['id']?>">
        username : <input type="text" name="username" value="<?= $user['username']?>">
        <br>
        Email : <input type="email" name="email" value="<?= $user['email']?>">
        <br>
        Password : <input type="password" name="password" value="<?= $user['password']?>">
        <br>
        address : <input type="text" name="address" value="<?= $user['address']?>">
        <br>
        <img src="../images/"value="<?= $user['avatar']?>" width="200">
        <input type="hidden" name="avatar" value="<?= $user['avatar']?>">
        <br>
        Avatar <input type="file" name="avatar" id="">
        <?php if (isset ($avatar_err)):?>
            <span style="color: red;"><?= $avatar_err?></span>
            <?php endif?>
        <br>
        Sex :
        <select name="sex" id="">
            <option value="Nam" <?= ($user['sex'] == 'Nam') ? 'selected' : '' ?>>Nam</option>
            <option value="Nữ" <?= ($user['sex'] == 'Nữ') ? 'selected' : '' ?>>Nữ</option>

        </select>
        <br>
        <button type="submit" name="btn_luu">Lưu</button>
    </form>
</body>
</html>