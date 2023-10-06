<?php
include_once("./config.php");
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $cpassword = $_POST['c_password'];
    $id_user = $_POST['id'];
    if($_FILES['foto']['error'] === 4 ){
        echo
            "<script> alert('Gagal');</script>";
    }
    else{
        $filename = $_FILES['foto']['name'];
        $filesize = $_FILES['foto']['size'];
        $tmpname = $_FILES['foto']['tmp_name'];

        $extension = ['jpg', 'jpeg', 'png' ,'jfif'];
        $imageextension = explode('.', $filename);
        $imageextension = strtolower(end($imageextension));
        if(!in_array($imageextension,$extension)){
            echo
            "<script> alert('Gagal');</script>";
        }
        else if($filesize > 1000000){
            echo "<script> alert('Gagal');</script>";

        }
        else{
            $newfoto = uniqid();
            $newfoto .= '.' . $imageextension;
            move_uploaded_file($tmpname, 'img/'. $newfoto);
            
        }
    }
    $result = mysqli_query($koneksi, "UPDATE `user` SET `name` = '$name', `email` =
    '$email', `phone` = '$phone' ,`password` = '$password' ,  `c_password` = '$cpassword' , `photo` = '$newfoto' WHERE `user`.`id_user` = $id_user");        
    header("Location: dashboard.php");
    exit;
}