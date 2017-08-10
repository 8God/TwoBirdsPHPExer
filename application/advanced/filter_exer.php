<?php
/**
 * Created by PhpStorm.
 * User: cth
 * Date: 2017/7/31
 * Time: 下午11:45
 */

function isIntegerValid($num)
{
    if (filter_var($num, FILTER_VALIDATE_INT)) {
        echo "The input is $num, Integer is valid.<br>";
    } else {
        echo "The input is $num, Integer is invalid.<br>";
    }
}

isIntegerValid(123);
isIntegerValid("abc");

echo "<hr>";


?>