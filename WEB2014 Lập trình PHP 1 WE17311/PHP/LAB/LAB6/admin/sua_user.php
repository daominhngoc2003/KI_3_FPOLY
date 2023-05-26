<?php
// truy cập đến trang lấy dữ liệu sql
    require_once  "../connection.php";

    // Tiến hành kiểm tra lấy dữ liệu hoàn thành chương trình
    if(isset($_POST['btn_luu'])){
        $product_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $description = $_POST['description'];
        $cate_id = $_POST['cate_id'];

        $file = $_FILES['image'];

        // lấy tên ảnh cũ
        $image = $_POST['image'];
        
        if($file['size'] > 0){
            // nếu có ảnh thì lấy tên ảnh mới
            $image = $file['name'];
        }

        // SQL UPDATE
        $sql = "UPDATE products SET product_name= '$product_name',price = '$price' ,quantity = '$quantity',description = '$description',cate_id = '$cate_id', image = '$image' WHERE product_id = $product_id";

        
    
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            
            // Upload file ảnh
            move_uploaded_file($file['tmp_name'], '../image/' . $image);
    
            // Chuyển hướng đến trang hiển thị
            $msg = "cập nhật dữ liệu thành công";
            header("location: show_user.php?msg=$msg");
            die;
    }

    // Đoạn code để láy dữ liệu cần sửa
        $product_id = $_GET['product_id'];
    // SQL select
        $sql = "SELECT* FROM products where product_id = $product_id";
    // Chuẩn bị
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    // láy ra 1 bản ghi của bảng    
        $products = $stmt->fetch(PDO::FETCH_ASSOC);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body style="background-color: lightblue; width:400px; margin: 0 auto">
    <h1 style="text-align:center; text-transform:uppercase;">Fix information product</h1>
    <a class="btn btn-warning" href="show_user.php">List products</a>
    <form action="#" method="post" enctype="multipart/form-data">
        <input style="width: 100%;" type="hidden" name="product_id" value="<?= $products['product_id'] ?>">
        product_name : 
        <input style="width: 100%;" type="text" name="product_name" value="<?php echo $products['product_name'] ?>">
        <br>
        price : 
        <input style="width: 100%;" type="text" name="price" value="<?= $products['price'] ?>">
        <br>
        quantity  : 
        <input style="width: 100%;" type="text" name="quantity" value="<?= $products['quantity'] ?>">
        <br>
        description : 
        <input style="width: 100%;" type="text" name="description" value="<?= $products['description'] ?>">
        <br>
        <img src="../image/<?= $products['image'] ?>" width="123" alt="">
        <input style="width: 100%;" type="hidden" name="image" value="<?= $products['image'] ?>">
        <br>
        image: 
        <input type="file" name="image" id="">
        <?php if(isset($image_err)) : ?>
            <span style="color: red;">
                <?= $image_err ?>
            </span>
        <?php endif ?>
        <br>
        cate_id : 
        <input style="width: 100%;" type="text"value="<?= $products['cate_id'] ?>" name="cate_id" placeholder="Mời bạn điền cate_id">
        <br>
        <button style="width: 100%;" type="submit" name="btn_luu">Save</button>
    </form>
</body>
</html>