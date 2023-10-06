<?php 
include 'koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
    <title>ShipLog</title>
    <link rel='stylesheet' href='css/style-index.css'>
    <link rel="stylesheet" href="css/header-footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section>
        <nav class="nav-index">
            <a href="1-index.php" class="nav-title"> <img src="image/shiplog.png"> </a>
            <div class='nav-links'>
                <ul>
                    <li class="nav-bar"><a href='1-index.php' class="nav-title">Beranda</a></li>
                    <li class="nav-bar"><a href='about-us.php' class="nav-title">Tentang Kami</a></li>
                    <div class="dropdown">
                        <li class="nav-bar"><span class="nav-title">Reservasi Layanan <span class="fa fa-angle-down" style="font-size:18px"></span></span></li>
                        <div class="dropdown-content">
                            <a href="6-tutor-trans.php">Layanan Transportasi</a>
                            <a href="7-tutor-log.php">Layanan Logistik</a>
                        </div>
                    </div>
                    <li class="nav-bar">
                        <div class="button">
                            <a href="2-register.php"><button class='button-a' type="submit">Daftar</button></a>   
                            <a href="3-login.php"><button class='button-a' type="submit">Masuk</button></a>   
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </section>

    <section class="image-index">
        <img src="image/bg.jpg" alt="">
    </section>

    <section class='serv'>
        <h1 class="title">Layanan</h1> 
        <p>SHIPLOG memberikan layanan tiket kapal ferry dan jasa logistik, bersama shiplog 
            kamu dapat dengan mudah mengakses jadwal hingga pembelian tiket kapal ferry. 
            Tidak hanya itu, shiplog juga bisa digunakan untuk mengangkut atau mengirim barang kamu dari 
            satu pelabuhan ke pelabuhan lain. dengan shiplog kamu bisa mengatur harga serta estimasi tiket 
            dan jasa logistik sesuai kebutuhan kantong kamu. Akses shiplog kapan pun dan dimanapun!</p>
        <div class='serv-row'>
            <div class="item">
                <a href="6-tutor-trans.php"><button class="btn">Layanan Transportasi</button></a>
            </div>
            <div class="item2">
                <a href="7-tutor-log.php"><button class="btn">Layanan Logistik</button></a>    
            </div>
        </div>
    </section>

    <section class="review">
        <div class="container">
            <h1 class="title">Ulasan</h1>
            <div class="review-row">
                <div class="card">
                    <h1>Wisnu</h1>
                    <p>Dengan Shiplog saya bisa mengakses tiket kapal langsung tanpa perlu 
                        datang ke pelabuhan dan itu sangat membantu saya dalam memangkas waktu</p>
                </div>
                <div class="card">
                    <h1>Natha</h1>
                    <p>Shiplog sangat mempermudah saya dalam pengiriman logistik ke pulau sebelah 
                        tanpa harus bertanya kepada petugas maupun langsung datang ke ke pelabuhan 
                        dan tampilan website yang sangat menarik untuk dilihat</p>
                </div>
                <div class="card">
                    <h1>Tio</h1>
                    <p>Shiplog memiliki fitur yang sagat membantu bagi saya, yaitu filter harga yang 
                        dimana untuk kapal ferry saya disini bisa memilih harga termurah sesuai dengan kantong saya</p>
                </div>
                <div class="card">
                    <h1>Ardani</h1>
                    <p>Untuk Shiplog ini menurut saya sangat membantu dengan bisa di akses 24 jam, 
                        jadi saya bisa pesan tiket kapan pun dan jam berapapun saya mau </p>
                </div>
            </div>
        </div>
    </section>

   <section class='serv'>
        <h1 class="title">Tentang Kami</h1> 
        <img src="image/img3.jpg" alt="">

            <p class="text">Menghubungkan satu pulau dengan pulau lainnya, itulah slogan kami, SHIPLOG adalah sebuah 
                website tentang jadwal dan harga tiket serta logistik yang berfokus pada kapal ferry. 
                SHIPLOG berdiri pada tahun 2022 dan di jangkau banyak orang membuat shiplog jadi andalan 
                para warga internet dalam membeli tiket dan logistik kapal ferry</p> 

    </section>

    <footer>
        <img src="image/shiplog.png" alt="">
        <dd><b>Copyright &copy <script>document.write(new Date().getFullYear())</script> SHIPLOG</b></dd>
        <dd>Build with <span style="color: #e25555;">&#9829;</span> by Kelompok 3</dd>
    </footer>
</body>
</html>