<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="math.php" method="post">
        <label>x: </label>
        <input type="text" name="x">
        <br>
        <label>y: </label>
        <input type="text" name="y">
        <button>submit</button>
    </form>
</body>

</html>
<?php
$x = $_POST["x"];
$y = $_POST["y"];


$total = abs($x);
$total2 = round($x);
$total3 = floor($x);
$total4 = ceil($x);

$total5 = sqrt($x, $y);
$total6 = max($x, $y);
$total7 = min($x, $y);

$total8 = pi();
$total9 = rand();
$total10 = rand(1, 100);

echo $total5;
?>