<?php
function insert_sanpham($name, $image, $discount, $price, $mota_ngan, $mota_dai, $date,$size_product,$color_product, $iddm)
{
    $sql = "INSERT INTO sanpham(name,image,discount,price,mota_ngan,mota_dai,date,size_product,color_product,iddm) 
        values('$name','$image','$discount','$price','$mota_ngan','$mota_dai','$date','$size_product','$color_product','$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id)
{
    $sql = "DELETE FROM sanpham where id=" . $id;
    pdo_execute($sql);
}
function loadone_sanpham($id)
{
    $sql = "SELECT * FROM sanpham where id=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function loadall_sanpham_top()
{
    $sql = "SELECT * FROM sanpham where 1 order by view desc limit 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function update_sanpham($id, $name, $image, $discount, $price, $mota_ngan, $mota_dai, $date,$size_product,$color_product, $iddm)
{
    if($image >0){
        $sql = "UPDATE sanpham SET iddm= '" . $iddm . "' ,  name= '" . $name . "' , image='" . $image . "',discount='" . $discount . "', price= '" . $price . "' , mota_ngan= '" . $mota_ngan . "',mota_dai = '" . $mota_dai . "' , date= '" . $date . "', size_product= '" . $size_product . "', color_product= '" . $color_product . "' where id=" . $id;
        pdo_execute($sql);
    } else{
        $sql = "UPDATE sanpham SET iddm= '" . $iddm . "' ,  name= '" . $name . "' ,discount='" . $discount . "', price= '" . $price . "' , mota_ngan= '" . $mota_ngan . "',mota_dai = '" . $mota_dai . "' , date= '" . $date . "', size_product= '" . $size_product . "', color_product= '" . $color_product . "' where id=" . $id;
        pdo_execute($sql);
    }
}
function loadall_sanpham($kyw = "", $iddm = 0)
{
    $sql = "select* from sanpham where 1";
    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm ='" . $iddm . "'";
    }
    $sql .= " order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_home()
{
    $sql = "SELECT * from sanpham where 1 order by id desc limit 0,12";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadone_sanpham_cungloai($id, $iddm)
{
    $sql = "SELECT * from sanpham where iddm=" . $iddm . " AND id <>" . $id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function load_tendm($iddm)
{
    if ($iddm > 0) {
        $sql = "SELECT *from danhmuc where id =" . $iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    } else {
        return "";
    }
}
