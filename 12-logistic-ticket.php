<?php 

include_once("koneksi.php");
if (isset($_POST['cari'])) {
    $_SESSION['keberangkatan'] = $_POST['keberangkatan'];
    $route = $_POST['route'];
    $date = $_POST['date'];
    $type = $_POST['type'];
    $_SESSION['quantity'] = $_POST['quantity'];
    $result = mysqli_query($conn, "SELECT * FROM tiket_kapallogistik 
    WHERE `route` = '$route' and `date_dep` = '$date' and `type` = '$type' 
    ORDER BY id_schedule ASC ");

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Logistik</title>
    <link rel="stylesheet" href="css/style-ticket.css">
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
            <a href="11-logistic.php"> <i class="fa fa-arrow-left" style="font-size: 20px; color: #0d0870; margin-bottom: 20px;"></i> </a>
            <h2 style="color:#0d0870; margin-bottom: 7px;">Reservasi Logistik</h2>
            <span>Halo, silahkan pilih tiket anda!</span>
<!----------------------------------------------------------------------------------------------------------------------------------------------------->
            <div class="container">
            <?php
                while ($tiket_data = mysqli_fetch_array($result)) {
                    if($_SESSION['quantity'] == '<10kg'){
                        $harga = $tiket_data['price'];
                    } else if($_SESSION['quantity'] == '>10kg'){
                        $harga = $tiket_data['price'] * 10;
                    }
                    $durasi = "Durasi Perjalanan";
                echo"<table border='0' width='100%'>";
                    echo"<tr>";
                        echo"<td width='70%' align='right'>";
                            echo"<div class='containerr'>";
                                echo "<table border='0' width='100%'>";
                                    echo "<tr>";
                                       echo" <td width='40%'>";
                                            echo"<span class='text-a'>".$tiket_data['name_ship']."</span>"."<br>";
                                            echo "<span class='text-b'>".$tiket_data['class']."</span>"."<br>"."<br>";
                                            echo"<span class='text-c'>".$_SESSION['keberangkatan']."</span>"."<br>";
                                            echo"<span class='text-d'>".'Harga'.'&nbsp'.$tiket_data['price']. '/kg'."</span>"."<br>";
                                            echo"<span class='text-e'>".$tiket_data['date_dep']."</span>"."<br>";
                                        echo "</td>";
                                        echo "<td width='20%' align='center' valign='bottom'>";
                                        echo "<i class='fa fa-arrow-right' style='font-size: 20px; color: #0d0870; margin: 50px 0px 15px 0px;'>"."</i>"."<br>";
                                        echo   "<span class='text-e'>".$durasi."</span>";
                                        echo "</td>";
                                        echo"<td width='40%' align='right'>";
                                            echo"<span class='text-a'>"."Harga Tiket Kapal"."</span>"."<br>"."<br>"."<br>";
                                            echo"<span class='text-c'>".$tiket_data['route']."</span>"."<br>";
                                            echo"<span class='text-d'>".'Rp.'.$harga."</span>"."<br>";
                                            echo"<span class='text-e'>".$tiket_data['date_dest']."</span>"."<br>";
                                        echo "</td>";
                                        echo"</tr>";
                                echo"</table>";
                            echo"</div>";
                        echo"</td>";
                        echo"<td width='30%' align='left' valign='bottom'>";
                        echo"<div class='button'>";
                                echo"<button><a href='14-pemesanan-log.php?id_schedule=$tiket_data[id_schedule]' class='button-a' >Pesan</button></a>";                      
                            echo"</div>";
                        echo"</td>";
                    echo"</tr>";
                echo "</table>";
            }
            ?>
         
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