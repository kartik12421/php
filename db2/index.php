<?php
include("db.php");

$username = "spiderman";
$pass = "spidyyy";
$hash = password_hash($pass, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";
try {
    mysqli_query($con, $sql);
    echo "user registered successfully...";
} catch (mysqli_sql_exception) {
    echo "something missing...";
}

mysqli_close($con);
