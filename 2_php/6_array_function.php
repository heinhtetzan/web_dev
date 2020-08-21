<?php

echo "<pre>";

$fruit = array("apple","orange","mango","banana");

$mySelf = array(
    "name" => "ko",
    "name2" => "aung",
    "name3" => "oo",
    "name4" => "min",
    "age" => 26,
    "status" => false,
    "job" => array("Web Developer","project manager","IT Consultant")
);

shuffle($fruit);

print_r($fruit);

