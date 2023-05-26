<?php
    require_once "./connection.php";
    $errors = [];
    if(isset($_POST['btn'])){
        $product_name = $_POST['product_name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $image = $_FILES['image'];
        $cate_id = $_POST['cate_id'];
        $image_name = $image['name'];

        if(!$errors){
            $sql = "INSERT INTO products(product_name,price,description,image,cate_id)
             values('$product_name','$price','$description','$image_name','$cate_id') ";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            move_uploaded_file($image['tmp_name'], './image/' . $image_name);
            header("location: show.php");
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
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        product_name <input type="text" name="product_name"> <br>
        price <input type="text" name="price"><br>
        description <input type="text" name="description"><br>
        image <input type="file" name="image"><br>
        cate_id <input type="text" name="cate_id"><br>
        <button type="submit" name="btn">Luwu</button>
    </form>
</body>
</html>