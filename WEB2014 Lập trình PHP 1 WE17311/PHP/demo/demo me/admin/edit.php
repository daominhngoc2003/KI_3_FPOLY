<?php
require_once "../connection.php";

$errors = [];
if (isset($_POST['btn_save'])) {
    // lấy id và ảnh cũ
    $book_id = $_POST['book_id'];
    $image = $_POST['image'];

    $book_title = $_POST['book_title'];
    $intro = $_POST['intro'];
    $detail  = $_POST['detail'];
    $page = $_POST['page'];
    $price = $_POST['price'];
    $cate_id = $_POST['cate_id'];

    $file = $_FILES['image'];

    if ($price == '') {
        $errors['price'] = "Price không được để trống";
    } else if ($price < 0) {
        $errors['price'] = "Price không được âm";
    }
    
    if ($page == '') {
        $errors['page'] = "Page không được để trống";
    } else if ($page < 0) {
        $errors['page'] = "Page không được âm";
    }

    if ($file['size'] > 0) {
        // Lấy tên của file
        $image = $file['name'];
        $ext = pathinfo($image, PATHINFO_EXTENSION);
        if ($ext != 'jpg' && $ext != 'png') {
            $errors['image'] = "File ảnh không đúng định dạng";
        } else if ($file['size'] > 2000000) {
            $errors['image'] = "File ảnh vượt quá 2 mb";
        }
    }

    if (!$errors) {
        $sql = "UPDATE books set book_title= '$book_title',intro='$intro',detail='$detail', page ='$page',price='$price',cate_id = '$cate_id'  where book_id=$book_id";


        $stmt = $conn->prepare($sql);
        $stmt->execute();

        if ($file['size'] > 0) {
            move_uploaded_file($file['tmp_name'], '../image/' . $image);
        }
        header("location: show.php?msg=Thêm dữ liệu thành công");
        exit;
    }
}

// bảng categori
$sql = "SELECT * from categories";
$stmt = $conn->prepare($sql);
$stmt->execute();
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

// lấy dữ liệu cần sửa
$book_id = $_GET['book_id'];
$sql = "select *from books where book_id = $book_id";
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
    <h1>ADD book</h1>
    <a href="show.php">List book</a>
    <form action="#" method="post" enctype="multipart/form-data">
        <!-- Lưu dữ liệu book_id -->
        <input type="hidden" name="book_id" value="<?= $book['book_id'] ?>">
        
        book_title <input type="text" name="book_title" value="<?= $book['book_title'] ?>"> <br>
        
        <!-- Lưu lại tên ảnh cũ nếu khong cập nhật ảnh -->
        <img src="../image/<?= $book['image'] ?>" width="120" alt=""> <br>
        <input type="hidden" name="image" value="<?= $book['image'] ?>">
        image <input type="file" name="image">
        <?php if (isset($errors['image'])) : ?>
            <span style="color: red;">
                <?= $errors['image'] ?>
            </span>
        <?php endif; ?><br>
        
        intro <input type="text" name="intro" value="<?= $book['intro'] ?>"><br>
        
        detail <input type="text" name="detail" value="<?= $book['detail'] ?>"><br>
        
        page <input type="text" name="page" value="<?= $book['page'] ?>">
        <?php if (isset($errors['page'])) : ?>
            <span style="color: red;">
                <?= $errors['page'] ?>
            </span>
        <?php endif; ?><br>
        
        price <input type="text" name="price" value="<?= $book['price'] ?>">
        <?php if (isset($errors['price'])) : ?>
            <span style=" color: red;">
                <?= $errors['price'] ?>
            </span>
        <?php endif; ?><br>
        
        cate_id
        <select name="cate_id" id="">
            <?php foreach ($categories as $cate) : ?>
                <option value="<?= $cate['cate_id'] ?>" <?= ($cate['cate_id'] == $book['cate_id']) ? 'selected' : '' ?>><?= $cate['cate_name'] ?></option>
            <?php endforeach; ?>
        </select> <br>
        <button type="submit" name="btn_save" class="btn btn-primary">Save</button>
    </form>
</body>

</html>