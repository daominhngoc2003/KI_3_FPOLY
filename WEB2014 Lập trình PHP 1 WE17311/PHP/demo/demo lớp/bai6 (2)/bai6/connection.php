<?php
//Đây là file dùng để kết nối Cơ sở dữ liệu (CSDL)

//Server chứa cơ sở dữ liệu
$host = "localhost";
//Username để truy cập vào CSDL
$username = "root";
//Mật khẩu truy cập
$password = "";
//Tên CSDL muốn truy cập
$dbname = "we17311_php1";

try {
    //Tạo kết nối
    $conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);
    //Đặt thông báo lỗi
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $th) {
    echo $th->getMessage();
    throw new PDOException("Lỗi kết nối dữ liệu");
}
