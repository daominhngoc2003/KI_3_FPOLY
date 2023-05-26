<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="lab3.2.php" method="POST">
        <label for="">Nhập n</label>
        <input type="text" name="number">
        <br>
        <button type="submit" name="btn">Tính</button>
    </form>
    <?php
if (isset($_POST['btn'])) {
    function sum_2n()
    {
        $number = $_POST['number'];
        $sum = 0;
        for ($i = 1; $i <= $number; $i++) {
            $sum += 2 * $i;

        }
        echo  "Tổng là : ".$sum;
        return $sum;
    }
   sum_2n();
}
?>
</body>

</html>