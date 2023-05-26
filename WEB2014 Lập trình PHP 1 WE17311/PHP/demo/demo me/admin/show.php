<?php
    require_once "../connection.php";

    $sql = "SELECT * from books";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $books = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>book_id</td>
            <td>book_title</td>
            <td>image</td>
            <td>intro</td>
            <td>detail</td>
            <td>page</td>
            <td>price</td>
            <td>cate_id</td>
            <td>
                <a href="add.php">ADD</a>
            </td>
        </tr>
       <?php foreach($books as $book) : ?>
            <tr>
                <td> <?= $book['book_id'] ?> </td>
                <td> <?= $book['book_title'] ?> </td>
                <td> <img src="../image/<?= $book['image'] ?>" width="120" alt=""> </td>
                <td> <?= $book['intro'] ?> </td>
                <td> <?= $book['detail'] ?> </td>
                <td> <?= $book['page'] ?> </td>
                <td> <?= $book['price'] ?> </td>
                <td> <?= $book['cate_id'] ?> </td>
                <td> 
                    <a href="edit.php?book_id=<?= $book['book_id'] ?>">Edit</a>
                    <a onclick="return confirm('Bạn có chắc chắn muốn xóa không');" href="delete.php?book_id=<?= $book['book_id'] ?>">Delete</a> 
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>