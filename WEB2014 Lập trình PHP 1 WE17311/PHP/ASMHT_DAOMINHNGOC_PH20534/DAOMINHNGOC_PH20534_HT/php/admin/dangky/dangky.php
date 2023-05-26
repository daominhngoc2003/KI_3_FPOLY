<div style="width: 200; margin: 0 auto;">
<?php
    if(isset($_POST['btn'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $pass = $_POST['password'];
        $repass = $_POST['repassword'];

        // validate
        if($name == ''){
            $err_name = "Không được để trống ô họ tên";
        }

        if($email == ''){
            $err_email = "không được để trống ô email";
        }

        else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $err_email = "Email không đúng định dạng";
        }

        if($phone == ''){
            $err_phone = "không được để trống ô phone";
        }

        else if(!filter_var($phone, FILTER_VALIDATE_FLOAT)){
            $err_phone = "Số điện thoại không đúng định dạng";
        }

        if($pass == ''){
            $err_pass = "không được để trống ô  mật khẩu";
        }

        if($repass == ''){
            $err_repass = "không được để trống ô nhập lại mật khẩu";
        }

        else if($repass != $pass){
            $err_repass = "Mật khẩu bạn nhập không giống với mật khẩu trên";
        }

        if(!isset($err_name) &&  !isset($err_phone) && !isset($err_email) && !isset($err_pass) && !isset($err_repass)){
            echo "Đăng nhập thành công";
        }
        else echo " Đăng nhập chưa thành công";
    }
?>
</div>