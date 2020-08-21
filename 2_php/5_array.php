<?php

//Indexed Array
$fruit = array("apple","orange","mango","banana");
$arr = ["x","y","z","a"];//5.4

//Associative Array
$mySelf = array(
    "name" => "hein htet zann",
    "age" => 26,
    "status" => false,
    "job" => array("Web Developer","project manager","IT Consultant")
);

$me = [
  "one" => "first",
  "two" => "second",
  "three" => ["one","tow","three"]
];

var_dump($mySelf["name"]);

//Multidimensional Array

$myClass = array(
    array(
        "name" => "hein htet zann",
        "age" => 26,
        "status" => false,
        "job" => array("Web Developer","project manager","IT Consultant")
    ),
    array(
        "name" => "hein htet zann",
        "age" => 26,
        "status" => false,
        "job" => array("Web Developer","project manager","IT Consultant")
    ),
    array(
        "name" => "hein htet zann",
        "age" => 26,
        "status" => false,
        "job" => array("Web Developer","project manager","IT Consultant")
    ),
    array(
        "name" => "hein htet zann",
        "age" => 26,
        "status" => false,
        "job" => array("Web Developer","project manager","IT Consultant")
    ),
);

var_dump($myClass[0]["job"][1]);