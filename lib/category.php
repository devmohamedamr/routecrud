<?php


function add($title){
    $connect =  mysqli_connect(SERVER,USER,PASS,DB);
    $query = "INSERT INTO `category` (`title`) VALUES ('$title') ";
    mysqli_query($connect,$query);
    if(mysqli_affected_rows($connect) == 1){
        return true;
    }else{
        return false;
    }
}

function delete($id){
    $connect =  mysqli_connect(SERVER,USER,PASS,DB);
    $query = "DELETE FROM `category` WHERE `id` = $id";
    mysqli_query($connect,$query);
    if(mysqli_affected_rows($connect) == 1){
        return true;
    }else{
        return false;
    }

}

function update($title,$id){
    $connect =  mysqli_connect(SERVER,USER,PASS,DB);
    $query = "UPDATE  `category` SET `title` = '$title' WHERE `id` = $id";
    mysqli_query($connect,$query);
    if(mysqli_affected_rows($connect) == 1){
        return true;
    }else{
        return false;
    }
}


function select(){
    $connect =  mysqli_connect(SERVER,USER,PASS,DB);
    $query = "SELECT * FROM `category`";
    $res =  mysqli_query($connect,$query);
    while($row = mysqli_fetch_assoc($res)){
        $data[] = $row; 
    }

    return $data;
}


function selectbyid($id){
    $connect =  mysqli_connect(SERVER,USER,PASS,DB);
    $query = "SELECT * FROM `category` WHERE `id` = $id";
    $res =  mysqli_query($connect,$query);
    $row = mysqli_fetch_assoc($res);

    return $row;
}