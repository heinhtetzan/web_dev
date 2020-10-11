<?php

require_once 'core/auth.php';
require_once 'core/base.php';
require_once 'core/functions.php';



if(categoryRemovePin()){
    linkTo('category_add.php');
}