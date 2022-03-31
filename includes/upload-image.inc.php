<?php
// Include the database configuration file
require_once 'dbh.inc.php';

// If file upload form is submitted
$status = $statusMsg = '';
if(isset($_POST["submit"])){
    $status = 'error';
    $userID = $_POST["userid"];

    if(!empty($_FILES["image"]["name"])) {
        // Get file info
        $fileName = basename($_FILES["image"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType, $allowTypes)){
            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));

            // Insert image content into database
            $query = $userID;
            //$query = "UPDATE users SET imagePath = '$imgContent' WHERE usersId = '$userID'";
            var_dump($_POST);
            die;
            $insert = $conn->query($query);

            if($insert){
                $status = 'success';
                $statusMsg = "File uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            }
        }else{
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
        }
    }else{
        $statusMsg = 'Please select an image file to upload.';
    }


    echo $statusMsg;
    echo "test23";
    die();
}

// Display status message
echo $statusMsg;
?>
