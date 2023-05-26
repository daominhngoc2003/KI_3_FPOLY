<?php
    require_once "./connection.php";

    $errors =[];
    if(isset($_POST['btn'])){
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
            $sql ="insert into products(product_name,description,price,image,cate_id) 
            values('$product_name','$description','$price','$image','$cate_id')";
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
        product_name <input type="text" name="product_name"> <br>

        description <input type="text" name="description"> <br>

        price <input type="text" name="price"> <br>


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