<?php
if (isset($_POST['btmUpload'])){
    $file = $_FILES['fileUpload'];
    //kiểm tra file tòn tại mới UPload
    if ($file['size'] >0){
        //lấy  phần đuôi mở rôngj kiểm tra 
        $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
        // chuyển sang chữ thường
        $ext = strtolower($ext);
        //kiểm tra không đúng file thì đua ra thông báo
        if($ext !='png' && $ext = 'jpeg' && $ext = 'jpg'){
            echo "File đúng định dạng ảnh";

        } else{
        move_uploaded_file($file['tmp_name'], $file['name']);
        }
    }else{
        echo "Bạn chưa nhập file";
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
        Nhập file
        <input type="file" name="fileUpload" id="" style="color : red;">
        <br>
        <button type="submit" name="btmUpload">Upload</button>

    </form>
</body>
</html>