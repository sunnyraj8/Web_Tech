<!DOCTYPE html>
<html>
<head>
    <title>Swap Numbers</title>
</head>
<body>
    <form method="post">
        <input type="number" name="num1" placeholder="Enter first number" required>
        <input type="number" name="num2" placeholder="Enter second number" required>
        <button type="submit">Swap</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        echo "Before Swap: Num1 = $num1, Num2 = $num2<br>";
        // Swapping logic
        $temp = $num1;
        $num1 = $num2;
        $num2 = $temp;
        echo "After Swap: Num1 = $num1, Num2 = $num2";
    }
    ?>
</body>
</html>
