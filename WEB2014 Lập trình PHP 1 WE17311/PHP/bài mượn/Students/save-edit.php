<?php

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$avatar = $_POST['avatar'];
$password = $_POST['password'];

$sqlQuery = "update users set
name='$name',
email='$email',
avatar='$avatar',
password='$password'
where id='$id'
";


$connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", "root", "");


// 3.1  Nạp câu sql vào kết nối

$stmt = $connect->prepare($sqlQuery);
// 3,2 thực thi câu sql với db 

$stmt->execute();

header('location:list-student.php');
?>