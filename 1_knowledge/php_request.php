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

<ul>
    <li>get (url) </li>
    <li>post</li>
</ul>

<a href="php_respond.php?name=heinhtetzan&age=26&job=programmer">to server</a>

<h4>url ? key=value & key=val</h4>

<form action="php_respond.php?gf=poe" method="post" enctype="multipart/form-data">
    <input type="text" name="name" value="hein htet zan">
    <input type="text" name="age" value="26">
    <input type="text" name="job" value="web developer">
    <input type="file" name="photo">
    <input type="submit">
</form>

</body>
</html>