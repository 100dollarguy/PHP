

<!DOCTYPE html>
<html>
<head>
    <title>String Input Form</title>
</head>
<body>

<h2>Enter a string:</h2>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    String: <input type="text" name="input_string"><br><br>
    <input type="submit" value="Submit">
</form>

<?php
//Write a PHP script that receive string as a form input
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if input_string is set and not empty
    if (isset($_POST['input_string']) && !empty($_POST['input_string'])) {
        $input_string = $_POST['input_string'];

        echo "<h2>Submitted String:</h2>";
        echo "<p>{$input_string}</p>";
    } else {
        echo "<h2>Please enter a string.</h2>";
    }
}
?>

</body>
</html>

