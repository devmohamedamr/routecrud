<?php
require "../config.php";
require_once "../lib/category.php";





$id =  $_GET['id'];


$res = delete($id);


if($res == 1){
    header("LOCATION: index.php");
}
