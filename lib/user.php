<?php


function getUserByEmailAndPassword($email,$password){
    $connect =  mysqli_connect(SERVER,USER,PASS,DB);
    $query = "SELECT * FROM `user` WHERE `email` = '$email' && `password` = '$password' ";
    $res =  mysqli_query($connect,$query);
    $row = mysqli_fetch_assoc($res);
      
    return $row;
}


function addnewuser($name,$email,$password){
    $connect =  mysqli_connect(SERVER,USER,PASS,DB);
    $query = "INSERT INTO `user` (`name`,`email`,`password`) VALUES ('$name','$email','$password')";
    $res =  mysqli_query($connect,$query);

    return mysqli_affected_rows($connect);
}




function emailexist($email){
    $connect =  mysqli_connect(SERVER,USER,PASS,DB);
    $query = "SELECT * FROM `user` WHERE `email` = '$email'";
    $res =  mysqli_query($connect,$query);
    $row = mysqli_fetch_assoc($res);
    if(empty($row)){
        return false;
    }else{
        return true;
    }  
}