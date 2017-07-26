<?php
/**
 * Created by PhpStorm.
 * User: cth
 * Date: 2017/7/25
 * Time: 下午11:04
 */
echo "FILE NAME : " . $_FILES["file"]["name"] . "<br>";
echo "FILE TYPE : " . $_FILES["file"]["type"] . "<br>";
echo "FILE TMP NAME : " . $_FILES["file"]["tmp_name"] . "<br>";
echo "FILE SIZE : " . $_FILES["file"]["size"] . "<br>";

if (($_FILES["file"]["size"] < 200000)
    && ($_FILES["file"]["type"] == "image/jpeg" || $_FILES["file"]["type"] == "image/pjpeg"
        || $_FILES["file"]["type"] == "image/gif" || $_FILES["file"]["type"] == "image/png")) {

    if ($_FILES["file"]["error"] > 0) {
        echo "ERROR CODE : " . $_FILES["file"]["error"];
    } else {


        if (file_exists("upload/" . $_FILES["file"]["name"])) {
            echo "File already exist,stored in " . "upload/" . $_FILES["file"]["name"];
        } else {
            if (!file_exists("upload/")) {
                mkdir("upload", 0777);
            }
            move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
            echo "File store successfully,stored in " . "upload/" . $_FILES["file"]["name"];
        }
    }
} else {
    echo "Invalid File";
}

?>