<?php

echo "<pre>";
$tempFile = $_FILES['upload']['tmp_name'];
$fileName = $_FILES['upload']['name'];
print_r($_FILES);
$saveFolder = "store/";
if(move_uploaded_file($tempFile,$saveFolder.uniqid()."_".$fileName)){
    header("location:index.php");
}