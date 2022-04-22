<?php
// Include the database configuration file
include 'dbConfig.php';
$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$fileName2 = basename($_FILES["file2"]["name"]);
$targetFilePath = $targetDir . $fileName;
$targetFilePath2 = $targetDir . $fileName2;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
$filepath = "uploads/ . $fileName";


if (isset($_POST["submit"])) {

    $landarea = $_POST['landarea'];
    $servicetype = $_POST['servicetype'];
    $mobilenumber = $_POST['mobilenumber'];
    $email = $_POST['email'];
    $customername = $_POST['customername'];
    $designtype = $_POST['designtype'];
    $note = $_POST['note'];
    if (!empty($_FILES["file"]["name"]) && (!empty($_FILES["file2"]["name"]))) {
        // Allow certain file formats
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
        if (in_array($fileType, $allowTypes)) {
            // Upload file to server
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath) &&  (move_uploaded_file($_FILES["file2"]["tmp_name"], $targetFilePath2))) {
                // Insert image file name into database
                $insert = $db->query("INSERT into interiordesign (id, landarea, servicetype, mobilenumber, email, customername, designtype, engineeringdiagram, otherattachment, note) VALUES (DEFAULT,'$landarea','$servicetype','$mobilenumber','$email','$customername', '$designtype', '$targetFilePath', '$targetFilePath2', '$note')");
                if ($insert) {
                    $statusMsg = "The file " . $fileName . $fileName2 . " has been uploaded successfully.";
                } else {
                    $statusMsg = "File upload failed, please try again.";
                }
            } else {
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        } else {
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }
    } else {
        $statusMsg = 'Please select a file to upload.';
    }
}
// Display status message
echo $statusMsg;
