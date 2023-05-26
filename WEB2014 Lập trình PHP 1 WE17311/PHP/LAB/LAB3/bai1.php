<?php
$result = ""; // Biến lưu kết quả kiểm tra
    if(isset($_POST['number'])){
        $number = $_POST['number'];
        $laNguyenTo = 1;
        if($number>1){ 
            //Nếu number>1 thì mới kiểm tra tính nguyên tố
            for($i = 2; $i <= sqrt($number);$i++){
                if($number%$i == 0){ // nếu $number $i
                    $laNguyenTo = 0;  // thì đánh dấu lại
                    break;  // Thoát ra khỏi vòng lặp để tứu ưu code
                }
            }
            if($laNguyenTo== 0){
                $result .=$number."Không phải số nguyên tố ";
            }
            else{// Ngược lại, nếu $number không >1 thì $number không phải số nguyên tố
                $result .=$number."là số nguyên tố";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label{display: block; width: 30%; float: left;}
        section{margin-bottom: 10px}
    </style>
</head>
<body>
    <form action="vidu.php" method = "POST">
        <section>
            <label for="">Mời bạn nhập 1 số nguyên tố: </label>
            <!-- hiển thị số nhập vào sau khi kiểm tra kết quả -->
            <input type="number"name ="number" required value ="<?=!isset($number)?:$number?>"> <br>
        </section>
        <section>
            <label for="">&nbsp</label>
            <button type ="submit">Kiểm tra</button>
        </section>
        <section>
            <label for=""> Kết quả : </label>
            <!-- Đưa kết quả kiểm tra vào control dưới:  -->
            <input type="text" readonly value="<?=!isset($result)?:$result?>">
        </section>
       
    </form>
</body>
</html>