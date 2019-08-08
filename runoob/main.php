<?php
/**
 *       Filename:  main.php
 *    Description:
 *         Author:  limengqi03@baidu.com
 *        Created:  August 01, 09:44
 *       Copyright (c) 2019, Baidu.com All Rights Reserved
 */

//print "aa".strval(3);
$aa = "{\"description\":\"测试测试\"}";
var_dump($aa);
var_dump(substr($aa,16,-2));
$bb = stripslashes($aa);
var_dump($bb);
$cc = json_decode($bb,true);
print_r($cc);
var_dump($cc['description']);
