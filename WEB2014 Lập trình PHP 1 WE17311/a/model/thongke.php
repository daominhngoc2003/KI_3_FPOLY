<?php
    function loadall_thongke(){
        $sql = "SELECT danhmuc.id as id, danhmuc.name as tenloai, count(sanpham.id) as countsp,min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice";
        $sql .= " FROM sanpham left join danhmuc on danhmuc.id=sanpham.iddm";
        $sql .= " GROUP BY danhmuc.id order by danhmuc.id desc";
        $listtk = pdo_query($sql);
        return $listtk;
    }

?>