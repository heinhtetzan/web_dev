<?php

$conn = mysqli_connect("localhost","root","","my_list");
$id = $_GET['id'];

$sql = "SELECT * FROM photos WHERE id='$id'";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($query);
unlink($row['photo_link']);

$sql = "DELETE FROM photos WHERE id='$id'";
mysqli_query($conn,$sql);

header("location:index.php");
