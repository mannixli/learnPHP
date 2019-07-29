<?php
/**
 *       Filename:  EOF.php
 *    Description:
 *         Author:  limengqi03@baidu.com
 *        Created:  July 10, 09:48
 *       Copyright (c) 2019, Baidu.com All Rights Reserved
 */

//echo <<<EOD
//    <h1>标题1</h1>
//    <p>段落1</p>
//EOD;
// 多个时只生效第一个。。
$name = "runoob";
$a = <<<EOF
    "abc"$name
    "123"
    2
    woshi 
    nihao
    
EOF;
echo $a;