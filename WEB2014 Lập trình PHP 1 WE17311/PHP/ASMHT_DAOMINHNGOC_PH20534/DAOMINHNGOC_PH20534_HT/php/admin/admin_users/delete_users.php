<?php
 require_once  "../admin_connection/connection.php";
    $id = $_GET['id'];

    $sql = "delete from users where id = '$id'";
    $conn = new PDO("mysql:host=$host;dbname=$dbname; charset=utf8", "root", "");
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header("location: show_users.php?msg=Xóa thành công");
?>