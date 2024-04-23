//Write a PHP script that receive form input by the method post to check the number is prime or no


<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Checker</title>
</head>
<body>

<h2>Enter a number to check if it's prime:</h2>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Number: <input type="text" name="number"><br><br>
    <input type="submit" value="Check">
</form>

<?php
// Function to check if a number is prime
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if number is set and not empty
    if (isset($_POST['number']) && !empty($_POST['number'])) {
        $number = intval($_POST['number']);
        
        if ($number <= 0) {
            echo "<h2>Please enter a positive integer greater than 0.</h2>";
        } else {
            if (isPrime($number)) {
                echo "<h2>{$number} is a prime number.</h2>";
            } else {
                echo "<h2>{$number} is not a prime number.</h2>";
            }
        }
    } else {
        echo "<h2>Please enter a number.</h2>";
    }
}
?>

</body>
</html>
