<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'iwp');

// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $conference = $_POST['conference'];
    $filename = $_FILES['myfile']['name'];
    $title = $_POST['title'];
    $author = $_POST['author_name'];
    $email = $_POST['email'];
    $abstract = $_POST['abstract'];
    $paper_area = $_POST['paper_area'];
    $country = $_POST['country'];
    $mob = $_POST['mobile'];

    // destination of the file on the server
    $destination = './uploaded_papers/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (conference, title, author, email, abstract, paper_area, country, mobile, filename, filesize, downloads) VALUES ('$conference', '$title', '$author','$email','$abstract','$paper_area','$country','$mob','$filename','$size',0)";
            if (mysqli_query($conn, $sql)) {
                echo "<script type='text/javascript'>alert('File Uploaded Successfully!')</script>";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}