<?php
include("db.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2>Welcome to Fakebook</h2>
        <label for="username">Username: </label>
        <input type="text" name="username" id="username">
        <br>
        <label for="pass">Password: </label>
        <input type="password" name="pass" id="pass">
        <br>
        <input type="submit" value="register" name="register">
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $pass = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($username)) {
        echo "Please enter a username";
    } else if (empty($pass)) {
        echo "Please enter your password";
    } else {
        $hash = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";

        try {
            mysqli_query($con, $sql);
            echo "User registered successfully";
        } catch (mysqli_sql_exception $e) {
            echo "Could not register user";
        }
    }
}

mysqli_close($con);
?>
