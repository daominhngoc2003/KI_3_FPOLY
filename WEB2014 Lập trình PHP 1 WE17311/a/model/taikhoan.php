<?php
    function insert_taikhoan($full_name,$username,$password,$email){
        $sql = "INSERT INTO taikhoan(full_name,username,password,email) 
        values('$full_name','$username','$password','$email')";
        pdo_execute($sql);
    }
    function checkuser($username,$password){
        $sql = "SELECT *FROM taikhoan where username ='".$username."' AND password ='".$password."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function checkemail($email){
        $sql = "SELECT *FROM taikhoan where  email ='".$email."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function loadall_taikhoan(){
        $sql = "SELECT * FROM taikhoan order by id desc";
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan;
    }
    function delete_taikhoan($id){
        $sql = "DELETE from taikhoan where id=".$id;
        pdo_execute($sql);
    }
    function loadone_taikhoan($id){
        $sql = "SELECT *FROM taikhoan where id=".$id;
        $tk=pdo_query_one($sql);
        return $tk;
    }
    function update_taikhoan($id, $full_name, $username, $password, $email,$address, $phone, $role, $image_user){
        if($image_user >0){
            $sql = "UPDATE taikhoan SET full_name= '" . $full_name . "' ,  username= '" . $username . "' , password='" . $password . "',address='" . $address . "',email='" . $email . "', phone= '" . $phone . "' , role= '" . $role . "',image_user = '" . $image_user . "' where id=" . $id;
            pdo_execute($sql);
        } else{
            $sql = "UPDATE taikhoan SET full_name= '" . $full_name . "' ,  username= '" . $username . "' ,password='" . $password . "',address='" . $address . "', email= '" . $email . "' , phone= '" . $phone . "',role = '" . $role . "'  where id=" . $id;
            pdo_execute($sql);
        }
    }
?>