<?php
/**
 *       Filename:  run.php
 *    Description:
 *         Author:  limengqi03@baidu.com
 *        Created:  July 30, 22:41
 *       Copyright (c) 2019, Baidu.com All Rights Reserved
 */
ini_set('display_errors', '1');

function __autoload($classname)
{
    $filename = "./" . lcfirst($classname) . ".php";
    include_once $filename;
}

Foo::getFoo();