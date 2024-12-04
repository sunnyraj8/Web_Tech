<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Series</title>
</head>
<body>
    <form method="post">
        <input type="number" name="n" placeholder="Enter the number of terms" required>
        <button type="submit">Generate Fibonacci</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST["n"];
        $num1 = 0;
        $num2 = 1;
        echo "Fibonacci Series: $num1, $num2";
        for ($i = 2; $i < $n; $i++) {
            $num3 = $num1 + $num2;
            echo ", $num3";
            $num1 = $num2;
            $num2 = $num3;
        }
    }
    ?>
</body>
</html>
