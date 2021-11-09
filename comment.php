<?php

require "config.php";
require "lib/reivew.php";

addreview($_POST['name'],$_POST['email'],$_POST['review'],$_POST['blog_id']);

// print_r($_POST);