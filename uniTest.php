<?php
/**
 * Created by PhpStorm.
 * User: mountin
 * Date: 11.04.16
 * Time: 22:49
 */

    require_once('vendor/autoload.php');
    use \app\Codework\AppWork\AppWork as AppWork;

class Test1Test extends PHPUnit_Framework_TestCase {

    /**
     * @dataProvider providerPower
     */
    public function testMakeCopy($a, $b, $c){
        $my = new AppWork($a, $b, 'images');
        $this->assertEquals($c, $my->makeCopy());
    }

    public function testMakeCopy2(){
        $my = new AppWork("http://www.ya.ru/", ['jpg', 'png', 'gif', 'jpeg'], 'images');
        $this->assertNotEquals(9, $my->makeCopy());
    }

    public function providerPower ()
    {
        return array (
            array ( 'http://jaqqa.com', ['png'], 5),
            array ( "http://www.images.com/", ['jpg', 'png', 'gif', 'jpeg'], 14),
            //array (3, 5, 243)
        );
    }
} 