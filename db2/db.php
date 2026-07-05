<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "sql@123";
$db_name = "businessdb";
$con = null;

// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $con = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
} catch (mysqli_sql_exception $e) {
    echo "internal srever error";
}
