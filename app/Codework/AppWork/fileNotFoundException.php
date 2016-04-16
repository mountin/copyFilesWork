<?php
/**
 * Created by PhpStorm.
 * User: mountin
 * Date: 10.04.16
 * Time: 22:55
 */

    namespace app\Codework\AppWork;

    class fileNotFoundException extends fileModuleException{
        function __construct($message = '', $code = 0) {
            parent::__construct($message, 0);
        }
    }

