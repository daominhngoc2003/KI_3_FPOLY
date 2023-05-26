<?php
session_start();

//sử dung session
//kiểm tra sụ tồn tại của session
if (isset($_SESSION['username'])){
    echo "<h2>Xin chao". $_SESSION['username'] ."</h2>";
    echo "<a href='huy_session.php'>Huy session</a>";
}else{
    echo "Khong ton tai";
}