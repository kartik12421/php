<?php
$username = null;

if (isset($username)) {
    echo "this variable is set <br>";
} else {
    echo "this variable is not set <br>";
}

if (empty($username)) {
    echo "this variable is empty";
} else {
    echo "this variable is not empty";
}
