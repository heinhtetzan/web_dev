<?php include "template/header.php"; ?>

<h1>This is index Page</h1>
<pre>
    <?php
    echo "http://{$_SERVER['HTTP_HOST']}/my_class/wd_6/2_php/project_sample/";
    print_r($_SERVER);
    ?>
</pre>

<?php include "template/footer.php"; ?>