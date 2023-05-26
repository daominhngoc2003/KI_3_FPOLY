<?php
    function insert_binhluan($username,$full_name,$content,$iduser,$idsp,$ngaybinhluan){
        $sql = "INSERT INTO binhluan(username,full_name,content,iduser,idsp,ngaybinhluan) 
        values('$username','$full_name','$content','$iduser','$idsp','$ngaybinhluan')";
        pdo_execute($sql);
    }
    function loadall_binhluan($idsp){
        $sql = "select * from binhluan where 1";
        if ($idsp>0) {
            $sql.=" AND idsp = '".$idsp."'";
        }else
        $sql.=" order by id desc";
        $listbinhluan=pdo_query($sql);
        return $listbinhluan;
    }
    function delete_binhluan($id){
        $sql = "delete from binhluan where id=".$id;
        pdo_execute($sql);
    }
    function loadall_binhluan_admin(){
        $sql = "SELECT*FROM binhluan where 1 order by id desc limit 0,10";
        $listbinhluan = pdo_query($sql);
        return $listbinhluan;
    }
