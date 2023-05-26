<?php
    // Đây là file kết nối với cơ swor dữ liệu

    // server chưa cơ sở dữ liệu
    $host = "localhost";

    // user dderer truy cập vào CSDL(database)
    $username = "root";

    // Mật khẩu truy cập
    $password = "";

    // tên cơ sở dữ liệu muốn truy cập
    $dbname = "qlsach";

    try{
        // tạo kết nối
        $conn = new PDO("mysql:host=$host;dbname=$dbname; charset=utf8",$username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
    // catch (\Throwable $th)
    catch(PDOException $th){
        echo $th->getMessage();
        throw new PDOException("Lỗi kết nối dữ liệu");
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lấy dữ liệu</title>
</head>
<body>
    <div>
    <?php
        require_once "bai2.php";

        //Viết câu lệnh sql
        $sql = "SELECT*FROM sach";

        // Chuẩn bị làm việc với sql
        $stmt= $conn->prepare($sql);

        // Thực thi câu lệnh
        $stmt->execute();

        // Lấy dữ liệu
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo "<pre>";
        print_r($result);
    ?>
    <?php
        require_once "bai2.php";

        //Viết câu lệnh sql
        $sql = "SELECT*FROM sach";
        $sql = "SELECT*FROM loaisach";

        // Chuẩn bị làm việc với sql
        $stmt= $conn->prepare($sql);

        // Thực thi câu lệnh
        $stmt->execute();

        // Lấy dữ liệu
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo "<pre>";
        print_r($result);
    ?>
    </div>
</body>
</html>