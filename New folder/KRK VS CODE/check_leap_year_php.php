<!DOCTYPE html>
<html>
<head>
    <title>Leap Year Checker</title>
</head>
<body>
    <form method="post">
        <input type="number" name="year" placeholder="Enter a year" required>
        <button type="submit">Check Leap Year</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $year = $_POST["year"];
        if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
            echo "$year is a Leap Year.";
        } else {
            echo "$year is not a Leap Year.";
        }
    }
    ?>
</body>
</html>
