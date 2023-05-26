<?php
//1. Tạo câu sql để lấy dữ liệu từ db
$sqlQuery = "select * from users";
// 2. Tạo kết nối từ php => mysql
$connect = new PDO(
    "mysql:host=127.0.0.1;dbname=php1;charset=utf8",
    "root",
    ""
);

//3.1 Nạp câu sql vào kết nối
$stmt = $connect->prepare($sqlQuery);
//3.2 Thực thi câu sql với db
$stmt->execute();

// 4. Nhận dữ liệu trả về từ câu sql
$data = $stmt->fetchAll(); //Lấy về tất cả các bản ghi tìm được từ câu sql
// $data = $stmt->fetch(); // lấy ra 1 bản ghi đầu tiên tìm được từ câu sql

// echo "<pre>";
// var_dump($data);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>DS sinh viên</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/style1.css'>
    <script src='main.js'></script>
</head>
<body>
<div class="container-edit">
<h1>Danh sách sinh viên</h1>
    <table  class="styled-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Họ tên</th>
                <th>Email</th>
                <th>Avatar</th>
                <th><a href="add-student.php" class="add-th">Thêm</a></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $value) : ?>
                <tr>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['name'] ?></td>
                    <td><?= $value['email'] ?></td>
                    <td><img src="<?= $value['avatar'] ?>" alt="Ảnh sinh viên"></td>
                    <td class="btn-option">
                        <a class="edit-btn" href="edit-student.php?id=<?= $value['id'] ?>">Sửa</a>
                        <a class="remove-btn" href="remove-student.php?id=<?= $value['id'] ?>">Xóa</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    </div>
</body>
</html>




    
