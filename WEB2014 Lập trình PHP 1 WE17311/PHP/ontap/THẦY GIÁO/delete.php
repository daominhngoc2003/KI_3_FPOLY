<?php
require_once "connection.php";

$id = $_GET['id'];

$sql = "DELETE FROM products WHERE id=$id";
$stmt = $conn->prepare($sql);
$stmt->execute();

$msg = "Xóa dữ liệu thành công";
header("location: show.php?msg=$msg");
exit;
