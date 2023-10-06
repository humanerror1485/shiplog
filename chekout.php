<?php
include "koneksi.php";
$id_user = $_SESSION['id_user'];
$quantity = $_SESSION['quantity'];
$sql = "SELECT  user.name , tiket_kapaltransportasi.route , tiket_kapaltransportasi.class , tiket_kapaltransportasi.price,
tiket_kapaltransportasi.date_dep , tiket_kapaltransportasi.time_dep , tiket_kapaltransportasi.time_dest , total
FROM transaksi_transportasi 
JOIN user ON transaksi_transportasi.id_user=user.id_user
JOIN tiket_kapaltransportasi ON transaksi_transportasi.id_schedule = tiket_kapaltransportasi.id_schedule
WHERE transaksi_transportasi.id_user = '$id_user' ORDER BY transaksi_transportasi.id_transaksi ASC ";
$result = mysqli_query($conn, $sql);
$sql2 = "SELECT  user.name , tiket_kapallogistik.route , tiket_kapallogistik.class , tiket_kapallogistik.price,
tiket_kapallogistik.date_dep , tiket_kapallogistik.time_dep , tiket_kapallogistik.date_dest , total , berat
FROM transaksi_logistik
JOIN user ON transaksi_logistik.id_user=user.id_user
JOIN tiket_kapallogistik ON transaksi_logistik.id_schedule = tiket_kapallogistik.id_schedule
WHERE transaksi_logistik.id_user = '$id_user' ORDER BY transaksi_logistik.id_transaksi ASC ";
$result2 = mysqli_query($conn, $sql2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <link rel="stylesheet" href="css/style-checkout.css">
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

    <section >
        <div class="overlay">
            <h1 class="titles">Riwayat Pemesanan</h1><br>
            <div class="history">
            <?php 
            while ($ttrans_data = mysqli_fetch_array($result)) {
                echo"<div class='container'>";
                echo "<div class='direction'>";
                echo "<span class='title'>Tanjung Perak (SUB)"."</span>";
                echo"<i class='fa fa-arrow-right' style='font-size: 20px; color: white; margin-right: 20px;'>"."</i>";    
                echo"<span class='title'>".$ttrans_data['route']."</span>"."<br>";
                echo"</div>";
                echo"<table width='100%' border='0'>";
                echo"<tr>";
                    echo"<td width='60%'>";
                                echo"<div class='detail'>";
                                echo"<span class='sub'>"."Nama"."</span>";
                                echo"<span class='desc'>".$ttrans_data['name']."</span>";
                                echo"</div>";
                                echo"<div class='detail'>";
                                echo"<span class='sub'>"."Kelas"."</span>";
                                echo"<span class='desc'>".$ttrans_data['class']."</span>";
                                echo"</div>";
                                echo"<div class='detail'>";
                                echo"<span class='sub'>"."Tanggal"."</span>";
                                echo"<span class='desc'>".$ttrans_data['date_dep']."</span>";
                                echo"</div>";
                                echo"<div class='detail'>";
                                echo"<span class='sub'>"."Berangkat"."</span>";
                                echo"<span class='desc'>".$ttrans_data['time_dep']."</span>";
                                echo"<span class='sub'>"."Sampai"."</span>";
                                echo"<span class='desc'>".$ttrans_data['time_dest']."</span>";
                                echo"</div>";
                                echo"<div class='detail'>";
                                echo"<span class='sub'>"."Harga"."</span>";
                                echo"<span class='desc'>"."Rp.".$ttrans_data['total']."</span>";
                                echo"</div>";  
                            echo"</td>";
                        echo"</tr>";
                    echo"</table>";
                echo"</div>";
            }
             ?>
             <?php 
            while ($tlogistik_data = mysqli_fetch_array($result2)) {
                echo'<div class="container">';
                echo'<div class="direction">';
                echo'<span class="title">'.'Tanjung Perak (SUB)'.'</span>';
                echo'<i class="fa fa-arrow-right" style="font-size: 20px; color: white; margin-right: 20px;">'.'</i>';
                echo'<span class="title">'.$tlogistik_data['route'].'</span><br>';
                echo'</div>';
                echo'<table width="100%" border="0">';
                echo'<tr>';
                echo'<td width="60%">';
                echo'<div class="detail">';
                echo'<span class="sub">Nama</span>';
                echo'<span class="desc">'.$tlogistik_data['name'].'</span>';
                echo'</div>';
                echo'<div class="detail">';
                echo'<span class="sub">'.'Berat'.'</span>';
                echo'<span class="desc">'.$tlogistik_data['berat'].'</span>';
                echo'<span class="sub">'.'Harga Satuan'.'</span>';
                echo'<span class="desc">'."Rp".$tlogistik_data['price'].'</span>';
                echo'</div>';
                echo'<div class="detail">';
                echo'<span class="sub">'.'Tanggal'.'</span>';
                echo'<span class="desc">'.$tlogistik_data['date_dep'].'</span>';
                echo'</div>';
                echo'<div class="detail">';
                echo'<span class="sub">'.'Estimasi Sampai'.'</span>';
                echo'<span class="desc">'.$tlogistik_data['date_dest'].'</span>';
                echo'</div>';
                echo'<div class="detail">';
                echo'<span class="sub">'.'Harga'.'</span>';
                echo'<span class="desc">'."Rp.".$tlogistik_data['total'].'</span>';
                echo'</div>'; 
                echo'</td>';
                echo'</tr>';
                echo'</table>';
                echo'</div>';
            }?>
            </div>
        </div>
    </section>
    
    <footer>
        <img src="image/shiplog.png" alt="">
        <dd><b>Copyright &copy <script>document.write(new Date().getFullYear())</script> SHIPLOG</b></dd>
        <dd>Build with <span style="color: #e25555;">&#9829;</span> by Kelompok 3</dd>
    </footer>
</body>
</html>