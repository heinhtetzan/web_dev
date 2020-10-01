<?php

$conn = mysqli_connect("localhost","root","","my_list");

$file = $_FILES['upload'];
$fileNameArr = $file['name'];
$fileTempArr = $file['tmp_name'];
$saveFolder = "store/";

foreach ($fileNameArr as $key=>$fn){
    $newName = $saveFolder.uniqid()."_".$fileNameArr[$key];
    move_uploaded_file($fileTempArr[$key],$newName);

    $sql = "INSERT INTO photos (photo_link) VALUES ('$newName')";


    if(!mysqli_query($conn,$sql)){
        die(mysqli_error());
    }
}

header("location:index.php");

