<?php
    // Đây là file kết nối với cơ sở dữu liệu

    //Server chứa cơ sở dữ liệu
    $host = "localhost";
    // User để truy cập vào CSDL(database)
    $username = "root";
    //Mật khẩu truy cập
    $password = "";
    // Tên cơ sở dữ liệu muốn truy cập
    $dbname = "asignment";
    
    try{
        //tạo kết nối
        $conn = new PDO("mysql:host=$host;dbname=$dbname; charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    //  catch (\Throwable $th){
    catch(PDOException $th){
        echo $th->getMessage();
        throw new PDOException("Lỗi kết nối dữ liệu");
} 