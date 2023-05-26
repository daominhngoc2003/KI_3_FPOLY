<?php
require_once "../connection.php";
$sql = "SELECT * FROM users";

$stmt = $conn->prepare($sql);
$stmt->execute();

//Lấy dữ liệu
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiển thị users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <h1>Danh sách các người dùng</h1>
    <table class="table">
        <tr>
            <th>Mã User</th>
            <th>Tài khoản</th>
            <th>Ảnh</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Giới tính</th>
            <th>
                <a href="add_user.php" class="btn btn-success">Thêm user</a>
            </th>
        </tr>

        <!-- Đổ dữ liệu -->
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['username'] ?></td>
                <td>
                    <img src="../images/<?= $user['avatar'] ?>" alt="">
                </td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['address'] ?></td>
                <td><?= $user['sex'] ?></td>
                <td>
                    <a href="sua_user.php?id=<?= $user['id'] ?>" class="btn btn-primary">Sửa</a>
                    <a href="xoa_user.php?id=<?= $user['id'] ?>" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>