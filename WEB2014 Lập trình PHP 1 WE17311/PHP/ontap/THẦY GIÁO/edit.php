<?php
require_once "connection.php";
$errors = [];
if (isset($_POST['btnLuu'])) {
    //Lấy id và ảnh cũ
    $id = $_POST['id'];
    $image = $_POST['image'];

    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $cate_id = $_POST['cate_id'];

    $file = $_FILES['image'];

    if ($file['size'] > 0) {
        //Lấy tên của file
        $image = $file['name'];
        $ext = pathinfo($image, PATHINFO_EXTENSION);
        if ($ext != 'jpg' && $ext != 'png' && $ext != 'gif') {
            $errors['image'] = "File không đúng định dạng";
        } elseif ($file['size'] > 2000000) {
            $errors['image'] = "File vượt quá dung lượng 2MB";
        }
    }

    if ($product_name == '') {
        $errors['name'] = "Bạn chưa nhập tên sản phẩm";
    }
    if ($price == '' || $price < 0) {
        $errors['price'] = "Giá phải là số dương";
    }

    if (!$errors) {
        //SQL UPDATE 
        $sql = "UPDATE products SET product_name='$product_name', price='$price', description='$description', image='$image', cate_id='$cate_id' WHERE id=$id";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        if ($file['size'] > 0) { 
            move_uploaded_file($file['tmp_name'], 'images/' . $image);
        }

        //Chuyển hướng về show
        $msg = "Cập nhật dữ liệu thành công";
        header("location: show.php?msg=$msg");
        exit;
    }
}

//Lấy dữ liệu của bảng category
$sql = "SELECT * FROM category";
$stmt = $conn->prepare($sql);
$stmt->execute();
$category = $stmt->fetchAll(PDO::FETCH_ASSOC);

//lấy dữ liệu của sản phẩm cần sửa
$id = $_GET['id'];
$sql = "SELECT * FROM products where id = $id";
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
    <title>Thêm dữ liệu</title>
</head>

<body>
    <h1>Thêm product</h1>
    <a href="show.php">Danh sách</a>

    <form action="" method="post" enctype="multipart/form-data">
        <!-- Lưu dữ liệu id -->
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        
        Product Name: <input type="text" name="product_name" value="<?= $product['product_name'] ?>">
        <?php if (isset($errors['name'])) : ?>
            <span><?= $errors['name'] ?></span>
        <?php endif ?>
        <br>

        <img src="images/<?= $product['image'] ?>" width="120" alt="">
        <!-- Lưu lại tên ảnh cũ nếu không cập nhật ảnh -->
        <input type="hidden" name="image" value="<?= $product['image'] ?>">
        <br>
        Image: <input type="file" name="image" id="">
        <?php if (isset($errors['image'])) : ?>
            <span><?= $errors['image'] ?></span>
        <?php endif ?>
        <br>
        
        Price: <input type="number" name="price" value="<?= $product['price'] ?>">
        <?php if (isset($errors['price'])) : ?>
            <span><?= $errors['price'] ?></span>
        <?php endif ?>
        <br>
        Description:
        <textarea name="description" cols="100" rows="10"><?= $product['description'] ?></textarea>
        <br>
        Category Name:
        <select name="cate_id" id="">
            <?php foreach ($category as $cate) : ?>
                <option value="<?= $cate['id'] ?>" <?= ($cate['id'] == $product['cate_id']) ? 'selected' : '' ?>>
                    <?= $cate['category_name'] ?>
                </option>
            <?php endforeach ?>
        </select>
        <br>
        <button type="submit" name="btnLuu">Lưu</button>
    </form>
</body>

</html>