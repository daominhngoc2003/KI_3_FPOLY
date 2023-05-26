<?php
require_once "connection.php";
$errors = [];
if (isset($_POST['btnLuu'])) {
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $cate_id = $_POST['cate_id'];

    $file = $_FILES['image'];
    if ($file['size'] <= 0) {
        $errors['image'] = "Bạn chưa nhập ảnh";
    }
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
        //SQL INSERT 
        $sql = "INSERT INTO products(product_name, price, description, image, cate_id)
         VALUES('$product_name', '$price', '$description', '$image', '$cate_id')";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        move_uploaded_file($file['tmp_name'], 'images/' . $image);

        //Chuyển hướng về show
        $msg = "Thêm dữ liệu thành công";
        header("location: show.php?msg=$msg");
        exit;
    }
}

//Lấy dữ liệu của bảng category
$sql = "SELECT * FROM category";
$stmt = $conn->prepare($sql);
$stmt->execute();
$category = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
        Product Name: <input type="text" name="product_name">
        <?php if (isset($errors['name'])) : ?>
            <span><?= $errors['name'] ?></span>
        <?php endif ?>
        <br>
        Image: <input type="file" name="image" id="">
        <?php if (isset($errors['image'])) : ?>
            <span><?= $errors['image'] ?></span>
        <?php endif ?>
        <br>
        Price: <input type="number" name="price" id="">
        <?php if (isset($errors['price'])) : ?>
            <span><?= $errors['price'] ?></span>
        <?php endif ?>
        <br>
        Description:
        <textarea name="description" cols="100" rows="10"></textarea>
        <br>
        Category Name:
        <select name="cate_id" id="">
            <?php foreach ($category as $cate) : ?>
                <option value="<?= $cate['id'] ?>"> <?= $cate['category_name'] ?> </option>
            <?php endforeach ?>
        </select>
        <br>
        <button type="submit" name="btnLuu">Lưu</button>
    </form>
</body>

</html>