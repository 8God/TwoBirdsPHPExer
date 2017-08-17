<?php
/**
 * Created by PhpStorm.
 * User: cth
 * Date: 2017/8/17
 * Time: 下午10:48
 */

$domDoc = new DOMDocument();
$domDoc->load("person_info.xml");
$docElem = $domDoc->documentElement;

foreach ($docElem->childNodes AS $item) {

    print $item->nodeName . " = " . $item->nodeValue . "<br>";
}
?>