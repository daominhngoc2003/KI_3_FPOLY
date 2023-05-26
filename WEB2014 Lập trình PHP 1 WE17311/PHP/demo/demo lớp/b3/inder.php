<?php
//Hàm php  ko tham so
function show(){

    echo "<h2>Chào thế giới</h2>";
}
//Ghi hàm 
show();
// hàm có tham số
function show1($ctx){
echo $ctx;
}
echo show1("Xin chào các bạn");

// hàm có giá trị trả về 
function show3($msg){
   
return $msg;
echo "abs";
}
echo show3("Hello");
//
function show4($msg="Sơn"){
    echo "<h1>Xin chào $msg</h1>";
}
show4();
//
function myName($a, $b = 'Nam', $c = 'Hồng'){
    echo "<h2>$a $b $c</h2>";
}
myName(a:'Thơm', c: 'Nga');
//Hàm không có tham số chuyền vào
function tingTong(){
    //lấy cáC tha, số của hàm 
    $arr = func_get_args();
    $tong =0;
    for($i=0;$i<count($arr) ; $i++){
        $tong += $arr[$i];
    }
    return $tong;
}
echo "<h2> Tông là :".tingTong(4,5,32,6,6,3) ."</h2>";
//hàm số bất định
function showName(...$name){
    echo "<pre>";
    print_r($name);
}
showName('Ngọc', 'Tùng', 'Huyền', 'thanh');
//Biến toàn cục
$x = "Hello PHP";
function hello(){
    global $x; //Muốn dung ở trong
    $x ="Xin chào  lập trình PHP";

}
hello();
echo"<h2>".$x."</h2>";

//Hàm không định danh 
$xinchao =function(){
    echo "<h1>Xin chào FPT Poly</h1>";
} ;
// gọi hàm 
$xinchao('HANV');
// callback function
function myCallback($callback){
    $callback();
}
//Gọi hàm cách 1
myCallback( function(){
    echo "Show infomattion <br>";
});
// Gọi hàm cách 2
//Xây dựng sẵn môt j hàm callback
function information(){
    echo "Show information 2 <br>";
}
myCallback('information');

//
$a = 9;
function abc(&$b,$c)
{ $b=$b+$c;
return $b;
}
abc($a,2);