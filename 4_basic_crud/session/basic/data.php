<?php

session_start();

if($_SESSION['name']){
    echo "hello ".$_SESSION['name'];
    echo "<a href='clear.php'>logout</a>";
}else{
    header("location:index.php");
}

