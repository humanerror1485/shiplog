<?php
require 'koneksi.php';
if(isset($_POST['daftar'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $c_password = $_POST["c_password"];

    if($password == $c_password) {
        $password = ($password);
        $c_passwordS = ($c_password);
    	$sql = "INSERT into user (name,email,phone,password,c_password) values ('$name','$email','$phone','$password','$c_password')";
            $result = mysqli_query($conn, $sql);

            if(mysqli_affected_rows($conn) > 0) {
                echo"
                <script>
                    alert('Registrasi Berhasil...');
                    document.location.href = '3-login.php';
                </script>";
            } else {
                echo"
                <script>
                    alert('Registrasi Gagal...');
                    document.location.href = '2-register.php';
                </script>";
            }
    } else {
        echo"
        <script>
            alert('Masukkan Password yang benar...');
            document.location.href = '2-register.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register-page</title>
    <link rel="stylesheet" href="css/style-register.css">
</head>
<body>
    <section class="register">
        <div class="ima"><img src="image/shiplog.png" alt=""></div>
        <div class="register-container">
            <h1 class="register-title">Mendaftarkan Akun </h1>
            <form action="2-register.php" method="POST">
                <div class='register-row'>
                    <div class='register-col'>
                            <label class="sub-title">Nama Lengkap</label>
                            <input class="register-input" type="text" name="name" placeholder="Masukkan nama lengkap anda..."  required>
                            <label class="sub-title">E-mail</label>
                            <input class="register-input" type="email" name="email" placeholder="Masukkan e-mail anda..." required>
                            <label class="sub-title">Nomor HP</label>
                            <input class="register-input" type="number" name="phone" placeholder="Masukkan nomor HP anda..."  required>   
                    </div>
                    <div class='register-col'>
                            <label class="sub-title">Password</label>
                            <input class="register-input" type="password" name="password" placeholder="Buat password anda..." required>
                            <label class="sub-title">Konfirmasi Password</label>
                            <input class="register-input" type="password" name="c_password" placeholder="Konfirmasi password anda..." required>
                    </div>
                </div>
            
                <div class="register-form-button">
                    <a href="1-index.php" class="back-button" >Kembali</a>
                    <input class='register-button' type="submit" name="daftar" value="Buat Akun">           
                </div>
            </form>
            <p class="register-login">Sudah punya akun sebelumnya? Masuk <a href="3-login.php" class="register-login-link">disini</a></p>
        </div>  
    </section>
</body>
</html>