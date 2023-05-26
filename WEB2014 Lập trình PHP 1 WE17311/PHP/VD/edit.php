<?php
    require_once "./connection.php";
    $errors=[];
    if(isset($_POST['btnluu'])){

        // Láy id và ảnh cũ
        $id = $_POST['id'];
        $image = $_POST['image'];

        $product_name = $_POST['product_name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $cate_id = $_POST['cate_id'];
        $file = $_FILES['image'];

        if($file['size'] < 0){
            $errors['image'] = "Bạn chưa nhập ảnh";
        }
        if($file['size']>0){
            // Lấy tên của file
            $image = $file['name'];
            $ext = pathinfo($image, PATHINFO_EXTENSION);
            if($ext != 'jpg' && $ext != 'png'){
                $errors['image'] ="File chưa đúng định dạng";
            }
            else if($file['size'] > 2000000){
                $errors['image'] = "File vượt quá 2mb";
            }
        }
    

        if(!$errors){
            $sql ="UPDATE products SET product_name='$product_name',price='$price',description='$description',image='$image',cate_id='$cate_id'  where id=$id";
            // câu lệnh thực hiện sql
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            move_uploaded_file($file['tmp_name'], 'image/' .$image);
            header("location:show.php");
            exit;
        }
    }
    // BẢNG CATEGORIES
    $sql= "SELECT *FROM category";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $category = $stmt->fetchAll(PDO::FETCH_ASSOC); 

    // Lấy dữ liệu cần sửa
    $id = $_GET['id'];
    $sql = "SELECT * from products where id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $product =$stmt->fetch(PDO::FETCH_ASSOC);

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
    <h1>THÊM</h1>
    <a href="show.php">LIST</a>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <div>
            <label for="">product_name</label>
            <input type="text" name="product_name" value="<?= $product['product_name'] ?>">
            <?php if(isset($errors['product_name'])): ?>
                <span> <?= $errors['product_name'] ?> </span>
            <?php endif; ?>
        </div>
        <div>
            <label for="">price</label>
            <input type="text" name="price" value="<?= $product['price'] ?>">
            <?php if(isset($errors['price'])): ?>
                <span> <?= $errors['price'] ?> </span>
            <?php endif; ?>
        </div>
        <div>
            <label for="">	description</label>
            <input type="text" name="description" value="<?= $product['description'] ?>">
            <?php if(isset($errors['description'])): ?>
                <span> <?= $errors['description'] ?> </span>
            <?php endif; ?>
        </div>
        <!-- Lưu lại tên ảnh cũ nếu k cập nhật ảnh -->
        <div>
            <label for="">image</label>
            <input type="file" name="image">
            <?php if(isset($errors['image'])): ?>
                <span> <?= $errors['image'] ?> </span>
            <?php endif; ?>
        </div>
        <div>
            <label for="">categories name</label>
            <select name="cate_id" id="">
                <?php foreach($category as $cate): ?>
                    <span>
                        <option value="<?= $cate['id']?>"><?= $cate['category_name'] ?></option>
                    </span>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" name="btnluu">SAVE</button>
    </form>
</body>
</html>