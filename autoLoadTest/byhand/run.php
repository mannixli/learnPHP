<?php
/**
 *       Filename:  run.php
 *    Description:
 *         Author:  limengqi03@baidu.com
 *        Created:  July 30, 22:34
 *       Copyright (c) 2019, Baidu.com All Rights Reserved
 */
ini_set('display_errors',1);
// 直接包含
$ret = include 'class.php';
echo sprintf("include ret-value:%d,ret-type:%s\n", $ret, gettype($ret));
Foo::getFoo();

// 包含不存在的文件
//$ret1 = include './class1.php';
//echo sprintf("include ret-value:%d,ret-type:%s\n", $ret1, gettype($ret1));

// 重复包含  include_once 可以
$ret2 = include './class.php';
echo sprintf("include ret-value:%d,ret-type:%s\n", $ret, gettype($ret));
Foo::getFoo();

// require 出错后不再执行 其他与include相同