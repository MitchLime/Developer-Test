<?php

/**
 * Add element at the start of the array
 *
 * @param array $arr Chosen array
 * @param integer $element Element to be added into $arr
 * @return array
 */
function add_element_first($arr, $element) {
    for($i = count($arr); $i > 0 ; $i --){
        $arr[$i] = $arr[$i - 1];
    }
    $arr[0] = $element;
    return $arr;
}

/**
 * Output the next binary number
 *
 * @param array $arr array with binary sequence
 * @return array
 */
function next_binary_number($arr = []) {
    $j = 0;
    for($i = count($arr); $i > 0 ; $i --) {
        if($arr[$i-1] == 0) {
            $arr[$i - 1] = 1;
            break;
        } else {
            $j++;
            $arr[$i - 1] = 0;
        }
    }
    if($j == count($arr)) {
        $arr = add_element_first($arr, 1);
    }
    return $arr;
}

var_dump(next_binary_number([1,0]));