<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    use \app\Codework\AppWork\AppWork as AppWork;

    require_once('vendor/autoload.php');

    $ff = new AppWork("http://www.images.com/", ['jpg', 'png', 'gif', 'jpeg'], 'images');
    //$ff = new AppWork("http://www.jaqqa.loc/", ['jpg', 'png', 'gif', 'jpeg'], 'images');
    $ff->makeCopy();
