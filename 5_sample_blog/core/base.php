<?php

function con(){
    return mysqli_connect("localhost","root","","blog");
}

$info = array(
  "name" => "Sample Blog",
  "short" => "SB",
  "description" => "ကျောင်းသားများအတွက် sample project",
);

$role = ["Admin","Editor","User"];


$url = "http://{$_SERVER['HTTP_HOST']}/my_class/web_dev_7/5_sample_blog";