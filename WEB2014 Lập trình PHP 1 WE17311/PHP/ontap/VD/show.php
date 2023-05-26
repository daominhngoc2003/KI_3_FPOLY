<?php

    require_once "connection.php";
    $sql = "SELECT * FROM books";
    $stmt= $conn->prepare($sql);
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
    <div>
        <table border="1">
            <tr>
                <th>book_id </th>
                <th>book_title</th>
                <th>image</th>
                <th>intro</th>
                <th>detail</th>
                <th>page</th>
                <th>price</th>
                <th>cate_id</th>
                <th> <a href="add.php">ADD BOOKS</a> </th>
            </tr>

            <?php foreach($books as $book) :?>
                <tr>
                    <td><?= $book['book_id'] ?></td>
                    <td><?= $book['book_title'] ?></td>
                    <td> <img src="image/<?= $book['image'] ?>" width="120" alt=""></td>
                    <td><?= $book['intro'] ?></td>
                    <td><?= $book['detail'] ?></td>
                    <td><?= $book['page'] ?></td>
                    <td><?= $book['price'] ?></td>
                    <td><?= $book['cate_id'] ?></td>
                    <td>
                        <a onclick="return confirm('Bạn có chắc chắn xóa không')" href="delete.php?book_id=<?= $book['book_id'] ?>">DELETE</a>
                        <a href="fix.php?book_id=<?= $book['book_id'] ?>">FIX</a>
                    </td>
                </tr>
                
            <?php endforeach ?>
        </table>
    </div>
</body>
</html>