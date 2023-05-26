<?php
    require_once "../admin_connection/connection.php";

    // Kiểm tra xem người dùng đã đnagư nhập chưa, nếu chưa thì phải login

    $sql = "SELECT *FROM categories";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Lấy dữ liệu
    $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hiển thị categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  
</head>
<body>
    <h1 style="font-weight: 900; text-align:center">DANH SÁCH CATEGORIS</h1>
     <!-- Thông báo hiển thị -->
     <?php  if(isset($_GET['msg'])) : ?>
        <div class="alert bg-success text-white text-center">
            <?= $_GET['msg'] ?>
        </div>
    <?php endif ?>
        <div>
            <a class="btn btn-warning" href="../admin_users/show_users.php">users</a>
            <a class="btn btn-info" href="../admin_product/show_product.php">Product</a>
        </div>
   
    
    <table  class="table table-danger">
        <tr>
            <td>cate_id</td>
            <td>cate_name</td>
            <td>
                <a href="add_categories.php" class="btn btn-primary" >Thêm categories</a>
            </td>
                        
        </tr>


        <!-- Đổ duwx liệu vào -->
        <?php foreach($categories as $categori) :?>
                <tr>
                    <td> <?= $categori['cate_id']?> </td>
                    <td> <?= $categori['cate_name']?> </td>
                    <td>
                        <a href="edit_categories.php?id=<?= $categori['cate_id']?>"  class="btn btn-danger"> Sửa</a>
                        <a onclick="return confirm('bạn có chắc chắn xóa không')" href="delete_categories.php?id=<?=$categori['cate_id']?>" class="btn btn-success">Xóa</a>
                    </td>
                </tr>
        <?php endforeach ?>
    </table>
</body>
</html>