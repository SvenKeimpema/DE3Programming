<?php
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }
    
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        rename($target_file, "uploads/username");
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    }
//     echo '<script type="text/javascript">
//             window.location = "https://de3-opdracht.000webhostapp.com/user.php"
//           </script>';
// 	die();
    
?>