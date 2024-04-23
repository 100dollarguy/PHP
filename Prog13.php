//Write a PHP script to implement form handling using post method.

<!DOCTYPE html>
<html>
<head>
    <title>Form Handling with POST Method</title>
</head>
<body>

<h2>Enter your details:</h2>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>
    <input type="submit">
</form>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if name and email are set and not empty
    if (isset($_POST['name']) && isset($_POST['email']) && !empty($_POST['name']) && !empty($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];

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

