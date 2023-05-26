<?php
    function insert_danhmuc($name){
        $sql = "INSERT into danhmuc(name) values('$name')";
        pdo_execute($sql);
    }
    function loadall_danhmuc(){
        $sql = "SELECT*FROM danhmuc order by id desc";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }
    function delete_danhmuc($id){
        $sql = "DELETE FROM danhmuc where id=".$id;
        pdo_execute($sql);
    }
    function loadone_danhmuc($id){
        $sql = "SELECT * from danhmuc where id=".$id;
        $dm = pdo_query_one($sql);
        return $dm;
    }
    function update_danhmuc($id,$name){
        $sql = "UPDATE danhmuc set name = '".$name."' where id =". $id;
        pdo_execute($sql);
    }
?>