<?php
require_once "./connection.php";
$id = $_GET['id'];
$sql = "delete from books where book_id = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
header("location:show.php");