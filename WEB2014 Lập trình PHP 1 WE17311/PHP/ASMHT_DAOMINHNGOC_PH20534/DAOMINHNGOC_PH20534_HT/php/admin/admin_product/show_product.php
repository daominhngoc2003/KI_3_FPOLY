<?php
    require_once "../admin_connection/connection.php";
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
    <title>hiển thị product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  
</head>
<body>
    <h1 style="font-weight: 900; text-align:center">DANH MỤC SẢN PHẨM</h1>
     <!-- Thông báo hiển thị -->
     <?php  if(isset($_GET['msg'])) : ?>
        <div class="alert bg-success text-white text-center">
            <?= $_GET['msg'] ?>
        </div>
    <?php endif ?>
        <div>
            <a  class="btn  btn-primary" href="../admin_categories/show_categories.php">categories</a>
            <a class="btn btn-success" href="../admin_users/show_users.php">users</a>
        </div>

    
    <table  class="table table-info">
        <tr>
            <td>ID</td>
            <td>mã sản phẩm</td>
            <td>tên sản phẩm</td>
            <td>Ảnh</td>
            <td>Size</td>
            <td>Số lượng</td>
            <td>Đơn vị</td>
            <td>
                <a href="add_product.php" class="btn btn-primary" >Thêm sản phẩm</a>
            </td>
        </tr>
       


        <!-- Đổ duwx liệu vào -->
        <?php foreach($products as $product) :?>
                <tr>
                    <td> <?= $product['id']?> </td>
                    <td> <?= $product['masanpham'] ?> </td>
                    <td>  <?= $product['nameproduct'] ?> </td>
                    <td>
                        <img src="../../../img/<?= $product['image'] ?>" width="250" height="230" alt="">
                    </td>
                    <td>  <?= $product['size'] ?> </td>
                    <td>  <?= $product['quantity'] ?> </td>
                    <td>  <?= $product['unit'] ?> </td>
                    
                    
                <td>
                        <a href="edit_product.php?id=<?= $product['id']?>"  class="btn btn-danger"> Sửa</a>
                        <a onclick="return confirm('bạn có chắc chắn xóa không')" href="delete_product.php?id=<?=$product['id']?>" class="btn btn-success">Xóa</a>
                    </td>
                </tr>
        <?php endforeach ?>
    </table>
</body>
</html>