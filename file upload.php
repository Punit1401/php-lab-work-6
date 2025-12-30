<form method="POST" enctype="multipart/form-data">
    Select file: <input type="file" name="myfile" required><br><br>
    <input type="submit" value="Upload">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['myfile'])) {
        $filename = $_FILES['myfile']['name'];
        $tempname = $_FILES['myfile']['tmp_name'];

        // Move uploaded file to a folder
        move_uploaded_file($tempname, "uploads/" . $filename);
        echo "File uploaded successfully!<br>Filename: $filename";
    }
}
?>
