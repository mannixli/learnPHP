<?php
/**
 *       Filename:  842.php
 *    Description:
 *         Author:  limengqi03@baidu.com
 *        Created:  July 29, 14:31
 *       Copyright (c) 2019, Baidu.com All Rights Reserved
 */
print implode(',', splitIntoFibonacci("539834657215398346785398346991079669377161950407626991734534318677529701785098211336528511"));

function splitIntoFibonacci($S)
{
    /**
     * [11,0,11,11]
     * [0,0,0,0]
     * [0,2,2,4]
     */
    $len = strlen($S);
    $first = 0;
    for ($i = 1; $i <= $len; $i++) {
        $second = $first + $i;
        $n1 = (int)substr($S, $first, $i);
//        if ($n1 === 0 && (int)$S !== 0) return [];
        for ($j = 1; $j <= ($len - $i) / 2; $j++) {
            $third = $second + $j;
            $n2 = (int)substr($S, $second, $j);
            $arr = [$n1, $n2];
            $n3 = $n1 + $n2;
            $len_n3 = strlen($n3);
            while ($third + $len_n3 <= $len) {
                if ($n3 !== (int)substr($S, $third, $len_n3) || $n3 >= pow(2, 31)) {
                    continue 2;
                }
                $arr[] = $n3;
                $third += $len_n3;
                $n11 = $n2;
                $n2 = $n3;
                $n3 = $n11 + $n2;
                $len_n3 = strlen($n3);
            }
            if (strlen(implode('', $arr)) === $len) return $arr;
        }

    }
    return [];
}