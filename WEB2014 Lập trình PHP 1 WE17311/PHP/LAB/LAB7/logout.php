<?php
    session_start();

    // hủy session username
    unset($_SESSION['username']);

    // điều hướng về trang login
    header("location: login.php");
    exit;
?>