<!DOCTYPE html>
<?php setcookie("user", $_POST["name"], time() + 3600); ?>
<html>
<head>
    <title>user login</title>
</head>
<body>

Welcome <?php echo $_POST["name"]; ?>;<br>

Your email is <?php echo $_POST["email"]; ?>;<br>
<br>
<br>

<?php
if (isset($_COOKIE["user"]))
    echo "Welcome " . $_COOKIE["user"] . "!<br />";
else
    echo "Welcome guest!<br />";

print_r($_COOKIE);


?>

</body>
</html>
