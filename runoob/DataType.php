<?php
/**
 *       Filename:  DataType.php
 *    Description:
 *         Author:  limengqi03@baidu.com
 *        Created:  July 10, 10:31
 *       Copyright (c) 2019, Baidu.com All Rights Reserved
 */

$str = "hello world";
$x = -123;
$car_list = array("Volvo","BMW","Toyota");
class Car
{
    var $color;
    function __construct($color="green") {
        $this->color = $color;
    }
    function what_color() {
        return $this->color;
    }
}
$car = new Car();
echo $str,$x,"\n",PHP_EOL;
var_dump($car_list);
var_dump($car);
print_r($car_list);
print_r($car);
