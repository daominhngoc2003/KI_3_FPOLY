<?php
    require_once "./connection.php";
    $sql = "SELECT b. *, a.  as author from books b join authors a on b.author_id =a.author_id";
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
            <th>book_id</th>
            <th>book_title</th>
            <th>price</th>
            <th>image</th>
            <th>intro</th>
            <th>content</th>
            <th>page</th>
            <th>author_id</th>
            <th><a href="add.php">Thêm</a></th>
        </tr>
        <?php foreach($books as $book): ?>
            <tr>
                <td> <?= $book['book_id'] ?> </td>
                <td> <?= $book['book_title'] ?> </td>
                <td> <?= $book['price'] ?> </td>
                <td><img src="./images/<?= $book['image'] ?>" width="120" alt=""> </td>
                <td> <?= $book['intro'] ?> </td>
                <td> <?= $book['content'] ?> </td>
                <td> <?= $book['page'] ?> </td>
                <td> <?= $book['author'] ?> </td>
                <td>
                    <a onclick="return confirm('Bạn có xoá k')" href="delete.php?id=<?= $book['book_id'] ?>">Xóa</a>
                    <a href="edit.php?id=<?= $book['book_id'] ?>">Sửa</a>
                </td>
            </tr>
            <?php endforeach?>
    </table>
</body>
</html>