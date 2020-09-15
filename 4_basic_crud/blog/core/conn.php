<?php

$conn = mysqli_connect("localhost","root","","my_list");

if(!$conn) {
    die("connection fail : " . mysqli_connect_error());
}
