<?php
/**
 *       Filename:  quickSort.php
 *    Description:
 *         Author:  limengqi03@baidu.com
 *        Created:  August 01, 20:37
 *       Copyright (c) 2019, Baidu.com All Rights Reserved
 */
function QuickSortBusiList(&$busiList, $start, $end)
{
    if ($end <= $start) return;
    $sentinel = $busiList[$start];
    $i = $start + 1;
    $j = $end;
    while ($i < $j) {
        while ($busiList[$i]['count'] <= $sentinel['count']) {
            $i++;
        }
        while ($busiList[$j]['count'] >= $sentinel['count']) {
            $j--;
        }
        if ($i < $j) {
            $tmp = $busiList[$i];
            $busiList[$i] = $busiList[$j];
            $busiList[$j] = $tmp;
        }
    }
    if ($j >= $start && $sentinel['count'] > $busiList[$j]['count']) {
        $busiList[$start] = $busiList[$j];
        $busiList[$j] = $sentinel;
    }
    QuickSortBusiList($busiList, $start, $j - 1);
    QuickSortBusiList($busiList, $j + 1, $end);
}
$busiList = array(
    array('count'=>6,'id'=>0),
    array('count'=>1,'id'=>1),
    array('count'=>2,'id'=>2),
    array('count'=>7,'id'=>3),
    array('count'=>9,'id'=>4),
    array('count'=>3,'id'=>5),
    array('count'=>4,'id'=>6),
    array('count'=>5,'id'=>7),
    array('count'=>10,'id'=>8),
);
//print_r($busiList);
QuickSortBusiList($busiList,0,count($busiList)-1);
//print_r($busiList);