<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/Camagru/config/database.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Camagru/init.php');

$target_dir = "uploads/";
$user = $_SESSION['username'];
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $sql = $conn->prepare("INSERT INTO `cosincla_camagru`.`uploads` (`image_creator`, `image_id`) VALUES (:p_ic, :p_iid)");                      
        $sql->execute(array(
            ':p_ic' => $user,
            ':p_iid' => 'replacement'
        ));
        $last_id = $conn->lastInsertId();
        $new_image = $last_id.".png";  
        $filename = $_FILES["fileToUpload"]["tmp_name"];
        if (move_uploaded_file($filename, $target_dir.$new_image))
           header("Location: http://localhost/Camagru/main_page/mp.php?image=".$last_id);
        else
            echo '<script type=text/javascript>alert("There was an error while uploading your image"); window.location="http://localhost/Camagru/main_page/mp.php";</script>';
    }
    else
        echo '<script type=text/javascript>alert("Image is an invalid size"); window.location="http://localhost/Camagru/main_page/mp.php";</script>';
}
else
    echo '<script type=text/javascript>alert("Input is invalid"); window.location="http://localhost/Camagru/main_page/mp.php";</script>';

?>