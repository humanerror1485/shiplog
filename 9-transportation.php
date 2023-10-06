<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Transportasi</title>
    <link rel="stylesheet" href="css/style-reservation.css">
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
            <a href="8-index-after.php"> <i class="fa fa-arrow-left" style="font-size: 20px; color: #0d0870; margin-bottom: 20px;"></i> </a>
            <h2 style="color:#0d0870; margin-bottom: 7px;">Reservasi Transportasi</h2>
            <span>Halo, kamu mau kemana?</span>
<!----------------------------------------------------------------------------------------------------------------------------------------------------->
            <div class="container">
                <table border="0" width="100%">
                  <tr height="100px">
                    <td width="45%" >
                    <form action="10-transportation-ticket.php" method="post">
                      <h1 class="sub-title">Pelabuhan Keberangkatan</h1>
                      <input type="text" class="x-input" name='keberangkatan' value="Tanjung Perak">
                    </td>

                    <td width="10%" align="center">
                      <i class="fa fa-arrow-right" style="font-size: 30px; color: white; margin-top: 15px;"></i>
                    </td>

                
                    <td width="45%">
                      <h1 class="sub-title">Pelabuhan Kedatangan</h1>
                      <select id="" name="route" class="x-input" required>
                        <option value="Pel. Tanjung Priok, Jakarta">Pel. Tanjung Priok, Jakarta</option>
                        <option value="Pel. Kamal, Madura">Pel. Kamal, Madura</option>
                      </select>
                    </td>
                  </tr>
                </table>
<!----------------------------------------------------------------------------------------------------------------------------------------------------->
                <table border="0" width="100%" style="margin-top: 15px;">
                  <tr height="100px">
                    <td width="45%">
                      <h1 class="sub-title">Tanggal Keberangkatan</h1>
                      <input type="date" name="date" id="" class="x-input" required>
                    </td>

                    <td width="30%">
                      <h1 class="sub-title">Kelas</h1>
                      <select id="" name="class" class="y-input" required>
                        <option value="Ekonomi">Ekonomi</option>
                        <option value="Eksekutif">Eksekutif</option>
                      </select>
                    </td>

                    <td width="25%" >
                      <input class="btn" type="submit" name='cari' value="Cari">
                    </td>
                  </tr>
                </table>
<!----------------------------------------------------------------------------------------------------------------------------------------------------->
                </form>
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