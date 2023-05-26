<?php
 require_once  "../admin_connection/connection.php";
    $id = $_GET['id'];

    $sql = "delete from products where id = '$id'";
    $conn = new PDO("mysql:host=$host;dbname=$dbname; charset=utf8", "root", "");
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header("location: show_product.php?msg=Xóa thành công");
?>