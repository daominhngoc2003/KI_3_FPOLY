<?php
//kiểm tra sự tồn tại của session 
if (isset($_COOKIE['username'])){
    echo "<h2>Xin chao". $_COOKIE['username'] ."</h2>";
    echo "<a href='huy_cookie.php'>Huy cookie</a>";
}   else{
    echo "cookie không tồn tại";
}