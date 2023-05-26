<?php
//Thiết đặt tham timezone
date_default_timezone_set("Asia/Ho_Chi_Minh");
//Hàm time và thời gian hiện tại theo kiểu int 
$date = time();
echo $date;
//Hàm date trả về ngày tháng năm giờ phút giây, theo dang 
$date_tr = date('d-m-Y H:i:s', $date);
echo "<br/>date tring :".$date_tr; 

// 
$str_d = "2022-12-12";
//chuyển chuỗi ngày tháng sang integer
$date_int = strtotime($str_d);
echo "<br>$str_d : $date_int";

// Tính ngày hôm  qua
$date_to = date ("d-m-Y", time()- 60*60*24);
echo "<br> Ngày hôm qua :". $date_to;

//vidu về empty
$b ="";
if(empty($b)){
    echo  "Biến b không tồn tạI hoặc rỗng";
}else {
    echo "Biến $b không rỗng";
}

$name ??= 'Urknow'; //if(!iset ($name)) ($name = 'Urknow';)
echo "<br> name: ". $name; 