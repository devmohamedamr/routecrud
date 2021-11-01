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


function selectblog(){
    $connect =  mysqli_connect(SERVER,USER,PASS,DB);
    $query = "SELECT * FROM `blog`  ORDER BY `id` DESC";
    $res =  mysqli_query($connect,$query);
    while($row = mysqli_fetch_assoc($res)){
        $data[] = $row; 
    }
    return $data;
}