<?php
$db_server = "localhost";
$db_user = "root";
$db_password = "sql@123";
$db_name = "businessdb";
$con = null;

try {
    $con = mysqli_connect($db_server, $db_user, $db_password, $db_name);
} catch (mysqli_sql_exception $e) {
    echo "internal server error<br>";
}

if ($con) {
    echo "db connected";
} else {
    echo "db not connected";
}
