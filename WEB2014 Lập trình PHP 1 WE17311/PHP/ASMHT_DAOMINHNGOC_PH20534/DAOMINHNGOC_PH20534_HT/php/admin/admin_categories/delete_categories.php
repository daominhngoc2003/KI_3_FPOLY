<?php
 require_once  "../admin_connection/connection.php";
    $cate_id = $_GET['cate_id'];

    $sql = "delete from categories where cate_id = '$cate_id'";
    $conn = new PDO("mysql:host=$host;dbname=$dbname; charset=utf8", "root", "");
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header("location: show_categories.php?msg=Xóa thành công");
?>