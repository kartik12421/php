<?php
$name = "kj";
$food = "burger";
$email = "fake123@gmail.com";

$age = 20;
$cgpa = 9.01;
$pizza_price = 100;

$employee = true;
$online = false;

echo "hello, {$name}<br>";
echo "hello,i like to eat - {$name}";
echo "<br>";
echo "my email is - {$email}<br>";
echo "i am - {$age} years old<br>";
echo "your cgpa is - {$cgpa}<br>";
echo "pizza's price is - \${$cgpa}<br>";
echo "online status - {$online}<br>";
$quantity = 4;
$price = 40;
$total = null;
echo "you have ordered: {$quantity} X {$price}<br>";
$total = $quantity * $price;
echo "total bill is = \${$total}";

echo "<br>";
