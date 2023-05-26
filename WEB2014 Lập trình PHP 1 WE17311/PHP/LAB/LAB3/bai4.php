<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="bai4.php" method ="POST">
        <input type="text" name="ten" placeholder="Mời nhập tên sản phẩm: ">
        <button type ="submit" name ="timkiem">Tìm kiếm</button>
    </form>
</body>
</html>
<?php
    $products = [
            ['masp'=>1, 'tensp'=>"Iphone 13", 'gia'=>819, 'anh'=>'iphone13.jpeg'],
            ['masp'=>2, 'tensp'=>"Iphone 13 Pro", 'gia'=>999, 'anh'=>'Iphone 13 Pro.jpg'],
            ['masp'=>3, 'tensp'=>"Samsung Galaxy S22", 'gia'=>799, 'anh'=>'S22.jpg'],
            ['masp'=>4, 'tensp'=>"Samsung Galaxy S22 ultra", 'gia'=>999, 'anh'=>'Samsung Galaxy S22 ultra.png'],
            ['masp'=>5, 'tensp'=>"Oppo Reno 7", 'gia'=>289, 'anh'=>'Oppo Reno 7.png'],
            ['masp'=>6, 'tensp'=>"Xiaomi S12 Pro", 'gia'=>569, 'anh'=>'Xiaomi S12 Pro.jpg'],
        ];
?>
<style>
    h3{
        display:block;
    }
</style>
<!-- Hiển thị danh sách sản phẩm -->
<?php 
foreach($products as $product): 
?>
<style>
    .product{
        width: 400px;
        margin: 0 auto;
    }
    .gia{
        color:red;
    }
    .pro{
        display: flex;
    }
    h3{
        margin-left: 5px;
    }
    .ten{
        color: blue;
    }
</style>
<div class="product">
   <div class="pro">
        <h3>
            <?=$product['masp'] ?> 
        </h3>
        <h3 class="ten">
            <?=$product['tensp'] ?> 
        </h3>
        <h3 class="gia">
            <?=$product['gia'] ?>
        </h3>
   </div>
    <img src="<?=$product['anh']?>" witdh="300px" height="300px" alt="">
</div>
<?php endforeach?>

