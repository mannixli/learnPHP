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

##########
//print "aa".strval(3);
$aa = "{\"description\":\"测试测试\"}";
var_dump($aa);
var_dump(substr($aa,16,-2));
$bb = stripslashes($aa);
var_dump($bb);
$cc = json_decode($bb,true);
print_r($cc);
var_dump($cc['description']);