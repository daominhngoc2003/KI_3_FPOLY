<?php

//Nhận dữ liệu từ form

$name = $_POST['name'];
$email = $_POST['email'];
$avatar = $_POST['avatar'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

//Xây dựng câu SQl để insert
$insertQuery = "INSERT INTO users(name, email, avatar, password) VALUES ('$name','$email','$avatar','$password')";

//Tạo kết nối & thực thi câu lệnh với db
$connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", "root", "");


// 3.1  Nạp câu sql vào kết nối

$stmt = $connect->prepare($insertQuery);
// 3,2 thực thi câu sql với db 

$stmt->execute();

header('location:list-student.php');
?>