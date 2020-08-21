<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h4>10 useful String functions in PHP</h4>
<ol>
    <li>strlen()</li>
    <li>str_word_count()</li>
    <li>strrev() | str_shuffle()</li>
    <li>strpos(str, search)</li>
    <li>substr(str,start, length)</li>
    <li>strtoupper() | strtolower()</li>
    <li>strip_tags()</li>
    <li>str_replace(find,new,str)</li>
    <li>trim()</li>
    <li>str_split(string,length) | explode(separator,string,limit)</li>
<!--    str to array-->
</ol>
<hr>



<?php

    $name = "xyzhein htet zanaaxyz";
    print_r(explode(" ",$name,2));

?>



</body>
</html>