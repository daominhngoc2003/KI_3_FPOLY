<?php

try{
    $conn = new PDO("mysql:host=localhost;dbname=thu;charset=utf8","root","");
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
 catch(PDOException $t){
    echo "lỖi kết nối:" .$t->getMessage();
 }