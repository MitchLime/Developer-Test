<?php

/**
 * Transform a string with these rules :
 * 1) No vowels
 * 2) Lowercase
 * 3) First letter capital
 *
 * @param string $str Input string
 * @return string
 */
function reformat($str = '') {
    $str = strtolower($str);
    $vowels = array("a", "e", "i", "o", "u");
    return ucfirst( str_replace( $vowels, '', $str) );
}

echo reformat("liMeSHArp DeveLoper TEST");