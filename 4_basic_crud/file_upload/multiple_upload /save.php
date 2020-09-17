<?php

echo "<pre>";
//$tempFile = $_FILES['upload']['tmp_name'];
//$fileName = $_FILES['upload']['name'];
//print_r($_FILES);
//$saveFolder = "store/";
//if(move_uploaded_file($tempFile,$saveFolder.uniqid()."_".$fileName)){
//    header("location:index.php");
//}

//print_r($_FILES);

$file = $_FILES['upload'];
$fileNameArr = $file['name'];
$fileTempArr = $file['tmp_name'];
$saveFolder = "store/";

foreach ($fileNameArr as $key=>$fn){
//    echo $fileTempArr[$key];
    move_uploaded_file($fileTempArr[$key],$saveFolder.uniqid()."_".$fileNameArr[$key]);
}

header("location:index.php");

