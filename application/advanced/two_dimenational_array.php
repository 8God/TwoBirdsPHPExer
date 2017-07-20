<?php
/**
 * Created by PhpStorm.
 * User: cth
 * Date: 2017/7/20
 * Time: 上午12:31
 */

$class = array(
    array('Mike', 'Hpang', 'John'),
    array('Lee', 'Kobe', 'Jordan'),
    array('Oneal', "Black", 'James'),
);

for ($row = 0; $row < count($class); $row++) {
    echo "<p><b>" . "Row  " . $row . "</b></p>";
    echo "<ol>";
    for ($col = 0; $col < count($class[$row]); $col++) {
        echo "<li>" . $class[$row][$col] . "</li><br>";
    }
    echo '</ol>';
}

?>