<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .show-photo{
            margin-top: 20px;
        }
        .show-photo img{

            height: 50px;
        }
    </style>
</head>
<body>

<form action="save.php" method="post" enctype="multipart/form-data">
    <label for="">Multiple Upload</label>
    <br>
    <br>
    <input type="file" name="upload[]" accept="application/zip" multiple>
    <button>upload</button>
</form>
<h4>Uploaded Photo</h4>
<div class="show-photo">
    <?php 
    $store = scandir("store/");
    foreach ($store as $key=>$s){
    ?>
        <img src="store/<?php echo $s; ?>" alt="">
    <?php } ?>
</div>

</body>
</html>