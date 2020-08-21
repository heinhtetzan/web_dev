<script>

    let obj = {
        name : "hein htet zan",
        age : 26,
        teach : function () {
            return this.name+" can teach programming";
        }
    }

</script>
<?php

$name = "hein htet zan";
$nickName = 'ko htet';
echo "I'm ".$name;
echo "<br>";
$age = 26;
var_dump($age);
echo "<br>";

$weight = 95.6;
var_dump($weight);
echo "<br>";

$status = false;
var_dump($status);
echo "<br>";

//Index Array
$arr = array("x","y","z");
$arr[3] = "a";
echo $arr[3];
echo "<br>";

//Associated Array
$assoc = array(
    "name" => "hein htet zan",
    "age" => 26,
    "status" => false,
    "job" => "web developer",
    "skill" => array("html","css","js")
);
echo "<pre>";
var_dump($assoc['name']);

//object
$obj = (object) $assoc;
var_dump($obj->name);

