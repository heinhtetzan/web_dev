<?php
session_start();

if(!$_SESSION['user']){
    header("location:login.php");
}