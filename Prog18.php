<!DOCTYPE html>
<html>
<head>
    <title>File Upload Form</title>
</head>
<body>
    <h1>File Upload Form</h1>
    <form method="post" enctype="multipart/form-data">
        <label for="file">Select a file to upload:</label>
        <input type="file" name="file" id="file">
        <input type="submit" name="submit" value="Upload File">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $file = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        // Specify the directory where the file will be uploaded
        $uploadDirectory = "/Users/grery/Documents/XAMPP/htdocs/TestFolder/";
        // Move the uploaded file to the specified directory
        if (move_uploaded_file($fileTmpName, $uploadDirectory . $file)) {
            echo "<p>File uploaded successfully: $file</p>";
        } else {
            echo "<p>Failed to upload file.</p>";
        }
    }
    ?>
</body>
</html>
