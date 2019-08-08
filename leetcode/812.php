<?php
/**
 *       Filename:  812.php
 *    Description:
 *         Author:  limengqi03@baidu.com
 *        Created:  July 31, 09:11
 *       Copyright (c) 2019, Baidu.com All Rights Reserved
 */

//print triangleAreaBy3p(0, 0, 0, 2, 2, 0);
print largestTriangleArea([[0, 0], [0, 1], [1, 0], [0, 2], [2, 0]]);

function largestTriangleArea($option)
{
    $len = count($option);
    $area = 0;
    for ($i = 0; $i < $len; $i++) {
        for ($j = $i + 1; $j < $len; $j++) {
            for ($k = $j + 1; $k < $len; $k++) {
                $tmpArea = triangleAreaBy3p($option[$i][0], $option[$i][1], $option[$j][0], $option[$j][1], $option[$k][0], $option[$k][1]);
                if ($tmpArea > $area) {
                    $area = $tmpArea;
                }
            }
        }
    }
    return $area;
}

function triangleAreaBy3p($x1, $y1, $x2, $y2, $x3, $y3)
{
    $area = ($x1 * $y2 + $x2 * $y3 + $x3 * $y1 - $x1 * $y3 - $x2 * $y1 - $x3 * $y2) / 2;
    return abs($area);
}