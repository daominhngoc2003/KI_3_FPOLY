<?php


$id = $_GET['id'];
// echo $id;


$removeQuery = "delete from users 
where id = '$id' ";

$connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", "root", "");


// 3.1  Nạp câu sql vào kết nối

$stmt = $connect->prepare($removeQuery);
// 3,2 thực thi câu sql với db 

$stmt->execute();

header('location:list-student.php');
?>
