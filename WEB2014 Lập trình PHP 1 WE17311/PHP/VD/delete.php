<?php
    require_once "./connection.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM products where id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header("location:show.php");
?>