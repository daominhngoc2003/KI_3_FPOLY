<?php
//Lấy dữ liệu post
if(isset($_POST['dangki'])){
$hoten =$_POST['hoten'];
$taikhoan =$_POST['taikhoan'];


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
    <form action="post.php" method="POST">
        <label for="">Họ tên</label>
        <input type="text" name="hoten">
        <br>
        <label for="">Tài khoản</label>
        <input type="text" name="taikhoan">
        <br>
        <button type="submit" name="dangki">Đăng kí</button>
    </form>
    <div>
        <?php
        if(isset($hoten)){
            // In ra
echo "Họ tên : <b> $hoten </b> <br>";
echo "Tai khoản : <b> $taikhoan </b> <br>";
        }
        ?>
    </div>
    
</body>
</html>