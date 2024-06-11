<?php
if(isset($_FILES['image'])) {
    $errors = array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_ext = strtolower(end(explode('.', $file_name))); // Fixed the variable name here
    $allowed_extensions = array("jpeg", "jpg", "png");

    if(!in_array($file_ext, $allowed_extensions)) {
        $errors[] = "Extension not allowed. Please choose a JPEG or PNG file.";
    }
    if($file_size > 2097152) { // 2 MB
        $errors[] = 'File size must be less than or equal to 2 MB';
    }

    if(empty($errors)) {
        $upload_dir = "./images/"; // Directory to save uploaded images
        $file_destination = $upload_dir . $file_name;
        if(move_uploaded_file($file_tmp, $file_destination)) {
            echo "Success";
        } else {
            $errors[] = "Failed to move uploaded file.";
        }
    }

    if(!empty($errors)) {
        foreach($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>
<html>
<body>
<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="image" />
    <input type="submit" value="Upload" />
</form>
</body>
</html>
