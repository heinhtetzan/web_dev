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
        .photo-box{
            border:1px solid black;
            display: inline-block;
        }
        .show-photo img{
            height: 150px;
            margin: 10px;

        }
    </style>
</head>
<body>

<form action="save.php" method="post" enctype="multipart/form-data">
    <label for="">Multiple Upload</label>
    <br>
    <br>
    <input type="file" name="upload[]" accept="image/jpeg,image/png" multiple>
    <button>upload</button>
</form>
<h4>Uploaded Photo</h4>
<div class="show-photo">
    <?php
    $conn = mysqli_connect("localhost","root","","my_list");
    $sql = "SELECT * FROM photos";
    $query = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($query)){
    ?>
        <div class="photo-box">
            <img src="<?php echo $row['photo_link']; ?>" alt="">
            <br>
            <a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a>
        </div>
    <?php } ?>
</div>

</body>
</html>