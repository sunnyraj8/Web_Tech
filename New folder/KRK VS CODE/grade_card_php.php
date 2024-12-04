<!DOCTYPE html>
<html>
<head>
    <title>Grade Card</title>
</head>
<body>
    <form method="post">
        <input type="number" name="marks" placeholder="Enter marks (0-100)" required>
        <button type="submit">Get Grade</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $marks = $_POST["marks"];
        switch (true) {
            case ($marks >= 90):
                $grade = "A";
                break;
            case ($marks >= 80):
                $grade = "B";
                break;
            case ($marks >= 70):
                $grade = "C";
                break;
            case ($marks >= 60):
                $grade = "D";
                break;
            default:
                $grade = "F";
        }
        echo "Your grade is: $grade";
    }
    ?>
</body>
</html>
