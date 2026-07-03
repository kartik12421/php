<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox</title>
</head>

<body>
    <form action="checkbox.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">Pizza <br>
        <input type="checkbox" name="burger" value="Burger">Burger <br>
        <input type="checkbox" name="sandwich" value="Sandwich">Sandwich <br>
        <input type="checkbox" name="roll" value="Roll">Roll <br>
        <button name="submit">Submit</button>
    </form>
</body>

</html>
<?php
if (isset($_POST["submit"])) {
    if (isset($_POST["pizza"])) {
        echo "you like pizza <br>";
    }
    if (isset($_POST["burger"])) {
        echo "you like burger <br>";
    }
    if (isset($_POST["sandwich"])) {
        echo "you like sandwich <br>";
    }
    if (isset($_POST["roll"])) {
        echo "you like roll <br>";
    }
    //don't like
    if (empty($_POST["pizza"])) {
        echo "you DON'T like pizza <br>";
    }
    if (empty($_POST["burger"])) {
        echo "you DON'T like burger <br>";
    }
    if (empty($_POST["sandwich"])) {
        echo "you DON'T like sandwich <br>";
    }
    if (empty($_POST["roll"])) {
        echo "you DON'T like roll <br>";
    }
}
?>