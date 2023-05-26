<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="lab3.3.php" method="POSt">
        <label for="">Nhập vào 1 số</label>
        <br>
        <input type="text" name="number">
        <br>
        <button type="submit" name="btn">Nhập</button>
    </form>
    <div>
        <?php
        if (isset($_POST['btn'])) {
            
            function test($n)
            {   echo "Các số chia hểt cho $n là :";
                $a = [20, 4, 21, 5, 4, 7, 6, 7, 434, 54];
                for ($i= 0; $i < count($a); $i++) { 
                   if( $a[$i] % $n == 0){
                        echo " $a[$i]";
                   }
                }
            }
            test($number = $_POST['number']);
        }
        ?>
    </div>
</body>

</html>