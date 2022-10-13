<?php
var_dump($_POST);
var_dump($_FILES);

$target_dir = "C:/xampp/htdocs/IIP/prj/upload/";
// $target_file = $target_dir . "101_" .basename($_FILES["fileToUpload"]["name"]);

$target_file = $target_dir . basename($_FILES["resumeToUpload"]["name"]);
$uploadOk = 1;
//echo $target_file;
$resumeFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if resume file is a actual image or fake image
/*if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["resumeToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
        //var_dump($check);
       // exit();
      
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}*/

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;


}
// Check file size
if ($_FILES["resumeToUpload"]["size"] > 1000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($resumeFileType != "pdf" ) {
    echo "Sorry only PDF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["resumeToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["resumeToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

?>