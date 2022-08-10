<?php
    $imageName = $_POST['img'];
    $dir = "../storage";
    $imageFile = $_FILES[$imageName];
    $imageFileName = basename($imageFile["name"]); 
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($imageFile,PATHINFO_EXTENSION));
    if (isset($_POST['submit'])) {
        $check = getimagesize($imageFile["tmp_name"]);
        if ($check == true) {
            echo "File is an image -" . $check['mime'] . ".";
            $uploadOk = 1;
        }else {
            echo "file is not an image.";
            $uploadOk = 0;
        }
    }

    // // Check if file exist
    if (file_exists($imageFileName)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // // check file size 
    if ($imageFile['size'] > 500000) {
        echo "sorry, your file is too large.";
        $uploadOk = 0;
    }

    // // Checkif $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "sorry, file was not uploaded.";
    }else {
        if (move_upload_file($imageFile["tmp_name"], $imageFileName)) {
            echo "the file ". htmlspecialchars($imageFileName). "has been uploaded.";
        }else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
 ?>