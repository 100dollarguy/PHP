<?php
// Database connection
$servername = "localhost";
$username = "root"; // MySQL username
$password = ""; // Blank password
$dbname = "admission";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create table query
$createTableQuery = "CREATE TABLE IF NOT EXISTS admissions (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone_number VARCHAR(15) NOT NULL,
    date_of_birth DATE NOT NULL,
    gender VARCHAR(10) NOT NULL,
    nationality VARCHAR(50) NOT NULL,
    address VARCHAR(100) NOT NULL,
    city VARCHAR(50) NOT NULL,
    state VARCHAR(50) NOT NULL,
    zip_code VARCHAR(10) NOT NULL,
    country VARCHAR(50) NOT NULL,
    course VARCHAR(50) NOT NULL,
    semester VARCHAR(20) NOT NULL,
    year INT(4) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($createTableQuery) === FALSE) {
    echo "Error creating table: " . $conn->error;
}

// Form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $date_of_birth = $_POST['date_of_birth'];
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip_code = $_POST['zip_code'];
    $country = $_POST['country'];
    $course = $_POST['course'];
    $semester = $_POST['semester'];
    $year = $_POST['year'];

    $insertQuery = "INSERT INTO admissions (first_name, last_name, email, phone_number, date_of_birth, gender, nationality, address, city, state, zip_code, country, course, semester, year) 
                    VALUES ('$first_name', '$last_name', '$email', '$phone_number', '$date_of_birth', '$gender', '$nationality', '$address', '$city', '$state', '$zip_code', '$country', '$course', '$semester', '$year')";

    if ($conn->query($insertQuery) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $insertQuery . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
</head>
<body>
    <h2>Admission Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        First Name: <input type="text" name="first_name" required><br><br>
        Last Name: <input type="text" name="last_name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Phone Number: <input type="tel" name="phone_number" required><br><br>
        Date of Birth: <input type="date" name="date_of_birth" required><br><br>
        Gender:
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female" required> Female
        <input type="radio" name="gender" value="Other" required> Other<br><br>
        Nationality: <input type="text" name="nationality" required><br><br>
        Address: <input type="text" name="address" required><br><br>
        City: <input type="text" name="city" required><br><br>
        State: <input type="text" name="state" required><br><br>
        Zip Code: <input type="text" name="zip_code" required><br><br>
        Country: <input type="text" name="country" required><br><br>
        Course:
        <select name="course" required>
            <option value="">Select Course</option>
            <option value="Engineering">Engineering</option>
            <option value="Medical">Medical</option>
            <option value="Business">Business</option>
        </select><br><br>
        Semester:
        <select name="semester" required>
            <option value="">Select Semester</option>
            <option value="Spring">Spring</option>
            <option value="Summer">Summer</option>
            <option value="Fall">Fall</option>
        </select><br><br>
        Year: <input type="number" name="year" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

