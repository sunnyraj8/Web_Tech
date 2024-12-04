<!DOCTYPE html>
<html>
<head>
    <title>Factorial</title>
</head>
<body>
    <form method="post">
        <input type="number" name="num" placeholder="Enter a number" required>
        <button type="submit">Calculate Factorial</button>
    </form>
    <?php
    function factorial($n) {
        if ($n <= 1) {
            return 1;
        }
        return $n * factorial($n - 1);
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["num"];
        echo "Factorial of $num is " . factorial($num);
    }
    ?>
</body>
</html>
