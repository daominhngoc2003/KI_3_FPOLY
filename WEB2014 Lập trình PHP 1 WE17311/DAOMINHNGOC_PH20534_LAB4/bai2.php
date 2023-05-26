<?php
    if(isset($_POST['btn'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repassword = $_POST['re-password'];

        //validate
        if($name == ''){
            $err_name = "Cần điền họ tên";
        }
        if($email == ''){
            $err_email = "Cần điền thông tin email";
        }
        if($password == ''){
            $err_password = "Cần điền thông tin password";
        }
        if($repassword == ''){
            $err_repassword = "Cần điền thông tin re-password";
        }
        else if($repassword !== $password){
            $err_repassword = "Cần điền giống với mật khẩu vừa nhập";
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
    <form action="bai2.php" method="POST">
        <label for="">username</label>
        <input type="text" name="name" value = "<?= isset($name) ? $name : ''?>">
        <?php if(isset($err_name)) : ?> 
            <div style = "color:red;">
                <?= $err_name ?>
            </div>    
        <?php endif ?>
        <br>


        <label for="">email</label>
        <input type="text" name = "email" value = "<?=isset($email) ? $email : '' ?>">
        <?php if(isset($err_email)) : ?>
            <div style = "color:red;">
                <?= $err_email ?>
            </div>
        <?php endif?>
        <br>


        <label for="">password</label>
        <input type="password" name = "password" value = "<?=isset($password) ? $password : '' ?>">
        <?php if(isset($err_password)) : ?> 
            <div style = "color:red;">
                <?= $err_password ?>
            </div>    
        <?php endif ?>
        <br>


        <label for="">re-password</label>
        <input type="password" name= "re-password"  value = "<?=isset($repassword) ? $repassword : '' ?>">
        <?php if(isset($err_repassword)) : ?> 
            <div style = "color:red;">
                <?= $err_repassword ?>
            </div>    
        <?php endif ?>
        <br>


        <button type = "submit" name = "btn" >Đăng ký</button>
    </form>
</body>
</html>