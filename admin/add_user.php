<?php
include_once("config.php");
?>
<html>

<head>
    <title>add users</title>
</head>

<body>
    <a href="dashboard.php">go to home</a>
    <br>
    <br>
    <!-- enctype="multipart/form-data" dapat digunakan untuk mengirim file -->
    <form action="add_user.php" method="post" name="form1" enctype="multipart/form-data">
        <table width="25%" border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td><input type="text" name="phone"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td>CPassword</td>
                <td><input type="text" name="cpassword"></td>
            </tr>
            <tr>
                <td>Photo</td>
                <td><input type='file' name='foto'></td>
            </tr>
                <td><input type="submit" name="submit" value="Add"></td>
        </table>
    </form>
</body>

</html>
<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
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
            $newphoto = uniqid();
            $newphoto .= '.' . $imageextension;
            move_uploaded_file($tmpname, 'img/'. $newphoto);
            
        }
    }
            $result = mysqli_query($koneksi, "INSERT INTO user (name,email,phone,password,c_password,photo)
VALUES('$name','$email','$phone','$password','$cpassword','$newphoto')");
            # jika selesai pindahkan browser ke halaman index (utama)
            header("Location: dashboard.php");
            exit;
        }
?>