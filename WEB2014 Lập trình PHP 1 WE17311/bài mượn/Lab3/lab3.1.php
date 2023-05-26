<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="Lab3.1.php" method="POST">
        <label for="">Nhập 1 số</label>
        <input type="text" name="number">
        <br>
        <button type="submit" name="btn">Nhập</button>
    </form>
    <div>
        <?php


        if (isset($_POST['btn'])) {
            function kiemTra($n)
            {
                $count = 0;

                for ($i = 2; $i < $n; $i++) {
                    if ($n % $i == 0) {
                        $count++;
                    }
                }
                if ($count == 0) {
                    echo "$n là số nguyên tố";
                } else {
                    echo "$n không là số nguyên tố";
                }
            }
            kiemTra($number = $_POST['number']);
        }
        ?>
    </div>
</body>

</html>