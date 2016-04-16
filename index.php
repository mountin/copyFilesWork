<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    use \app\Codework\UserTest\UserTest as UserTest;
    use \app\Codework\NewClass\MyNewClass as MyNewClass;

    require_once('vendor/autoload.php');
//echo '123';
//$user = new topic2();
    //$user = new UserTest();
    $user = new MyNewClass();