<?php
    if(isset($_POST['Xacnhan'])){
        $sotuoi = $_POST['sotuoi'];
        $sonam = $_POST['sonam'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="bai4.php" method="POST">
        <label for="">Số tuổi</label>
        <input type="text" name="sotuoi">
        <br>
        <label for="">Số năm công tác</label>
        <input type="text" name="sonam">
        <br>
        <button type="submit" name="Xacnhan">Xác nhận</button>
    </form>
    <div>
        <?php
            if(isset($_POST['sotuoi'])){
                echo "Số tuổi là: $sotuoi <br />";
                echo "Số năm công tác là: $sonam <br />";
                if($sotuoi > 25 && $sotuoi < 33){
                    echo "Thưởng 10 triệu";
                }
                elseif($sotuoi >=33 && $sotuoi < 45 && $sonam >=10){
                    echo "Thưởng 18 triệu";
                }
                elseif($sotuoi >= 45 && $sonam >= 16){
                    echo "Thưởng 25 triệu";
                }
                else{
                    echo "Thưởng 5 triệu";
                }
            }
        ?>
    </div>
</body>
</html>