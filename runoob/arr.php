<?php
/**
 *       Filename:  arr.php
 *    Description:
 *         Author:  limengqi03@baidu.com
 *        Created:  July 31, 10:14
 *       Copyright (c) 2019, Baidu.com All Rights Reserved
 */
$arr = [
    0 => 'a',
    1 => 'b',
    2 => 'c'
];
var_dump($arr);
unset($arr[0]);
var_dump($arr);
unset($arr[0]);
var_dump($arr);