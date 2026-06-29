<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="restro.php" method="post">
        <label>quantity: </label>
        <input type="text" name="quantity">
        <button>submit</button>
    </form>
</body>

</html>
<?php
$item = "pizza";
$price = 5.99;
$quantity = $_POST["quantity"];
$total = null;

$total = $quantity * $price;

echo "You have ordered {$quantity} x {$item}/s <br>";
echo "You total is {$total} <br>"
?>