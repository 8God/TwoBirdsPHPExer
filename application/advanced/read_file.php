<?php
/**
 * Created by PhpStorm.
 * User: cth
 * Date: 2017/7/21
 * Time: 下午11:09
 */

$filePath = "../../resource/test_file.txt";
$testFile = fopen($filePath, "r+");
echo "the file size is " . filesize($filePath) . "<br>";
while (!feof($testFile)) {
    echo fgets($testFile) . "<br>";
}
fclose($testFile);

?>