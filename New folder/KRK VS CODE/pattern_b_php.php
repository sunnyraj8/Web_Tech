<!DOCTYPE html>
<html>
<head>
    <title>Pattern B</title>
</head>
<body>
    <?php
    for ($i = 5; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    ?>
</body>
</html>
