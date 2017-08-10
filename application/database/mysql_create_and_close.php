<?php
/**
 * Created by PhpStorm.
 * User: cth
 * Date: 2017/8/1
 * Time: 上午12:05
 */

$conn = mysqli_connect("192.168.64.2", "root", "cth19910127");

if ($conn) {
    echo "connect mysql successful";

    echo "<br>";

    $select_db = mysqli_select_db($conn, "student");

    if (!$select_db) {
        echo "the db not exist";
        if (createDatabase("student", $conn)) {
            echo "create database successful!";
        } else {
            echo "create database failed!";
        }
    } else {
        echo "select student database";
    }

} else {
    die ("connect mysql faild");

}

function createDatabase($dbName, $conn)
{
    return mysqli_query($conn, "CREATE DATABASE " . $dbName);
}

mysqli_close($conn);

?>