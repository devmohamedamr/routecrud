<?php


function getUserByEmailAndPassword($email,$password){
    $connect =  mysqli_connect(SERVER,USER,PASS,DB);
    $query = "SELECT * FROM `user` WHERE `email` = '$email' && `password` = '$password' ";
    $res =  mysqli_query($connect,$query);
    $row = mysqli_fetch_assoc($res);
      
    return $row;
}