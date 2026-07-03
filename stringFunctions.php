<?php
$username = "KJ_is__here_";
$username2 = array("kj", "is", "here");
$phone = "123-456-7890";

// $username = strtolower($username);
// $username = strtoupper($username);
// $username = trim($username);
// $username = str_pad($username, 20, "0");
// $phone = str_replace("-", "", $phone);
// $username = strrev($username);
// $username = str_shuffle($username);
// $username = strcmp($username, "KJ_is__here_");
// $username = strlen($username);
// $username = strpos($username, "_");
// $username = substr($username, 0, 5);
// $fullname = explode("_", $username);
// foreach ($fullname as $name) {
//     echo $name . "<br>";
// }

$username2 = implode(" ", $username2);

echo $username2;
