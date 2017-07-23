<html>
<head>
    <title>Write File</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="text" name="content"/><br>
    <input type="submit" name="write file"/><br>
    <input type="submit" name="getFileContent" value="getFileContent"><br>
</form>

<?php
/**
 * Created by PhpStorm.
 * User: cth
 * Date: 2017/7/23
 * Time: 下午4:07
 */

$name = $_POST['getFileContent'];

if ($name === 'getFileContent') {
    getFileContent();
    return;

}

$txt = $_POST["content"];
if (!empty($txt)) {
    $testFile = fopen("../../resource/test_write.txt", "a+");

    fwrite($testFile, $txt);
    fwrite($testFile, "\n");

    fclose($testFile);

    print "write \"" . $txt . "\" to file successfully";
}

function getFileContent()
{
    $testFile = fopen("../../resource/test_write.txt", "r");

    echo "File Start<br>";
    while (!feof($testFile)) {
        echo fgets($testFile) . "<br>";
    }
    echo "File End<br>";

    fclose($testFile);
}

?>

</body>
</html>

