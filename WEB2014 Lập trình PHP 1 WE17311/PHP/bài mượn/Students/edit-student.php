<?php


$id = $_GET['id'];
// echo $id;


$sql = "select * from users 
where id ='$id'";

$connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", "root", "");


// 3.1  Nạp câu sql vào kết nối

$stmt = $connect->prepare($sql);
// 3,2 thực thi câu sql với db 

$stmt->execute();

// 4 nhận dữ liệu trả về từ cầu sql 

$data = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin</title>
    <link rel="stylesheet" href="../css/style1.css">
</head>

<body>
<div class="container-add">
<h1>Sửa thông tin sinh viên</h1>
        <form action="save-edit.php" method="post">
            <?php foreach ($data as $value) : ?>
                <input type="hidden" name="id" value="<?= $id ?>">
                <div>
                    <p>Họ tên</p>
                    <input type="text" name="name"  value="<?= $value['name'] ?>" ?>
                </div>
                <div>
                    <p>Email</p>
                    <input type="text" name="email" value="<?= $value['email'] ?>" ?>
                </div>
                <div>
                    <p>Avatar</p>
                    <input type="file" name="avatar" value="<?= $value['avatar'] ?>" ?>
                </div>
              
                <div>
                    <button type="submit">Xác nhận</button>
                </div>
            <?php endforeach; ?>
        </form>
    </div>
</body>

</html>

