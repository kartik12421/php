<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="country.php" method="post">
        <label>Enter a country: </label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>

</html>
<?php
$capitals = array("India" => "New Delhi", "USA" => "Washington D.C.", "China" => "Beijing", "Japan" => "Tokyo");

$capital = $capitals[$_POST["country"]];

echo $capital;
?>