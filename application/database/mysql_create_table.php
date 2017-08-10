<html>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">

    Table Name : <input type="text" name="tableName"><br>
    <input type="submit" name="submit" value="create"><br>

</form>

<?php
if (!empty($_POST["tableName"])) {
    $sucessful = false;
    $conn = mysqli_connect("192.168.64.2", "root", "cth19910127");
    if ($conn != null) {
        if (mysqli_select_db($conn, "test")) {
            $sql = "CREATE TABLE " . $_POST["tableName"] . "(
            _id int primary key auto_increment,
            name varchar(15),
            age int,
            mobile varchar(15))";
            echo "sql = $sql" . "<br>";
            $sucessful = mysqli_query($conn, $sql);
        }
    }

    if ($sucessful) {
        echo "create sucessful";
    } else {
        echo "create failed";
    }
}
?>

</html>
