<?php
require_once "../connection.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id=$id";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    //Chuyển hướng
    $msg = "Xóa dữ liệu thành công";
    header("location: show_user.php?msg=$msg");
    exit();
} else {
    $msg = "Không nhận được dữ liệu để xóa";
    header("location: show_user.php?msg=$msg");
    exit();
}
