<?php

/**
 * Repeat 3 times the contents of an array.
 *
 * @param array $arr The input array
 * @param int $i (optional) times the array is repeated
 * @return array
 */
function repeat ($arr = [], $i = 3) {
    $buf = [];
    while ($i-- != 0) {
        foreach($arr as $num) {
            $buf[] = $num;
        }
    }
    return $buf;
}

var_dump(repeat([1,2,3]));