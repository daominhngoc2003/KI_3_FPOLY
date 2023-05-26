<?php
     
    try{
        $conn = new PDO("mysql:host=localhost;dbname=masv_examphp1;charset=utf8","root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $th){
        echo "Lỗi kết nối" .$th->getMessage();
    }
?>