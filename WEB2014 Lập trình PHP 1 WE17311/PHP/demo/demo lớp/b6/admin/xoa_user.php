
<?php
 require_once  "../connection.php";
if (isset($_GET['id'])){
    $id =$_GET['id'];
    $sql = "DELETE  FROM users WHERE id=$id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    //chuyen huong
    $smg = "khong nhan duoc du lieu xoa";
    header("location: show_user.php?msg=$msg");
    exit();
}
?>