<?php
    function insert_taikhoan($username,$pass,$email_user){
        $sql = "INSERT INTO user(username,pass,email_user) VALUES('$username','$pass','$email_user')";
        pdo_execute($sql);
    }
    function checkuser($username,$pass){
        $sql = "SELECT * FROM user WHERE username='".$username."' AND pass ='".$pass."'";
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function update_user($id_user , $username,$pass,$email_user,$phone_user, $name_user, $address_user){
        $sql = "UPDATE user SET username = '".$username."', pass = '".$pass."' , email_user = '".$email_user."', phone_user ='".$phone_user."', name_user ='".$name_user."', address_user ='".$address_user."'  WHERE id_user =".$id_user; 
        pdo_execute($sql);
    }
    function check_email($email_user){
        $sql = "SELECT * FROM user WHERE email_user='".$email_user."'";
        $sp = pdo_query_one($sql);
        return $sp;
    }
?>