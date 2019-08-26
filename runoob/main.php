<?php
/**
 *       Filename:  main.php
 *    Description:
 *         Author:  limengqi03@baidu.com
 *        Created:  August 01, 09:44
 *       Copyright (c) 2019, Baidu.com All Rights Reserved
 */


$info1 = memory_get_usage();
$info2 = memory_get_peak_usage();
//var_dump($info1/(8*1014*1024));
//var_dump($info2/(8*1014*1024));

$map = array(
    'a'=>1,
    'b'=>2
);
print_r($map['']);