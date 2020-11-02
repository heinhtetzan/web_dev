<?php

echo "<pre>";
$supportFileType = ['image/jpeg','image/png'];
$tempFile = $_FILES['upload']['tmp_name'];
$fileName = $_FILES['upload']['name'];
if($_FILES['upload']['name']){
    // print_r($_FILES);
    if(in_array($_FILES['upload']['type'],$supportFileType)){
        $saveFolder = "store/";
        if(move_uploaded_file($tempFile,$saveFolder.uniqid()."_".$fileName)){
            header("location:index.php");
        }
    }else{
        echo "file not support";
    }
    
}else{
    echo "ma shi buu";
}
