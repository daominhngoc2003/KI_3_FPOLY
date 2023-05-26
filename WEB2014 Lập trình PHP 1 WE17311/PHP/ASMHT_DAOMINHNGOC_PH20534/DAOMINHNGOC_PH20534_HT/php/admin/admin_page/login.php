<?php
    session_start();
    require_once "../admin_connection/connection.php";

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username= '$username'";

        // chuẩn bị
        $stmt = $conn->prepare($sql);
        // Thực thi
        $stmt->execute();

        // lấy dữ liệu
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Kiểm tra xem user xem có tồn tại k
        if($user){
            // Kiểm tra mật khẩu
        if($user['password'] == $password){
            // tạo session
            $_SESSION['username'] = $username; //có thể lưu giữu cả mảng =$user
            header("location: admin/show_users.php");
            exit;
        }
        else $error = "Tài khoản hoặc mật khẩu không đúng";
        }
        else $error = "Tài khoản hoặc mật khẩu không đúng";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <?php if(isset($error)) : ?>
        <div style="color: red;" class="alert alert_danger">
            <?= $error ?>
        </div>
    <?php endif ?>
    <form action="" method="post">
        Username: <input type="text" name="username" value="<?=  isset($username) ? $username : ''  ?>">
        <br>
        Password: <input type="password" name="password" >
        <br>
        <button type="submit" name="btn_login">LOGIN</button>
    </form>
</body>
</html>