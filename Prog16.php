//Write a PHP script to compute addition of two matrices as a form input.

<!DOCTYPE html>
<html>
<head>
    <title>Matrix Addition</title>
</head>
<body>

<h2>Enter two matrices to compute their addition:</h2>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <h3>Matrix A:</h3>
    <input type="text" name="a00"> <input type="text" name="a01"> <input type="text" name="a02"><br>
    <input type="text" name="a10"> <input type="text" name="a11"> <input type="text" name="a12"><br>
    <input type="text" name="a20"> <input type="text" name="a21"> <input type="text" name="a22"><br><br>

    <h3>Matrix B:</h3>
    <input type="text" name="b00"> <input type="text" name="b01"> <input type="text" name="b02"><br>
    <input type="text" name="b10"> <input type="text" name="b11"> <input type="text" name="b12"><br>
    <input type="text" name="b20"> <input type="text" name="b21"> <input type="text" name="b22"><br><br>

    <input type="submit" value="Calculate">
</form>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all matrix elements are set and not empty
    $isValid = true;
    $matrixA = [];
    $matrixB = [];

    // Loop through matrix A
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $index = "a{$i}{$j}";
            if (isset($_POST[$index]) && is_numeric($_POST[$index])) {
                $matrixA[$i][$j] = $_POST[$index];
            } else {
                $isValid = false;
                break 2;
            }
        }
    }

    // Loop through matrix B
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $index = "b{$i}{$j}";
            if (isset($_POST[$index]) && is_numeric($_POST[$index])) {
                $matrixB[$i][$j] = $_POST[$index];
            } else {
                $isValid = false;
                break 2;
            }
        }
    }

    if ($isValid) {
        // Compute matrix addition
        $result = [];
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                $result[$i][$j] = $matrixA[$i][$j] + $matrixB[$i][$j];
            }
        }

        // Display the result
        echo "<h3>Resultant Matrix:</h3>";
        echo "<table border='1'>";
        for ($i = 0; $i < 3; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 3; $j++) {
                echo "<td>{$result[$i][$j]}</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<h2>Please enter valid numeric values for all matrix elements.</h2>";
    }
}
?>

</body>
</html>

