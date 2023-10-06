<?php 
include 'koneksi.php';

$id = $_SESSION['id_user'];

$result = mysqli_query($conn, "SELECT * FROM user WHERE id_user='$id'");
while ($data_user = mysqli_fetch_array($result)) {
    $name = $data_user['name'];
    $email = $data_user['email'];
    $phone = $data_user['phone'];
    $foto = $data_user['photo'];

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/style-profile.css">
    <link rel="stylesheet" href="css/header-footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section>
        <nav class="nav-index">
            <a href="8-index-after.php" class="nav-title"> <img src="image/shiplog.png"> </a>
            <div class='nav-links'>
                <ul>
                    <li class="nav-bar"><a href='8-index-after.php' class="nav-title">Beranda  </a></li>
                    <li class="nav-bar"><a href='about-us-after.php' class="nav-title"> Tentang Kami</a></li>
                    <div class="dropdown">
                        <li class="nav-bar"><span class="nav-title">Reservasi Layanan <span class="fa fa-angle-down" style="font-size:18px"></span></span></li>
                        <div class="dropdown-content">
                            <a href="9-transportation.php">Layanan Transportasi</a>
                            <a href="11-logistic.php">Layanan Logistik</a>
                        </div>
                    </div>
                    <li class="nav-bar"><a href="profile.php" class="nav-title">Profil</a></li>
    
                    <li class="nav-bar">
                        <div class="button">
                            <a href="chekout.php"><button class='button-a' type="submit">Pesanan</button></a>      
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </section> 

    <section class="overlay">
        <div>
            <form action="update_profil.php" method="post" enctype="multipart/form-data">
                <h1 class="titles">Profil Anda</h1>
                <div class="imgcontainer">
                    <?php echo "<img class='avatar' src='./admin/img/{$foto}' width='100'/>";?>

                </div>
                <table width="100%" border="0" cellpadding="10">
                <tr>
                        <td>Profil</td>
                        <td><input type="file" name="foto" value="<?= $foto?>" ></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name" value="<?= $name?>" class="data"></td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td><input type="email" name="email" value="<?= $email?>" class="data"></td>
                    </tr>
                    <tr>
                        <td>No Telepon</td>
                        <td><input type="number" name="phone" value="<?= $phone?>" class="data"></td>
                        <td><input type="hidden" name="id" value="<?=$id?>"></td>
                    </tr>
                </table>
                <div class="profile-form-button"> 
                    <input class='profile-button' name="update" type='submit' value='Perbarui'>                        
                    <a href="logout.php" class="back-button" >Keluar</a>
                </div>
            </form>
        </div>
    </section>
    
    <footer>
        <img src="image/shiplog.png" alt="">
        <dd><b>Copyright &copy <script>document.write(new Date().getFullYear())</script> SHIPLOG</b></dd>
        <dd>Build with <span style="color: #e25555;">&#9829;</span> by Kelompok 3</dd>
    </footer>
</body>
</html>