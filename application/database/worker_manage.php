<?php
/**
 * Created by PhpStorm.
 * User: cth
 * Date: 2017/8/13
 * Time: 下午4:31
 */

$operation = $_POST['operation'];

if (!empty($operation)) {
    $conn = mysqli_connect("192.168.64.2", "root", "cth19910127");

    if ($conn != null) {
        echo "connect database successfully.<br>";

        if (mysqli_select_db($conn, "test")) {
            echo "select database successfully.<br>";

            $name = $_POST["name"];
            $age = $_POST["age"];
            $mobile = $_POST["mobile"];

            if ($operation == "insert") {
                insertWorker($conn, $name, $age, $mobile);
            } else if ($operation == "delete") {
                deleteWorker($conn, $name);
            } else if ($operation == "update") {
                updateWorker($conn, $name, $age, $mobile);
            } else if ($operation == "select") {
                selectWorker($conn, $name);
            }
        } else {
            echo "select database failed.<br>";
        }

        mysqli_close($conn);
    } else {
        echo "connect database failed.<br>";
    }

}


function selectWorker($conn, $name)
{
    $sql = "SELECT * FROM worker WHERE name = '$name'";

    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($result, 2)) {
//        print_r($row);
        echo "name = " . $row[1] . ", age = " . $row[2] . ", mobile = " . $row[3] . "<br>";
    }
}

function insertWorker($conn, $name, $age, $mobile)
{
    $sql = "INSERT INTO worker (name, age, mobile) VALUES ('$name','$age','$mobile')";
    echo "insertWorker : name = $name, age = $age, mobile = $mobile.<br>";
    echo "sql = $sql<br>";
    if (mysqli_query($conn, $sql)) {
        echo "insert successfully";
    } else {
        echo "insert failed";
    }
}

function deleteWorker($conn, $name)
{
    $sql = "DELETE FROM worker WHERE name = '$name'";

    if (mysqli_query($conn, $sql)) {
        echo "DELETE $name SUCCESSFULLY";
    }
}

function updateWorker($conn, $name, $age, $mobile)
{
    if (empty($name) || (empty($name) && empty($age))) {
        echo "Please input the information you wanna update.<br>";
        return;
    }
    $sql = "UPDATE worker SET age = '$age',mobile = '$mobile' WHERE name = '$name'";
    if (mysqli_query($conn, $sql)) {
        echo "update successfully<br>";
    } else {
        echo "update failed<br>";
    }
}

?>