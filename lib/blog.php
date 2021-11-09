<?php


function addblog($title,$desc,$img,$category,$userid){
    $connect =  mysqli_connect(SERVER,USER,PASS,DB);
    $query = "INSERT INTO `blog` (`title`,`description`,`img`,`category_id`,`user_id`) VALUES ('$title','$desc','$img',$category,$userid) ";
    // echo $query;die;
    mysqli_query($connect,$query);
    if(mysqli_affected_rows($connect) == 1){
        return true;
    }else{
        return false;
    }
}


function selectblog($id = ""){
    
    $connect =  mysqli_connect(SERVER,USER,PASS,DB);
    if(!empty($id)){
        $query = "SELECT * FROM `blog` WHERE `category_id` = $id  ORDER BY `id` DESC";

    }else{
        $query = "SELECT * FROM `blog`";
    }
    $res =  mysqli_query($connect,$query);
    while($row = mysqli_fetch_assoc($res)){
        $data[] = $row; 
    }
    return $data;
}


function selectblogbyid($id){
    
    $connect =  mysqli_connect(SERVER,USER,PASS,DB);
    $query = "SELECT * FROM `blog` WHERE `id` = $id";

    $res =  mysqli_query($connect,$query);
      $row = mysqli_fetch_assoc($res);
    
    return $row;
}