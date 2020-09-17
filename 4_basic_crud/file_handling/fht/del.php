<?php

unlink("store/".$_GET['name']);
header("location:index.php");
