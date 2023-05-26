<?php
    // truy cập đến trang lấy dữ liệu sql
    require_once  "../admin_connection/connection.php";

    // Tiến hành kiểm tra lấy dữ liệu hoàn thành chương trình
    if(isset($_POST['btn_luu'])){
        $manguoidung = $_POST['manguoidung'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];

        // lấy tên ảnh cũ
        $image = $_FILES['image'];
        
        if($image['size']>0){
            $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
            if($ext != 'jpg' && $ext != 'ext' && $ext != 'png' && $ext='JPG'){
                $image_err = "Ảnh không đúng định dạng";
            }
        }
        else $image_err = "Bạn chưa nhập ảnh";

        // kiểm tra image
        if(!isset($image_err)){
            var_dump($_POST);
            $image_name = $image['name'];
            $sql = "INSERT INTO users(manguoidung,username,email,password,address,gender, image) 
            VALUES('$manguoidung','$username','$email','$password','$address','$gender', '$image_name')";
    
             // Chuẩn bị
            $stmt = $conn->prepare($sql);
             // Thực thi
            $stmt->execute();
            
            // Upload file ảnh
            move_uploaded_file($image['tmp_name'], '../../../img/' . $image_name);
    
            // Chuyển hướng đến trang hiển thị
            header("location: show_users.php?msg=Thêm dữ liệu thành công");
            die;
        }
    }
    
?>


<!--  trang html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
</head>
<body style="background-color: lightblue;">
    <h1 style="text-transform: uppercase; text-align:center; font-weight:900">thêm người dùng</h1>
    <div style="width: 500px; margin: 0 auto">
    <a class="btn btn-success" href="show_users.php">Danh sách users</a>
    <form action="" method="post" enctype="multipart/form-data">
        mã người dùng <input style="width: 100%;" type="text" name="manguoidung">
        <br>
        username : <input style="width: 100%;" type="text" name="username">
        <br>
        email : <input style="width: 100%;" type="text" name="email">
        <br>
        password  : <input  style="width: 100%;" type="text" name="password">
        <br>
        address : <input style="width: 100%;" type="text" name="address">
        <br>
        image: <input type="file" name="image" id="">
        <?php if(isset($image_err)) : ?>
            <span style="color: red;">
                <?= $image_err ?>
            </span>
        <?php endif ?>
        <br>
        Sex :
        <select name="gender" id="">
            <option value="Nam">Nam</option>
            <option value="Nữ">Nữ</option>
        </select>
        <br>
        <button type="submit" style="width: 100%;" name="btn_luu">Lưu</button>
    </form>
    </div>
</body>
</html>