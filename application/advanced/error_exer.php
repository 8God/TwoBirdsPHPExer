<?php
/**
 * Created by PhpStorm.
 * User: cth
 * Date: 2017/7/31
 * Time: 下午11:30
 */


function error_function($error_no, $error_msg)
{
    echo "<b>error msg : </b>  [$error_no] - $error_msg";
}

set_error_handler('error_function');

echo($test);
?>