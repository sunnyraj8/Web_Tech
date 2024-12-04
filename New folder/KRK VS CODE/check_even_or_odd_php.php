<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd</title>
</head>
<body>
    <form method="post">
        <input type="number" name="num" placeholder="Enter a number" required>
        <button type="submit">Check</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["num"];
        echo $num . " is " . ($num % 2 == 0 ? "Even" : "Odd");
    }
    ?>
</body>
</html>
