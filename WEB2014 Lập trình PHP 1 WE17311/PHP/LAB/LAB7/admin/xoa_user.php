<?php
 require_once  "../connection.php";
    
 if(isset($_GET['product_id'])){
    $product_id = $_GET['product_id'];
    $sql = "delete from products where product_id = '$product_id'";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // chuyển hướng
    $msg = "Xóa dữ liệu thành công";
    header("location: show_user.php?msg=$msg");
    exit();
 }
 else {
    $msg = "Không nhận được dữ liệu xóa";
    header("location: show_user.php?msg=$msg");
    exit();
 }
?>