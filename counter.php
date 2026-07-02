<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter</title>
</head>

<body>
    <form action="counter.php" method="post">
        <label for="num">Enter number</label>
        <input type="number" name="num" id="num">
        <br>
        <button>submit</button>
    </form>
</body>

</html>
<?php
$counter = $_POST["num"];

for ($i = 1; $i <= $counter; $i++) {
    echo $i . "<br>";
}
?>