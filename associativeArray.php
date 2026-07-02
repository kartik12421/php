<?php
$capitals = array("India" => "New Delhi", "USA" => "Washington D.C.", "China" => "bejing", "Japan" => "Tokyo");

// $capitals["Japan"] = "Kyoto";
// $capitals["Nepal"] = "katmandu";

echo $capitals["Japan"];
echo "<br>";

foreach ($capitals as $key => $value) {
    echo "{$key}: {$value} <br>";
}
