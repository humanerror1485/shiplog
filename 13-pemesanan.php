<?php

include("./koneksi.php");
$keberangkatan = $_SESSION['keberangkatan'];
$_SESSION['id_schedule'] = $_GET['id_schedule'];
$id = $_SESSION['id_schedule'];
$sql = "SELECT * FROM tiket_kapaltransportasi WHERE id_schedule='$id'";
$result = mysqli_query($conn,$sql);
while ($tiket_data = mysqli_fetch_array($result)){
    $date_dep = $tiket_data['date_dep'];
    $time_dep = $tiket_data['time_dep'];
    $class = $tiket_data['class'];
    $route = $tiket_data['route'];
    $date_dest = $tiket_data['date_dest'];
    $time_dest = $tiket_data['time_dest'];
    $price = $tiket_data['price'];

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Logistik</title>
    <link rel="stylesheet" href="css/style-pemesanan.css">
    <link rel="stylesheet" href="css/header-footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <section>
        <nav class="nav-index">
            <a href="8-index-after.php" class="nav-title"> <img src="image/shiplog.png"> </a>
            <div class='nav-links'>
                <ul>
                    <li class="nav-bar"><a href='8-index-after.php' class="nav-title">Beranda</a></li>
                    <li class="nav-bar"><a href='about-us-after.php' class="nav-title">Tentang Kami</a></li>
                    <div class="dropdown">
                        <li class="nav-bar"><span class="nav-title">Reservasi Layanan <span class="fa fa-angle-down" style="font-size:18px"></span></span></li>
                        <div class="dropdown-content">
                            <a href="9-transportation.php">Layanan Transportasi</a>
                            <a href="11-logistic.php">Layanan Logistik</a>
                        </div>
                    </div>
                    <li class="nav-bar"><a href='profile.php' class="nav-title">Profil</a></li>
    
                    <li class="nav-bar">
                        <div class="button">
                            <a href="chekout.php"><button class='button-a' type="submit">Pesanan</button></a>      
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </section> 

    <section >
        <div class="overlay">
            <a href="javascript:history.back(); "> <i class="fa fa-arrow-left" style="font-size: 20px; color: #0d0870; margin-bottom: 20px;"></i> </a>
            <h2 style="color:#0d0870; margin-bottom: 7px;">Transaksi Reservasi Transportasi</h2>
<!----------------------------------------------------------------------------------------------------------------------------------------------------->
            <div class="container">
                <table border="0" width="100%">
                    <tr>
                        <td width="25%">
                            <div class="containerr">
                                <h3>Pelabuhan Keberangkatan</h3>
                                <label class="sub-title">Nama Pelabuhan</label><br>
                                <input class="register-input" type="text" value="<?=$keberangkatan  ?>"><br>
                                <label class="sub-title">Tanggal Keberangkatan</label><br>
                                <input class="register-input" type="text" value="<?=$date_dep  ?>"><br>
                                <label class="sub-title">Waktu Keberangkatan</label><br>
                                <input class="register-input" type="text" value="<?=$time_dest ?>"><br>
                                <label class="sub-title">Kelas</label><br>
                                <input class="register-input" type="text" value="<?=$class  ?>" ><br>
                            </div>
                            <div class="containerr">
                                <h3>Pelabuhan Kedatangan</h3>
                                <label class="sub-title">Nama Pelabuhan</label><br>
                                <input class="register-input" type="text" value="<?=$route  ?>"><br>
                                <label class="sub-title">Waktu Kedatangan</label><br>
                                <input class="register-input" type="text" value="<?=$time_dest  ?>"><br>
                            </div>
                        </td>
                        
                        <td width="75%">
                            <div class="containerrr">
                                <h3>Metode Pembayaran</h3>
                                <div class="register-row">
                                    <div class="register-form-button">
                                        <a href="1-index.php"><button class='back-button'>Bank Transfer</button></a>      
                                    </div>
                                    <div class="containerrrr">
                                        <h4 style="margin-bottom: 20px; font-size: 21px;">Tata Cara Pembayaran</h4>
                                        <li>Masukkan kartu ATM ke mesin ATM</li>
                                        <li>Piih Bahasa Indonesia</li>
                                        <li>Masukkan nomor PIN ATM</li>
                                        <li>Pilih Transaksi Lainnya, lalu pilih Transfer</li>
                                        <li>Pada pilihan bank tujuan transfer, pilih Bank Lain</li>
                                        <li>Masukkan nomor Virtual Account dengan kode pembayaran + nomor telpon Anda. Contoh: 80009+081332888588</li>
                                        <li>Masukkan jumlah Tranfer</li>
                                        <li>Pastikan nomor Virtual Account sudah benar</li>
                                        <li>Pilih benar dan konfirmasi kebenaran data</li>
                                        <li>Tunggu hingga muncul keterangan Transaksi Anda Berhasil</li>
                                        <div class="containers">
                                            <form action="update_ttrans.php" method='post' >
                                            <div>
                                                <h5 style="color: black; margin-bottom: 20px; font-size: larger;">Rincian Harga</h5>
                                            </div>
                                            <div>
                                                <span style="color: black;  ">1x Tiket <?=$class  ?></span>
                                                <span style="color: black; margin-left: 277px; "><?=$price  ?></span> <hr style="height:2px;border-width:0;color:gray;background-color:gray; margin: 5px 0px 5px 0px;">
                                            </div>
                                            <div>
                                                <span style="color: black;">Harga Total</span>
                                                <span style="color: black; margin-left: 277px;"><?=$price  ?></span>
                                            </div>
                                            <input type='hidden' name='price' value='<?=$price  ?>'>
                                        </div>
                                        <div class="button">
                                            <input class='buttons' name='checkout' type="submit" value='Lanjutkan'></a>                      
                                        </div>
                                        </form>
                                </div>

                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

         
<!----------------------------------------------------------------------------------------------------------------------------------------------------->
            
        </div>
    </section>
    
    <footer>
        <img src="image/shiplog.png" alt="">
        <dd><b>Copyright &copy <script>document.write(new Date().getFullYear())</script> SHIPLOG</b></dd>
        <dd>Build with <span style="color: #e25555;">&#9829;</span> by Kelompok 3</dd>
    </footer>
</body>
</html>