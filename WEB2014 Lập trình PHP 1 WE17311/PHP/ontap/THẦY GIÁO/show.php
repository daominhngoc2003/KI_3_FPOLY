<?php
    require_once "connection.php";

    //SQL select
    $sql = "Select * From products";
    //Chuẩn bị
    $stmt = $conn->prepare($sql);
    //Thực thi
    $stmt->execute();
    //Lấy dữ liệu
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
</head>

<body>
    <h1>Danh sách sản phẩm</h1>
    <table border="1">
        <tr>
            <th>#ID</th>
            <th>product Name</th>
            <th>Image</th>
            <th>Price</th>
            <th>Description</th>
            <th>Category</th>
            <th>
                <a href="add.php">Add Product</a>
            </th>
        </tr>

        <?php foreach ($products as $p) : ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= $p['product_name'] ?></td>
                <td>
                    <img src="images/<?= $p['image'] ?>" width="120" alt="">
                </td>
                <td><?= $p['price'] ?></td>
                <td><?= $p['description'] ?></td>
                <td><?= $p['cate_id'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $p['id'] ?>">Edit</a> 
                    <a onclick="return confirm('Bạn có chắc chắn xóa không?')" href="delete.php?id=<?= $p['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>