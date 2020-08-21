<?php
    $name = "hein htet zan";
?>
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
    <?php for($i=1;$i<= 10;$i++){ ?>
    <p>
        PHP Loop <?php echo $i; ?>
    </p>
    <?php } ?>

    <?php include "one.php"; ?>

    <div id="test" title="my name is <?php echo $name ?>">
        <?php echo $name; ?>
    </div>
    <script>
        // let name = "hein htet zan"
        // document.getElementById("test").innerHTML = "this is js";
        // document.getElementById("test").title = "my name is "+name;

        for(let i =1;i<=10;i++){
            document.getElementById("test").innerHTML += `<p>JS Loop ${i}</p>`;
        }
    </script>
</body>
</html>