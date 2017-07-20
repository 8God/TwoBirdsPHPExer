<?php
/**
 * Created by PhpStorm.
 * User: cth
 * Date: 2017/7/21
 * Time: 上午12:00
 */

//set time zone
date_default_timezone_set("Asia/Shanghai");

//different time format
echo "date(Y/m/d) = " . date("Y/m/d") . "<br>";
echo "date(Y-m-d) = " . date("Y-m-d") . "<br>";
echo "date(Y m d) = " . date("Y m d") . "<br>";
echo "date(Y年m月d日  h:i:sa) = " . date("Y年m月d日 h:i:sa") . "<br>";

echo "© 1991 - " . date("Y") . "<br>";

?>