<?php
    // truy cập đến trang lấy dữ liệu sql
    require_once  "../connection.php";

    // Tiến hành kiểm tra lấy dữ liệu hoàn thành chương trình
    if(isset($_POST['btn_luu'])){
        $product_name = $_POST['product_name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $description = $_POST['description'];
        $cate_id = $_POST['cate_id'];

        if($product_name ==''){
            $err_product_name = "Tên sản phẩm bắt buộc nhập";
        }

        if($price <0){
            $err_price = "price phải lớn hơn 0";
        }

        if($quantity <0){
            $err_quantity = "quantity phải lớn hơn 0";
        }


        // lấy tên ảnh cũ
        $image = $_FILES['image'];
        
        if($image['size']>0){
            $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
            if($ext != 'jpg' && $ext != 'ext' && $ext != 'png' && $ext='JPG'){
                $image_err = "Ảnh không đúng định dạng";
            }
        }
        else $image_err = "Bạn chưa nhập ảnh";

        // kiểm tra image
        if(!isset($image_err)){
            var_dump($_POST);
            $image_name = $image['name'];
            $sql = "INSERT INTO products(product_name,price, image,quantity,description,cate_id) 
            VALUES('$product_name','$price', '$image_name','$quantity','$description','$cate_id')";
    
             // Chuẩn bị
            $stmt = $conn->prepare($sql);
             // Thực thi
            $stmt->execute();
            
            // Upload file ảnh
            move_uploaded_file($image['tmp_name'], '../image/' . $image_name);
    
            // Chuyển hướng đến trang hiển thị
            header("location: show_user.php?msg=Thêm dữ liệu thành công");
            die;
        }
    }
    
?>


<!--  trang html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body style="background-color: lightblue; width:300px; margin: 0 auto">
    <h1 style="text-align:center; text-transform:uppercase;">Add product</h1>
    <a class="btn btn-warning" href="show_user.php">List product</a>
    <form action="" method="post" enctype="multipart/form-data">
            <div>
                <label for="">product_name</label> <br>
                <input style="width: 100%;"   type="text" name="product_name"  value = "<?= isset($product_name) ? $product_name : ''?>">
                <?php if(isset($err_product_name)) : ?>
                <div style="color: red;">
                    <?= $err_product_name ?>
                </div>
            <?php endif ?>
            </div>

            <div>
                <label for="">price</label><br>
                <input style="width: 100%;"   type="text" name="price" value=" <?= isset($price) ? $price : '' ?> ">
                <?php if(isset($err_price)) : ?>
                <div style="color: red;">
                    <?= $err_price ?>
                </div>
            <?php endif ?>
            </div>

            <div>
                <label for="">quantity</label><br>
                <input style="width: 100%;"   type="text" name="quantity" value=" <?= isset($quantity) ? $quantity : '' ?> ">
                <?php if(isset($err_quantity)) : ?>
                <div style="color: red;">
                    <?= $err_quantity ?>
                </div>
            <?php endif ?>
            </div>
            image: <input type="file" name="image" id="">
            <?php if(isset($image_err)) : ?>
                <span style="color: red;">
                    <?= $image_err ?>
                </span>
            <?php endif ?>
            <div>
                <label for="">description</label><br>
                <input style="width: 100%;"  type="text" name="description" placeholder="Mời bạn điền description">
            </div>
            <div>
                <label for="">cate_id</label><br>
                <input style="width: 100%;"   type="text" name="cate_id" placeholder="Mời bạn điền cate_id">
            </div>
        <button  style="width: 100%;"   type="submit" name="btn_luu">Save</button>
    </form>
</body>
</html>