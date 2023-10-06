<?php
include_once("config.php");
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $id = $_POST['id'];
    # check apakah upload file atau tidak
# jika tidak ada file maka seharusnya sizenya 0
    if ($_FILES["photo"]["size"] != 0) {
        $targetDir = "uploads/";
        $fileName = basename($_FILES["photo"]["name"]);
        $targetFilepath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilepath, PATHINFO_EXTENSION);
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'png');
        if (in_array($fileType, $allowTypes)) {
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFilepath)) {
                $result = mysqli_query($mysqli, "UPDATE `user` SET `nama_user` = '$name', `email_user` =
'$email', `mobile_user` = '$mobile', `photo_user` = '$fileName' WHERE `user`.`id_user` = $id;");
            }
        }
    } else {
        $result = mysqli_query($mysqli, "UPDATE `user` SET `nama_user` = '$name', `email_user` =
'$email', `mobile_user` = '$mobile' WHERE `user`.`id_user` = $id;");
    }
    header("Location: index.php");
    exit;
}