<?php

require_once('../config/setup.php');
require_once('../init.php');

if (!empty($_POST['uname'])){
    $uname = $_POST['uname'];
    $user = $_SESSION['username'];

    $sql = $conn->prepare(
        "UPDATE
            `cosincla_camagru`.`profile_photos`
        SET
            `user_id` = '$uname'
        WHERE
            `user_id` LIKE '$user';");
    $sql->execute();

    $sql = $conn->prepare(
        "UPDATE
            `cosincla_camagru`.`uploads`
        SET
            `image_creator` = '$uname'
        WHERE
            `image_creator` LIKE '$user';");
    $sql->execute();

    $sql = $conn->prepare(
        "UPDATE
            `cosincla_camagru`.`users`
        SET
            `username` = '$uname'
        WHERE
            `username` LIKE '$user';");
    $sql->execute();
    
    $_SESSION['username'] = $uname;
    echo '<script type=text/javascript>alert("Username changed successfully"); window.location="http://localhost/Camagru/main_page/mp.php";</script>';
}
else
    echo '<script type=text/javascript>alert("Invalid input"); window.location="http://localhost/Camagru/user_editing/user_editing.php";</script>';
?>