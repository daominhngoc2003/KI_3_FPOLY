<?php
    require_once "./connection.php";

    $errors =[];
    if(isset($_POST['btn'])){

        $id = $_POST['id'];
        $image = $_POST['image'];

        $product_name = $_POST['product_name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $cate_id = $_POST['cate_id'];
        $file = $_FILES['image'];

        if($file['size']>0){
            $image = $file['name'];
            $ext = pathinfo($image,PATHINFO_EXTENSION);
            if($ext != 'jpg' && $ext != 'png'){
                $errors['image'] = "File ảnh không đúng định dạng";
            }
            if($file['size']>2000000){
                $errors['image'] ="File k đc quá 2mb";
            }
        }
        if(!$errors){
            $sql ="update products set product_name='$product_name',description='$description',price='$price',image='$image',cate_id='$cate_id' where id = $id";
            
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            move_uploaded_file($file['tmp_name'],'./image/' .$image);
            header("location:show.php");
        }
    }
    //
    $sql ="select* from category";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $category = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // sửa
    $id =$_GET['id'];
    $sql ="select* from products where id = $id";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    
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
    <form action="" enctype="multipart/form-data" method="post">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        product_name <input type="text" name="product_name" value="<?= $product['product_name'] ?>"> <br>

        description <input type="text" name="description" value="<?= $product['description'] ?>"> <br>

        price <input type="text" name="price" value="<?= $product['price'] ?>"> <br>


        <img src="./image/<?= $product['image'] ?>" width="120" alt="">
        <input type="hidden" name="image"  value="<?= $product['image'] ?>">
        image <input type="file" name="image">
        <?php if(isset($errors['image'])): ?>
            <?= $errors['image'] ?>
        <?php endif ?>
        <br>

        cate_id 
        <select name="cate_id" id="">
            <?php foreach($category as $cate): ?>
                <option value="<?= $cate['id'] ?>"><?= $cate['category_name'] ?></option>
            <?php endforeach ?>
        </select>
        <br>

        <button type="submit" name="btn">Lưu</button>
    </form>
</body>
</html>