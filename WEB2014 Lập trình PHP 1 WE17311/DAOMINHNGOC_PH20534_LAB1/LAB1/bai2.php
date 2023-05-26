<?php
//lấy dữ liệu phương thức post
if(isset($_POST['kiemtra'])){
    $diemgk = $_POST['diemgk'];
    $diemck = $_POST['diemck'];
    $diemtb = ($diemgk+$diemck)/2;

    
    //in ra
    echo "Điểm giữa kỳ: <b>$diemgk</b><br>";
    echo "Điểm cuối kỳ: <b>$diemck</b><br>";
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
    <form action="bai2.php" method="POST">
        <label for="">Điểm thi giữa kì</label>
        <input type="text" name ="diemgk">
        <br>
        <label for="">Điểm thi cuối kì</label>
        <input type="text" name ="diemck">
        <br>
        <button type="submit" name="kiemtra">Kiểm tra</button>
    </form>
    <div>
         <?php
         if(isset($diemgk)){
            if($diemtb>=9){
                echo "Bậc A";
            }
            else if($diemtb>=7 &&$diemtb< 9){
                echo "bậc B";
            }
            else if($diemtb>=5 &&$diemtb< 7){
                echo "bậc C";
            }
            else echo "bậc F";
         }
         ?>
    </div>
</body>
</html>>