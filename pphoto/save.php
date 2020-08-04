<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/Camagru/config/database.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Camagru/init.php');

if (isset($_SESSION['image'])){
    $num = $_SESSION['image'];
    $user = $_SESSION["username"];
    
    $sql = $conn->prepare(
        "UPDATE
            `cosincla_camagru`.`profile_photos`
        SET
            `selected` = 0
        WHERE
            `user_id` LIKE '$user' AND `selected` = 1;"
    );
    $sql->execute();
    $sql = $conn->prepare(
        "UPDATE
            `cosincla_camagru`.`profile_photos`
        SET
            `selected` = 1
        WHERE
            `user_id` LIKE '$user' AND `id` LIKE '$num';"
    );
    $sql->execute();
    $_SESSION['profile'] = "http://localhost/Camagru/pphoto/profile_photos/".$_SESSION['image'].".png";
    echo '<script type=text/javascript>alert("Profile updated"); window.location="http://localhost/Camagru/main_page/mp.php";</script>';
}
else
    echo '<script type=text/javascript>alert("No image selected"); window.location="http://localhost/Camagru/pphoto/pphoto.php";</script>';
?>