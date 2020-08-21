<?php

    $str = "hein htet zan";
    $age = 26;
    $arr = ["x","y","z"];
    $asso = [
        "name" => "hein htet zan",
        "age" => 26,
        "status" => false
    ];

    echo $str;
    echo "<br>";

    echo $age;
    echo "<br>";

    print_r($arr);
    echo "<br>";

    print_r($asso);
    echo "<br>";

    var_dump($arr);
    echo "<br>";

    function first() {
        return "this is first";
    }
    echo first();
    echo "<br>";

    $y = false;
    if($y){
        echo "this is true";
    }else{
        echo "this is false";
    }

    for($i=0;$i<10;$i++){
        echo "loop $i <br>";
    }

