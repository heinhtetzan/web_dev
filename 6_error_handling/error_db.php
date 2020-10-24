<?php

error_reporting(0);

$dbError = "";

$con = mysqli_connect("localhost","root","","blogs");

$dbError .= mysqli_connect_error();


$sql = "INSERT INTO categories (title,user_ids,aa) VALUES ('san kyi tar par',1,'this is aa')";

$query = mysqli_query($con,$sql);

if($query){
    echo "aung p";
}else{
    $dbError .=  "fail : ".mysqli_error($con);
}

error_log($dbError,3,"store/error.log");


?>