<?php
$hours = 230;
$rate = 15;
$weekly_pay = null;

if ($hours < 0) {
    echo "invalid input hours";
    $weekly_pay = 0;
} else if ($hours <= 40) {
    $weekly_pay = $hours * $rate;
} else {
    $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
}

echo "your weekly pay is: \${$weekly_pay}";
