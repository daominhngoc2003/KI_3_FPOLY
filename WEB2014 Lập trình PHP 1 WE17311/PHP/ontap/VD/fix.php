<?php
require_once "connection.php";
$errors = [];
if (isset($_POST['btn_save'])) {
    // Lấy id và ảnh cũ
    $book_id = $_POST['book_id'];
    $image = $_POST['image'];

    $book_title = $_POST['book_title'];
    $intro = $_POST['intro'];
    $detail = $_POST['detail'];
    $page = $_POST['page'];
    $price = $_POST['price'];
    $cate_id = $_POST['cate_id'];

    $file = $_FILES['image'];

    if ($file['size'] > 0) {
        // lấy tên của file
        $image = $file['name'];
        $ext = pathinfo($image, PATHINFO_EXTENSION);
        if ($ext != 'jpg' && $ext != 'png' && $ext != 'gif') {
            $errors['image'] = "File không đúng định dạng";
        } else if ($file['size'] > 2000000) {
            $errors['image'] = "File vượt quá 2 mb";
        }
    }
    
    if ($page == '' || $page <0) {
        $errors['page'] = "Trang phải dương";
    }
    if ($price == '' || $price < 0) {
        $errors['price'] = "Giá phải là số dương";
    }
    
    if (!$errors) {
        // SQL UPDATE
        $sql = "UPDATE books set book_title='$book_title',intro='$intro',detail='$detail',page='$page',price='$price',cate_id='$cate_id' where book_id=$book_id";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        move_uploaded_file($file['tmp_name'], 'image/' . $image);

        // Chuyển hướng về show
        header("location: show.php?msg=EDIT BOOK succesful!");
        exit;
    }
}

// lấy dữu liệu của bảng category
$sql = "SELECT * FROM categories";
$stmt = $conn->prepare($sql);
$stmt->execute();
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

// lấy dữ liệu san rphaamr cần sửa
$book_id = $_GET['book_id'];
$sql = "SELECT * FROM books WHERE book_id=$book_id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$book = $stmt->fetch(PDO::FETCH_ASSOC);
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
    <div class="container">
        <h1>EDIT BOOKS</h1>
        <a href="show.php">LIST BOOKS</a>
        <form action="#" enctype="multipart/form-data" method="post">
            <!-- Lưu dữ liệu book_id -->
            <input type="hidden" name="book_id" value="<?= $book['book_id'] ?>">

            <label for="">book_title</label>
            <input type="text" name="book_title" value="<?= $book['book_title'] ?>">
            <?php if (isset($errors['book_title'])) : ?>
                <?= $errors['book_title'] ?>
            <?php endif ?>
            <br>

            <img src="image/<?=$book['image'] ?>" width="120" alt="">
            <input type="hidden" name="image" value="<?=$book['image'] ?>">
            <label for="">image</label>
            <input type="file" name="image">
            <?php if (isset($errors['image'])) : ?>
                <?= $errors['image'] ?>
            <?php endif ?>
            <br>

            <label for="">intro</label>
            <input type="text" name="intro" value="<?= $book['intro'] ?>"> <br>

            <label for="">detail</label>
            <input type="text" name="detail" value="<?= $book['detail'] ?>"> <br>

            <label for="">page</label>
            <input type="text" name="page" value="<?= $book['page'] ?>">
            <?php if (isset($errors['page'])) : ?>
                <?= $errors['page'] ?>
            <?php endif ?>
            <br>

            <label for="">price</label>
            <input type="text" name="price" value="<?= $book['price'] ?>">
            <?php if (isset($errors['price'])) : ?>
                <?= $errors['price'] ?>
            <?php endif ?>
            <br>

            <label for="">cate_id</label>
            <select name="cate_id" id="">
                <?php foreach($categories as $cate): ?>
                    <option  value="<?= $cate['cate_id'] ?>"> <?= $cate['cate_name'] ?> </option>
                <?php endforeach ?>
            </select> <br>

            <button type="submit" name="btn_save">SAVE</button>
        </form>
    </div>
</body>

</html>