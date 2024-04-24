

<!DOCTYPE html>
<html>
<head>
    <title>Form Handling with GET Method</title>
</head>
<body>

<h2>Enter your details:</h2>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>
    <input type="submit">
</form>

<?php
//Write a PHP script to implement form handling using get method
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Check if name and email are set and not empty
    if (isset($_GET['name']) && isset($_GET['email']) && !empty($_GET['name']) && !empty($_GET['email'])) {
        $name = $_GET['name'];
        $email = $_GET['email'];

        echo "<h2>Form Submitted Successfully!</h2>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email;
    } else {
        echo "<h2>Please fill out all the fields.</h2>";
    }
}
?>

</body>
</html>

