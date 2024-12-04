<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>
    <form method="post">
        <input type="number" name="num1" placeholder="Enter first number" required>
        <input type="number" name="num2" placeholder="Enter second number" required>
        <select name="operation">
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select>
        <button type="submit">Calculate</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];

        switch ($operation) {
            case "add":
                echo "Result: " . ($num1 + $num2);
                break;
            case "subtract":
                echo "Result: " . ($num1 - $num2);
                break;
            case "multiply":
                echo "Result: " . ($num1 * $num2);
                break;
            case "divide":
                if ($num2 != 0) {
                    echo "Result: " . ($num1 / $num2);
                } else {
                    echo "Division by zero is not allowed.";
                }
                break;
        }
    }
    ?>
</body>
</html>
