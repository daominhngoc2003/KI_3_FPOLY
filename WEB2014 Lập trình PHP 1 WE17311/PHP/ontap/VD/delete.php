<?php

    require_once "connection.php";

    $book_id = $_GET['book_id'];

    $sql = "DELETE FROM books where book_id=$book_id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();


    header("location: show.php?msg=Xóa thành công");
?>