<?php
    require_once "../connection.php";
    $sql = "SELECT *FROM products";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Lấy dữ liệu
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hiển thị products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
    <h1 class="card-body" style="text-transform: uppercase; text-align: center ;">List product</h1>
     <!-- Thông báo hiển thị -->
     <?php  if(isset($_GET['msg'])) : ?>
        <div class="alert bg-success text-white text-center">
            <?= $_GET['msg'] ?>
        </div>
    <?php endif ?>
    
    <table  class="table">
        <tr>
            <th>product_id</th>
            <th>product_name</th>
            <th>price</th>
            <th>quantity</th>
            <th>image</th>
            <th>description</th>
            <th>cate_id</th>
            <td>
                <a href="add_user.php" class="btn btn-primary" >Add product</a>
            </td>
                        
        </tr>


        <!-- Đổ duwx liệu vào -->
        <?php foreach($products as $product) :?>
                <tr>
                    <td> <?= $product['product_id']?> </td>
                    <td> <?= $product['product_name'] ?> </td>
                    <td>  <?= $product['price'] ?> </td>
                    <td>  <?= $product['quantity'] ?> </td>
                    <td>
                        <img src="../image/<?= $product['image'] ?>" width="300" alt="">
                    </td>
                    <td> <?= $product['description'] ?> </td>
                    <td> <?= $product['cate_id'] ?> </td>
                    <td>
                        <a href="sua_user.php?product_id=<?= $product['product_id']?>"  class="btn btn-danger"> Sửa</a>
                        <a onclick="return confirm('bạn có chắc chắn xóa không')" href="xoa_user.php?product_id=<?=$product['product_id']?>" class="btn btn-success">Xóa</a>
                    </td>
                </tr>
        <?php endforeach ?>
    </table>
</body>
</html>