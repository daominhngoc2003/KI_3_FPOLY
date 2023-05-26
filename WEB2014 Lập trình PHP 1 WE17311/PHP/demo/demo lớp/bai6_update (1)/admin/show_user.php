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
    <div class="container">
        <h1>Danh sách các người dùng</h1>
        <?php if (isset($_GET['msg'])) : ?>
            <div class="alert bg-success">
                <?= $_GET['msg'] ?>
            </div>
        <?php endif ?>
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
                        <img src="../images/<?= $user['avatar'] ?>" width="123">
                    </td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['address'] ?></td>
                    <td><?= $user['sex'] ?></td>
                    <td>
                        <a href="sua_user.php?id=<?= $user['id'] ?>" class="btn btn-primary">Sửa</a>
                        <a onclick="return confirm('bạn có chắc xóa không?')" href="xoa_user.php?id=<?= $user['id'] ?>" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>

</html>