<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitization</title>
</head>

<body>
    <form action="sanitize.php" method="post">
        username: <br>
        <input type="text" name="username"> <br>
        age: <br>
        <input type="number" name="age"> <br>
        Email: <br>
        <input type="email" name="email"> <br>
        <input type="submit" name="login" value="login">
    </form>
</body>

</html>
<?php
if (isset($_POST["login"])) {
    $username = filter_input(
        INPUT_POST,
        "username",
        FILTER_SANITIZE_FULL_SPECIAL_CHARS
    );
    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    echo "Hello, {$username} <br>";
    echo "your age is: {$age} <br>";
    echo "your EMAIL is: {$email} <br>";
}
?>