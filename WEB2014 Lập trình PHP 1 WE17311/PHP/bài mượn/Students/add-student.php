

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sinh viên</title>
    <link rel="stylesheet" href="../css/style1.css">
</head>

<body>
    <div class="container-add">
        <h1>Thêm sinh viên</h1>
        <form action="save-add.php" method="post">
            <div>
                <p>Họ tên</p>
                <input type="text" name="name" placeholder="Nhập họ tên sinh viên...">
            </div>
            <div>
                <p>Email</p>
                <input type="text" name="email" placeholder="Nhập email sinh viên...">
            </div>
            <div>
                <p>Avatar</p>
                <input type="file" name="avatar">
            </div>
            <div>
                <button type="submit">Xác nhận</button>
            </div>
        </form>
    </div>
</body>

</html>

