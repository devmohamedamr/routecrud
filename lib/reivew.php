<?php



function addreview($name,$email,$comment,$blog_id){
    $connect =  mysqli_connect(SERVER,USER,PASS,DB);
    $query = "INSERT INTO `review` (`name`,`email`,`comment`,`blog_id`) VALUES ('$name','$email','$comment',$blog_id) ";
    // echo $query;die;
    mysqli_query($connect,$query);
    if(mysqli_affected_rows($connect) == 1){
        return true;
    }else{
        return false;
    }
}


function getreviewbyblogid($id){
    $connect =  mysqli_connect(SERVER,USER,PASS,DB);
    $query = "SELECT * FROM `review` WHERE `blog_id` = $id";
    $res =  mysqli_query($connect,$query);
    while($row = mysqli_fetch_assoc($res)){
        $data[] = $row; 
    }
    if(!empty($data)){
        return $data;
    }else{
        return [];
    }
    

}