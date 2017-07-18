<!DOCTYPE HTML>
<html>
<head>
    <title>
        check user info is empty
    </title>

    <style type="text/css">
        .error {
            color: #F96441;
        }

        .form {
            padding: 20px;
            border: solid;
            border-color: #1F2124;
            border-width: 1px;
            text-align: center;
        }

    </style>
</head>
<body>
<?php
$nameErr = $ageErr = $phoneNumErr = $genderErr = "";
$name = $age = $phoneNum = $gender = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["user_name"])) {
        $nameErr = "Name is required";
    } else {
        $name = getValue($_POST["user_name"]);
    }
    if (empty($_POST["user_age"])) {
        $ageErr = "Age is required";
    } else {
        $age = getValue($_POST["user_age"]);
    }
    if (empty($_POST["user_phone_num"])) {
        $phoneNumErr = "User phone number is required";
    } else {
        $phoneNum = getValue($_POST["user_phone_num"]);
    }
    if (empty($_POST["gender"])) {
        $genderErr = "Please select gender";
    } else {
        $gender = getValue($_POST["gender"]);
    }

}

function getValue($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

?>

<form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name :
    <input type="text" name="user_name"><span class="error">* <?php echo $nameErr; ?></span><br>
    Age :
    <input type="text" name="user_age"><span class="error">* <?php echo $ageErr; ?></span><br>
    Phone Number :
    <input type="text" name="user_phone_num"><span class="error">* <?php echo $phoneNumErr; ?></span><br>
    gender:
    <input type="radio" name="gender" value="male"> male
    <input type="radio" name="gender" value="female"> female
    <span class="error">*<?php echo $genderErr ?></span><br>

    <input type="submit" name="submit" value="submit">
</form>


<?php
echo "You input:" . "<br>";
echo "Name:" . $name . "<br>";
echo "Age:" . $age . "<br>";
echo "Phone Num:" . $phoneNum . "<br>";
echo "Gender:" . $gender . "<br>";
?>
</body>
</html>