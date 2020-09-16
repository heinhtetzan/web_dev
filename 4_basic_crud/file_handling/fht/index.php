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

<form action="write.php" method="post">
    <lable>user Name</lable>
    <input type="text" name="username">
    <br>
    <lable>Password</lable>
    <input type="password" name="password">
    <br>
    <button>submit</button>
</form>
<ul>

    <?php


    $list = scandir("store");
    foreach ($list as $key=>$l){

        if($key>2){

    ?>
    <li>
        <a href="store/<?php echo $l ?>" target="_blank"><?php echo $l ?></a>
    </li>
    <?php

        }

    }

    ?>

</ul>


</body>
</html>