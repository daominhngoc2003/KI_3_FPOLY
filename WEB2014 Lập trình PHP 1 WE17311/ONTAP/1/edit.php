<?php
    require_once "./connection.php";
    $errors =[];
    if(isset($_POST['btn'])){
        $id = $_POST['id'];
        $image = $_POST['image'];
        $product_name = $_POST['product_name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $file = $_FILES['image'];
        $cate_id = $_POST['cate_id'];

        if($price <0){
            $errors['price'] = "giá vừa nhập vào phải lớn hơn o";
        }

        if($file['size']> 0){
            $image = $file['name'];
            $ext = pathinfo($image,PATHINFO_EXTENSION);
            if($ext != 'png' && $ext != 'jpg'){
                $errors['image'] = "File ảnh chưa đúng định dạng";
            }
            if($file['size']>2000000){
                $errors['image'] = "File ảnh không được vượt quá 2 mb";
            }
        }

        if(!$errors){
            $sql ="update products set product_name='$product_name',description='$description',price='$price',image='$image',cate_id='$cate_id'  where id = $id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        if($file['size']>0){
            move_uploaded_file($file['tmp_name'] , './image/' .$image);
        }
        header("location:show.php");
        }
    }

    //
    $sql = "select*from category";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $category = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //
    $id = $_GET['id'];
    $sql = "select*from products where id = $id";
    $stmt = $conn->prepare($sql);
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
    <form action="" enctype="multipart/form-data" method ="post">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        product_name <input type="text" name="product_name" value="<?= $product['product_name'] ?>">
        <br>

        description <input type="text" name="description" value="<?= $product['description'] ?>">
        <br>

        price <input type="text" name="price" value="<?= $product['price'] ?>">
        <?php if(isset($price)): ?>
            <span>
                <?= $errors['price'] ?>
            </span>
        <?php endif ?>
        <br>

        <img src="./image/<?= $product['image'] ?>" width="120"  alt="">
        <input type="hidden" name="image"  value="<?= $product['image'] ?>">
        image <input type="file" name="image">
        <?php if(isset($image)): ?>
            <span>
                <?= $errors['image'] ?>
            </span>
        <?php endif ?>
        <br>

        cate_id 
        <select name="cate_id" id="">
            <?php foreach($category as $cate): ?>
                <option value="<?= $cate['id'] ?>" <?= $cate['cate_id'] == $product['cate_id'] ? 'selected' : '' ?>><?= $cate['category_name'] ?></option>
            <?php endforeach ?>
        </select>
        <br>

        <button type="submit" name="btn">Luu</button>
    </form>
</body>
</html>