<?php
/**
 *       Filename:  staticTest.php
 *    Description:
 *         Author:  limengqi03@baidu.com
 *        Created:  July 10, 16:40
 *       Copyright (c) 2019, Baidu.com All Rights Reserved
 */

class a{

    protected static $test="class a";

    static public function static_method() {
        echo 123;
    }
    public function static_test(){
        echo static::$test; // Results class b
        echo self::$test; // Results class a

    }

}

class b extends a{

    protected static $test="class b";

}

$obj = new b();
$obj->static_test();