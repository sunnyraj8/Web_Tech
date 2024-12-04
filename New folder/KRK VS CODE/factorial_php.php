<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculation</title>
    <script>
        function calculateFactorial() {
            let num = parseInt(document.getElementById("number").value);
            let factorial = 1;
            for (let i = 1; i <= num; i++) {
                factorial *= i;
            }
            alert("Factorial of " + num + " is " + factorial);
        }
    </script>
</head>
<body>
    <form onsubmit="event.preventDefault(); calculateFactorial();">
        <input type="number" id="number" placeholder="Enter a number" required>
        <button type="submit">Calculate Factorial</button>
    </form>
</body>
</html>
