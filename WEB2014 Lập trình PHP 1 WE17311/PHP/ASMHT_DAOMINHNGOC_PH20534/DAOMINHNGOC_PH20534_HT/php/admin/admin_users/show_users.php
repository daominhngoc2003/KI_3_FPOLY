<?php
    session_start();
    require_once "../admin_connection/connection.php";

    // Kiểm tra xem người dùng đã đnagư nhập chưa, nếu chưa thì phải login
    if(!isset($_SESSION['username'])){
        header("location: ../admin_page/login.php");
        exit;
    }
    $sql = "SELECT *FROM users";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Lấy dữ liệu
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hiển thị user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        body{
            background-color: lightblue;
        }
        body h1{
            font-weight: 900;
            text-align: center;
            color: blue;
        }
    </style>
</head>
<body>
    <h1>DANH SÁCH NGƯỜI DÙNG</h1>
     <!-- Thông báo hiển thị -->
     <?php  if(isset($_GET['msg'])) : ?>
        <div class="alert bg-success text-white text-center">
            <?= $_GET['msg'] ?>
        </div>
    <?php endif ?>
    <?php  if(isset($_SESSION['username'])) :?>
        <div>
            <a class=" btn btn-info" href="../admin_categories/show_categories.php">categories</a>
            <a class="btn btn-warning" href="../admin_product/show_product.php">Product</a>
        </div>
    <?php endif ?>
    <?php  if(isset($_SESSION['username'])) :?>
        <div>
            Tài khoản: <?= $_SESSION['username'] ?>
            <a style="color: red;" class="btn btn-outline-success" href="../admin_page/logout.php">Thoát</a>
        </div>
    <?php endif ?>
   
    
    <table  class="table table-primary">
        <tr>
            <th>ID</th>
            <th>Mã người dùng</th>
            <th>username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Address</th>
            <th>Sex</th>
            <th>Image</th>
            <th>
                <a href="add_users.php" class="btn btn-primary" >Thêm user</a>
            </th>
                        
        </tr>


        <!-- Đổ duwx liệu vào -->
        <?php foreach($users as $user) :?>
                <tr>
                    <td> <?= $user['id']?> </td>
                    <td> <?= $user['manguoidung']?> </td>
                    <td> <?= $user['username'] ?> </td>
                    <td>  <?= $user['email'] ?> </td>
                    <td>  <?= $user['password'] ?> </td>
                    <td>  <?= $user['address'] ?> </td>
                    <td>  <?= $user['gender'] ?> </td>
                    <td>
                        <img src="../../../img/<?= $user['image'] ?>" width="200" height="150" alt="">
                    </td>
                    <td>
                        <a href="edit_users.php?id=<?= $user['id']?>"  class="btn btn-danger"> Sửa</a>
                        <a onclick="return confirm('bạn có chắc chắn xóa không')" href="delete_users.php?id=<?=$user['id']?>" class="btn btn-success">Xóa</a>
                    </td>
                </tr>
        <?php endforeach ?>
    </table>
</body>
</html>