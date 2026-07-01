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
$area = pi() * $r * $r;

echo "Circumference: {$circumference} <br>";
echo "Area: {$area}";
?>