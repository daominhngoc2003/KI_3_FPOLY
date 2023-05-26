<?php
echo "Xin chào bạn <br>";
//khai báo biến
$x =1;
$y = 2.5;
$z ="Hello";
$b = true;
//Nối chuỗi dùng dấu chấm
$kq = $z . $y ;
$r = $z ." ". $x;
//Nhũng mã html
echo "<br />";
echo $kq,"<br />", $r;
//Dấu $ và $$
$abc = "Hello";
$$abc = "Xin chào bạn";
$$$abc = "Tạm biệt";
echo "<br />", $abc, "<br />" , $$abc, "<br/>",$$$abc;

//hằng 
define('chuvi' ,'500');
echo chuvi;
?>