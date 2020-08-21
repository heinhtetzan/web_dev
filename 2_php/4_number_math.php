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
<h4>12 useful Number functions</h4>
<ol>
    <li>is_int()|is_float()|is_nan()|is_numeric()</li>
    <li>round(x)</li>
    <li>pow(x, y)</li>
    <li>sqrt(x)</li>
    <li>abs(x)</li>
    <li>ceil(x)</li>
    <li>floor(x)</li>
    <li>rand(start,end)</li>
    <li>sin(x)</li>
    <li>max(0, 150, 30, 20, -8, -200)</li>
    <li>min(0, 150, 30, 20, -8, -200)</li>
    <li>number_format()</li>
</ol>
<hr>

<?php

    $no = 123.345;
    $weight = 95.23;
    $height = 5.7;
    $money = 324344.33434;

    echo number_format($money,2,".","");


?>
</body>
</html>