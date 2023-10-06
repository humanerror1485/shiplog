<?php
include("koneksi.php");
if (isset($_POST['update'])) {
    $id_user = $_POST['id'];
    $nama_user = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    if($_FILES['foto']['error'] === 4 ){
        echo
            "<script> alert('Gagal');</script>";
    } else {
        $filename = $_FILES['foto']['name'];
        $filesize = $_FILES['foto']['size'];
        $tmpname = $_FILES['foto']['tmp_name'];

        $extension = ['jpg', 'jpeg', 'png' , 'jfif'];
        $imageextension = explode('.', $filename);
        $imageextension = strtolower(end($imageextension));
        if (!in_array($imageextension, $extension)) {
            echo
                "<script> alert('Gagal');</script>";
        } else if ($filesize > 1000000) {
            echo "<script> alert('Gagal');</script>";

        } else {
            $newfoto = uniqid();
            $newfoto .= '.' . $imageextension;
            move_uploaded_file($tmpname, './admin/img/' . $newfoto);

        }
    }

    $sql = "UPDATE `user` SET `name` = '$nama_user', `email` = '$email',  `photo` = '$newfoto' 
    WHERE `user`.`id_user` = $id_user;";
    $result = mysqli_query($conn, $sql);
    header("Location: profile.php");
    exit;
    

}
