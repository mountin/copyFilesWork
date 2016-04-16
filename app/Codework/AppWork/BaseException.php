<?php
    /**
     * Created by PhpStorm.
     * User: mountin
     * Date: 10.04.16
     * Time: 22:53
     */

    namespace app\Codework\AppWork;

    //interface iException{}

    class BaseException extends \Exception
    {
        public $message = 'Неизвестная ошибка';

        function __construct($message = '', $code = 0)
        {
            $this->$message = $message;
            parent::__construct($message, $code);
        }

    }