<?php
if(isset($_POST['tinhtien'])){
    $slcari = $_POST['slcari'];
    $slrausao = $_POST['slrausao'];
    $slcakho = $_POST['slcakho'];
    $slcom =$_POST['slcom'];
    $cari = $slcari *15000;
    $rausao = $slrausao *5000;
    $cakho = $slcakho *25000;
    $com = $slcom *10000;
    $tongtien = $cari+$rausao+$cakho+$com;
    //hiển thị
    echo "Số tiền cari: <b>$cari</b><br>";
    echo "Số tiền rau sào: <b>$rausao</b><br>";
    echo "Số tiền cá kho: <b>$cakho</b><br>";
    echo "Số tiền cơm: <b>$com</b><br>";
    echo "Số tiền phải trả tất cả: <b>$tongtien</b><br>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="bai4.php" method="POST" class="w-60 mx-auto bg-red">
   <table border="0" class="p-10  text-white">
       <tr>
        <td  colspan="3"class="text-center">BẢNG TÍNH TIỀN</td>
       </tr>
       <tr>
        <td class=" w-40">Tên món </td>
        <td class=" w-20">Đơn giá</td>
        <td> Số lượng</td>
       </tr>
       <tr>
        <td>cà ri</td>
        <td>15000 đ</td>
        <td><input type="number" name="slcari" placeholder="0" class="outline-none" placeholder="0"></td>
       </tr>
       <tr>
        <td>rau sào </td>
        <td>5000 đ</td>
        <td><input type="number" name="slrausao" placeholder="0" class="outline-none" placeholder="0"></td>
       </tr>
       <tr>
        <td>cá kho </td>
        <td>25000 đ</td>
        <td><input type="number" name="slcakho" placeholder="0" class="outline-none" placeholder="0"></td>
       </tr>
       <tr>
        <td>Cơm </td>
        <td>10000 đ</td>
        <td><input type="number" name="slcom" placeholder="0" class="outline-none" placeholder="0"></td>
       </tr>
       <tr>
        <td colspan="1">Tổng tiền thanh toán</td>
        <td></td>
        <td>0 đ</td>
       </tr>
       <tr>
           <td><button type="submit" name="tinhtien">Tính tiền</button></td>
       </tr>
   </table>
   </form>
   <div>
   <?php
      if(isset($sodem)){
        echo "Số tiền cari: <b>$cari</b><br>";
        echo "Số tiền rau sào: <b>$rausao</b><br>";
        echo "Số tiền cá kho: <b>$cakho</b><br>";
        echo "Số tiền cơm: <b>$com</b><br>";
        echo "Số tiền phải trả tất cả: <b>$tongtien</b><br>";
       }
   ?>
   </div>
</body>
</html>>