<?php

function categoryList(){
    global $conn;
    $sql = "SELECT * FROM to_do";
    $query = mysqli_query($conn,$sql);
    $total_row =  mysqli_num_rows($query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($query)) {
        array_push($rows,$row);
    }
    return $rows;
}

function categoryShow($id){
    global $conn;
    $id = $_GET['id'];
    $sql = "SELECT * FROM to_do WHERE  id=$id";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    return $row;
}

function categoryCreate(){
    global $conn;
    $message = $_GET['message'];
    $sql = "INSERT INTO to_do (message) VALUES ('$message')";
    //die($sql);
    if(mysqli_query($conn,$sql)){
        return true;
    }else{
        die("Query Fail : ".mysqli_error());
    }
}

function categoryDelete(){
    global $conn;

    $id = $_GET['id'];
    $sql = "DELETE FROM to_do WHERE id = $id";

    if(!mysqli_query($conn,$sql)){
        die("Delete Fail : ".mysqli_error());
    }else{
        return true;
    }
}

function categoryUpdate(){
    global $conn;
    $message = $_GET["message"];
    $id = $_GET['id'];
    $sql = "UPDATE to_do SET message='$message' WHERE id=$id";
    if(mysqli_query($conn,$sql)){
        return true;
    }else{
        die("Update Error : ".mysqli_error());
    }
}