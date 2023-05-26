<?php
    require_once "../connection.php";
    $id = $_GET['book_id'];

    $sql = "DELETE FROM books WHERE book_id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header("location:show.php?msg=Xóa thành công");
?>