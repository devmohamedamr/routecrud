<?php



function is_empty($input){
    if(!empty($input) && strlen($input) > 0){
        return true;
    }else{
        return false;
    }
}