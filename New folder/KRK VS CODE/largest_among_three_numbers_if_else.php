<!DOCTYPE html>
<html>
<head>
    <title>Largest Number</title>
</head>
<body>
    <form method="post">
        <input type="number" name="num1" placeholder="Enter first number" required>
        <input type="number" name="num2" placeholder="Enter second number" required>
        <input type="number" name="num3" placeholder="Enter third number" required>
        <button type="submit">Find Largest</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];

        $largest = ($num1 > $num2) ? (($num1 > $num3) ? $num1 : $num3) : (($num2 > $num3) ? $num2 : $num3);
        echo "The largest number is $largest";
    }
    ?>
</body>
</html>
