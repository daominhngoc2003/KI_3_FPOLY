<?php

if(isset($_POST['tinhtien'])){
    $sodem = $_POST['sodem'];
    $tongtien = $sodem * 860000;

    //Hiển thị
    echo "Số đêm: <b>$sodem</b> <br>";
    echo "Tổng tiền phải trả: <b>$tongtien đ</b>  <br>";
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
    <form action="bai3.php" method ="POST">
        <input type="number" name="sodem" placeholder="0">
        <br>
        <button type="submit" name="tinhtien">Tính tiền</button>
    </form>
    <div>
        <?php
        if(isset($sodem)){
            echo "Số đêm: <b>$sodem</b> <br>";
            echo "tổng tiền phải trả: <b>$tongtien đ</b>";
        }
        ?>
    </div>
</body>
</html>>