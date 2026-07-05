<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>

<body>
    this is the home page
    <a href="index.php">go to index page</a>
    <form action="home.php" method="post">
        <button name="logout">log out</button>
    </form>
</body>

</html>
<?php
echo $_SESSION["username"] . "<br>";
echo $_SESSION["password"] . "<br>";

if (isset($_POST["logout"])) {
    session_destroy();
    header("location: index.php");
}
?>