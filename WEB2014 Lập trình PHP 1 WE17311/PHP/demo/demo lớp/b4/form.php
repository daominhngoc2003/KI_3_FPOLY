<?php

if (isset($_POST['btnGui'])){
    $hoten = $_POST['hoten'];
    $email =$_POST['email'];


    //validate
    if ($hoten == ''){
        $err_hoten = "Can nhap vao ho ten";
    }
    if($email== ''){
        $err_email ="Ban chua nhap email";
    }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $err_email = "Email khong dung dinh dang";
    }
    if (!isset($err_hoten) && !isset($err_email)){
        echo "Nhap du lieu thanh cong";

    }
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
    <form action="" method="post" >
        Họ tên : <input type="text" name="hoten" value="<?= isset($hoten) ? $hoten : ''?>"> 
        <?php if (isset($err_hoten)) :?>
        <div style="color: red;">
        <?= $err_hoten ?>
    </div>
    <?php endif ?>
        <br>
        Email : <input type="text" name="email" value="<?= $email ??= ''?>">
        <?php if (isset($err_email)) :?>
        <div style="color: red;">
        <?= $err_email ?>
    </div>
    <?php endif ?>
        <br>
        <button type="submit" name="btnGui">Gửi</button>
    </form>
</body>
</html>