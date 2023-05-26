<?php

function loadone_bill($idbill)
{
    $sql = "SELECT * FROM bill where id=" . $idbill;
    $bill = pdo_query_one($sql);
    return $bill;
}

function insert_bill($iduser, $full_name, $username, $address, $phone, $email, $pttt, $ngaydathang, $tongdonhang)
{
    $sql = "INSERT INTO bill(iduser,full_name,username,address,phone,email,pttt,ngaydathang,tongdonhang) 
        values('$iduser','$full_name','$username','$address','$phone','$email','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}
function loadall_bill_admin(){
    $sql= "SELECT * FROM bill order by id desc";
    $listbill = pdo_query($sql);
    return $listbill;
}
function delete_bill($id){
    $sql = "DELETE from bill where id=".$id;
    pdo_execute($sql);
}
function update_bill($id,$status){
    $sql = "UPDATE bill set status = '".$status."' where id =". $id;
    pdo_execute($sql);
}

?>