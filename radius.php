<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>circle</title>
</head>

<body>
    <form action="radius.php" method="post">
        <label for="radius">Radius: </label>
        <input type="number" name="r" id="radius">
        <br>
        <button>submit</button>
    </form>

</body>

</html>
<?php
$r = $_POST["r"];
$circumference = 2 * pi() * $r;
$circumference = round($circumference, 2);

$area = pi() * pow($r, 2);
$area = round($area, 2);

$volume = 4 / 3 * pi() * pow($r, 3);
$volume = round($volume, 2);

echo "Circumference: {$circumference} cm <br>";
echo "Area: {$area} cm^2 <br>";
echo "Volume: {$volume} cm^2";
?>