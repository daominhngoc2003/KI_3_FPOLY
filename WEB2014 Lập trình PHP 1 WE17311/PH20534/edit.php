<?php
    require_once "./connection.php";

    $errors = [];
    if(isset($_POST['btn'])){
        $book_id = $_POST['book_id'];
        $image = $_POST['image'];

        $book_title = $_POST['book_title'];
        $price = $_POST['price'];
        $intro = $_POST['intro'];
        $content = $_POST['content'];
        $page = $_POST['page'];
        $author_id = $_POST['author_id'];
        $file = $_FILES['image'];

        if($price<0){
            $errors['price'] ="Price phải lớn hơn 0";
        }

        if($page<0){
            $errors['page'] ="page phải lớn hơn 0";
        }

        if($file['size'] >0){
            $image = $file['name'];
            $ext = pathinfo($image, PATHINFO_EXTENSION);
            if($ext != 'jpg'  && $ext != 'png'){
                $errors['image'] = "File ảnh không đúng đinh dạng";
            }
            if($file['size']>2000000){
                $errors['image'] = "FIle vượt quá 2mb";
            }
        }

        if(!$errors){
            $sql = "UPDATE books set book_title='$book_title', price='$price',image='$image',intro='$intro',content='$content',page='$page',author_id='$author_id' where book_id = $book_id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            move_uploaded_file($file['tmp_name'], './images/' .$image);
            header("location:show.php");
        }
    }

    // Bna
    $sql = "select * from authors";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $authors = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // suarw
    $id = $_GET['id'];
    $sql = "select * from books where book_id = $id";
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
    <form action="" enctype="multipart/form-data" method="post">
        book_id <input type="hidden" name="book_id" value="<?= $book['book_id']?>">

        book_title <input type="text" name="book_title" value="<?= $book['book_title']?>"> <br>


        price <input type="text" name="price" value="<?= $book['price']?>">
        <?php if(isset($price)): ?>
            <span>
                <?= $errors['price'] ?>
            </span>
        <?php endif ?>
        <br>


        <img src="./images/<?= $book['image']?>" width="120" height="120" alt="">
        <input type="hidden" name="image" value="<?= $book['image']?>" >
        image <input type="file" name="image">
        <?php if(isset($image)): ?>
            <span>
                <?= $errors['image'] ?>
            </span>
        <?php endif ?>
        <br>


        intro <input type="text" name="intro" value="<?= $book['intro']?>"> <br>


        content <input type="text" name="content" value="<?= $book['content']?>"> <br>


        page <input type="text" name="page" value="<?= $book['page']?>">
        <?php if(isset($page)): ?>
            <span>
                <?= $errors['page'] ?>
            </span>
        <?php endif ?>
        <br>


        author_id
        <select name="author_id" id="">
            <?php foreach($authors as $au): ?>
                <option value="<?= $au['author_id'] ?> <?= $au['author_id'] == $book['author_id']?>"><?= $au['fullname'] ?> </option>
            <?php endforeach ?>
        </select>
        <br>


        <button type="submit" name="btn">Lưu</button>
    </form>
</body>
</html>