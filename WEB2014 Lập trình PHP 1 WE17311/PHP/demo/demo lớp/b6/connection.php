<?php
//Đây là file được kết nối với cơ sở dữ liệu 
//Sever chứa đưc liệu 
$host='localhost';
//UserName để tru câoj vào cơ sỏ duz liệu 
$username='root';
//mật khẩu truy cập 
$password="";
//tên CSDL muốn truy cập 
$dbname = "web17311_php1";
try{
    //tạo kết nối 
    $conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8",$username,$password);
    //đặt thông tin báo lôi
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch (PDOException $th){
    echo $th->getMessage();
    throw new PDOException("Lỗi kết nôi dưc liệu");

}