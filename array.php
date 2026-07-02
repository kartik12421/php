<?php
$foods = array("apple", "mango", "banana", "graps");
// echo $foods[0];
// array_push($foods, "pineapple", "kiwi");
// array_pop($foods);
// array_shift($foods);
$reversed = array_reverse($foods);

foreach ($foods as $food) {
    echo $food . "<br>";
}

echo count($foods);
