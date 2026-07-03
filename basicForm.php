<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Form</title>
</head>

<body>
    <form action="basicForm.php" method="post">
        <label>Username: </label>
        <input type="text" name="username"><br><br>
        <label>Password: </label>
        <input type="password" name="password"><br>
        <button name="login" value="log in">Log In</button>
    </form>
</body>

</html>
<?php
// foreach ($_POST as $key => $value) {
//     echo "{$key} => {$value} <br>";
// }

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username)) {
        echo "username is missing";
    } else if (empty($password)) {
        echo "password is missing";
    } else {
        echo "hello, {$username}";
    }
}
?>