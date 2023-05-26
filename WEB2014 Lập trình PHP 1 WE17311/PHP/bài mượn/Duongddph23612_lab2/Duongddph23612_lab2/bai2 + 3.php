<?php
    $nhanvien = [
        ['id'=>'NV001','hoten'=>'Nguyễn Văn A','email'=>'anv@gmail.com','phone'=>'0901231231','cmnd'=>'01231231231','luong'=>900],
        ['id'=>'NV002','hoten'=>'Trần Văn B','email'=>'btv@gmail.com','phone'=>'0800123456','cmnd'=>'012345678','luong'=>800],
        ['id'=>'NV003','hoten'=>'Đoàn Đăng Dương','email'=>'duongdd@fpt.edu.vn','phone'=>'0353708225','cmnd'=>'015203004426','luong'=>1000],
    ];
    
?>
<?php
    $tong = 0;
    $count = 0;
    foreach($nhanvien as $luong){
        $tong += $luong['luong'];
        $count++;

    }
    $tbl = $tong / $count;
    echo " Trung bình lương là: $tbl <br />";
    echo "Tổng là : $tong";
?>
<?php foreach($nhanvien as $nhanvien): ?>
    <div class="nhanvien">
        <h5>Id là: <?= $nhanvien['id'] ?>
        <h5>Họ tên là: <?= $nhanvien['hoten'] ?></h5>
        <h5>Email là: <?= $nhanvien['email'] ?></h5>
       <h5>Phone là:  <?= $nhanvien['phone'] ?></h5>
        <h5>CMND là: <?= $nhanvien['cmnd'] ?></h5>
        <h5>Lương là: <?= $nhanvien['luong'] ?></h5>
    </h4>
    </div>
<?php endforeach ?>
