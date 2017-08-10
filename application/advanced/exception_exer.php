<?php
/**
 * Created by PhpStorm.
 * User: cth
 * Date: 2017/7/31
 * Time: 下午11:39
 */

function exception_exer($exception)
{
    echo "exception msg : " . $exception->getMessage();
}

set_exception_handler('exception_exer');

throw new Exception("exception occured");
?>