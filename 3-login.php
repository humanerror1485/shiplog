<?php 
include 'koneksi.php';


if (isset($_POST['masuk'])) {
    $email = $_POST['email'];
    $password = ($_POST['password']);


    $data = mysqli_query($conn,"select * from user where email='$email' and password='$password'");
    $cek = mysqli_num_rows($data);
    if($cek > 0){
            $admin_data = mysqli_fetch_assoc($data) ;
            $_SESSION['id_user'] = $admin_data['id_user'];
            $_SESSION['email'] = $admin_data['email'];
        echo"<script>
                        alert('Login Berhasil...');
                        document.location.href = '8-index-after.php';
                    </script>";
    }else{
        echo"<script>
                        alert('Email atau password Anda salah. Silahkan coba lagi!');
                        document.location.href = '3-login.php';
                    </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
    <title>Login-Page</title>
    <link rel='stylesheet' href='css/style-login.css'>
</head>
<body>
    <section class="login">
        <img src="image/shiplog.png" alt="">
        <form action="3-login.php" method="POST">
            <div class="login-container">
                <h1 class="login-title">Masuk</h1>
                <div class="login-form">
                    <input class="login-input" name='email' type="email" placeholder="Email" required> <br>
                    <input class="login-input" name='password' type="password" placeholder="Password" required> <br>                        
                </div>

                <div class="forget-password">
                    <a href="4-verifikation-pass.php"><p>Forget password?</p></a>
                </div>

                <div class="login-form-button">
                    <a href="1-index.php" class="back-button" >Kembali</a>
                    <input class='login-button' name="masuk" type='submit' value='Masuk'>                        
                </div>
        </form>
                <p class="login-register">Belum mempunyai akun? Daftar <a href="2-register.php" class="login-register-link">disini</a></p>
            </div>
    </section>
</body>
</html>