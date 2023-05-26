<?php
    require_once "./connection.php";
    $sql = "select p.*, c.category_name as cate_name from
    products p 
    join category c on p.cate_id = c.id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
            <th>id</th>
            <th>product_name</th>
            <th>description</th>
            <th>price</th>
            <th>image</th>
            <th>cate_id</th>
            <th><a href="add.php">Thêm</a></th>
        </tr>
        
        <?php foreach($products as $product): ?>
            <tr>
                <td> <?= $product['id'] ?> </td>
                <td> <?= $product['product_name'] ?> </td>
                <td> <?= $product['description'] ?> </td>
                <td> <?= $product['price'] ?> </td>
                <td>
                    <img src="./image/<?= $product['image'] ?>" width="120" alt="">    
                </td>
                <td> <?= $product['cate_name'] ?> </td>
                <td>
                    <a onclick="return confirm('Bạn có chắc chắn muốn xóa')" href="delete.php?id=<?= $product['id'] ?>">Xóa</a>    
                    <a href="edit.php?id=<?= $product['id'] ?>">sửa</a>
                </td>
            </tr>
        <?php endforeach ?>
        </table>
</body>
</html>