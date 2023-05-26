<?php
//inclide file connection 
require_once "connection.php";
//viêt câu lệnh SQL
$sql = "SELECT * FROM users";
//chuẩn bị làm việc với spl
$stmt = $conn->prepare($sql);

//thuẹc thi cậu lệnh
$stmt->execute();
//lấy dữ liệu 
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>