<?php
/**
 *       Filename:  run.php
 *    Description:
 *         Author:  limengqi03@baidu.com
 *        Created:  July 30, 22:52
 *       Copyright (c) 2019, Baidu.com All Rights Reserved
 */
ini_set('display_errors', '1');

$my_autoload1 = function ($classname)
{
    echo "entry my_autoload1 \n";
    $filename = "./". lcfirst($classname) .".php";
    include_once($filename);
};

$my_autoload2 = function ($classname)
{
    echo "entry my_autoload2 \n";
    $filename = "./". lcfirst($classname) .".class.php";
    include_once($filename);
};

spl_autoload_register($my_autoload1);
spl_autoload_register($my_autoload2);

Foo::getFoo();
Foo2::getFoo2();