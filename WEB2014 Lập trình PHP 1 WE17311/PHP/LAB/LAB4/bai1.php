<!-- php -->
<?php
    if(isset($_POST['btn'])){
        $hoten = $_POST['name'];
        $matkhau = $_POST['pass'];

        // validate
        if($hoten == ''){
            $err_hoten = "Cần điền thông tin họ tên";
        }
        if($matkhau == ''){
            $err_matkhau = "cần điền mật khẩu";
        }
        if(!isset($err_hoten) && !isset($err_matkhau)){
            echo "Đăng nhập thành công";
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
    <form action="bai1.php" method="POST">
        <label>Họ tên</label>
        <input type="text" name ="name" value ="<?=isset($hoten) ? $hoten : ''?>"> <br>
        <?php  if(isset($err_hoten)) : ?>
            <div style="color:red;">
                <?=$err_hoten ?>
            </div>    
        <?php endif?>

        <label>Mật khẩu</label>
        <input type="text" name ="pass"> <br>
        <?php if(isset($err_matkhau)) : ?>
            <div style="color:red;">
                <?= $err_matkhau ?>
            </div>    
        <?php endif?>

        <button name= "btn" type="submit">Đăng nhập</button>
    </form>
</body>
</html>