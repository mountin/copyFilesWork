<?php
/**
 * Created by PhpStorm.
 * User: mountin
 * Date: 10.04.16
 * Time: 22:54
 */

    namespace app\Codework\AppWork;

    class fileModuleException extends \Exception{
        function __construct($message = '', $code = 0) {
            parent::__construct($message, 0);
        }
    }
