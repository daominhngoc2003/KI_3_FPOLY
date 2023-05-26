<?php
//lấy dữ liệu phương thức 
if(isset($_POST['tinhhoahong'])){
    $tongdoanhso = $_POST['tongdoanhso'];
    $hoahong5 = $tongdoanhso*5;
    $hoahong10 = $tongdoanhso*10;
    $hoahong15 = $tongdoanhso*15;

    //in ra
    echo "Tổng doanh số: <b>$tongdoanhso</b><br>";
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
</head>
<body>
    <form action="bai1.php" method="POST">
        <label for="">Tổng doanh số</label>
        <input type="text" name="tongdoanhso">
        <br>
        <button type="submit" name ="tinhhoahong">Tính hoa hồng</button>
    </form>
    <div>
        <?php
        if(isset($tongdoanhso)){
           if($tongdoanhso<=100000000){
            echo "Hoa hồng: $hoahong5 <br>";
           }
           else if($tongdoanhso<=300000000){
            echo "Hoa hồng: $hoahong10 <br>";
           }
           else echo "Hoa hồng: $hoahong15";
        }
        ?>
    </div>
</body>
</html>>

