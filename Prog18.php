<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>

<h2>Upload a File</h2>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    Select File: <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
    <input type="submit" value="Upload File" name="submit">
</form>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if file is selected
    if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == UPLOAD_ERR_OK) {
        $targetDirectory = "uploads/";
        $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);

        // Check if file already exists
        if (file_exists($targetFile)) {
            echo "<p>Sorry, file already exists.</p>";
        } else {
            // Move the uploaded file to the specified directory
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
                echo "<p>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.</p>";
            } else {
                echo "<p>Sorry, there was an error uploading your file.</p>";
            }
        }
    } else {
        // Check if file upload error occurred
        if ($_FILES["fileToUpload"]["error"] == UPLOAD_ERR_NO_FILE) {
            echo "<p>Please select a file to upload.</p>";
        } else {
            echo "<p>Sorry, there was an error uploading your file. Error code: " . $_FILES["fileToUpload"]["error"] . "</p>";
        }
    }
}
?>

</body>
</html>
