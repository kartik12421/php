<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio</title>
</head>

<body>
    <form action="radio.php" method="post">
        <input type="radio" value="Visa" name="payment"> Visa <br>
        <input type="radio" value="UPI" name="payment"> UPI <br>
        <input type="radio" value="Net Banking" name="payment"> Net Banking <br>
        <input type="submit" name="confirm" value="Confirm">
    </form>
</body>

</html>
<?php
if (isset($_POST["confirm"])) {

    if (isset($_POST["payment"])) {
        $payment = $_POST["payment"];
    }

    switch ($payment) {
        case "Visa":
            echo "you selected Visa";
            break;
        case "UPI":
            echo "you selected UPI";
            break;
        case "Net Banking":
            echo "you selected Net Banking";
            break;
        default:
            echo "please select payment method";
    }
}
?>