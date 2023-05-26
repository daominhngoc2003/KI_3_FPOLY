<?php
    session_start();
    require_once "connection.php";

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $product_name = $_POST['product_name'];
        $quantity = $_POST['quantity'];

        $sql = "SELECT * FROM products WHERE product_name= '$product_name'";

        // chuẩn bị
        $stmt = $conn->prepare($sql);
        // Thực thi
        $stmt->execute();

        // lấy dữ liệu
        $product = $stmt->fetch(PDO::FETCH_ASSOC);

        // Kiểm tra xem user xem có tồn tại k
        if($product){
            // Kiểm tra mật khẩu
        if($product['quantity'] == $quantity){
            // tạo session
            $_SESSION['product_name'] = $product_name; //có thể lưu giữu cả mảng =$user
            header("location: admin/show_user.php");
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
        product_name: <input type="text" name="product_name" value="<?=  isset($product_name) ? $product_name : ''  ?>">
        <br>
        quantity: <input type="quantity" name="quantity" >
        <br>
        <button type="submit" name="btn_login">LOGIN</button>
    </form>
</body>
</html>