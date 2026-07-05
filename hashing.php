<?php
$password = "kj123";
$hash = password_hash($password, PASSWORD_DEFAULT);

echo $hash . "<br>";

if (password_verify("kj123", $hash)) {
    echo "correct password...";
} else {
    echo "incorrect password";
}
