<?php

$name = "hein htet zan";// local
$age = 26;
$arr = ["x","y","z"];
$assoc = [
  "first_name" => "hein",
  "last_name" => "zan"
];

function run(){
    global $name;
    return $name;
}

echo run();