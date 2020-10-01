<?php

session_start();

$_SESSION['name'] = $_POST['name'];
$_SESSION['password'] = $_POST['password'];


print_r($_SESSION);
