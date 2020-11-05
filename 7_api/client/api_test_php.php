<?php

$data = file_get_contents("http://localhost/my_class/web_dev_7/5_sample_blog/api/post/?limit=5");

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


<script>

    let data = <?php echo $data; ?>;

    console.log(data);

</script>

</body>
</html>