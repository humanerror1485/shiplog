<?php
include_once("./config.php");

$result = mysqli_query($koneksi, "SELECT * FROM transaksi_logistik ORDER BY id_transaksi ASC");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Logistik</title>
    <link rel="icon" href="assets/logo-shiplog.png">

    <link rel="stylesheet" href="assets/logistik.css">
</head>

<body>
    <div class="container">
        <ul>
            <li><img src="assets/shiplog.png" alt="logo-shiplog"></li>
            <li><a href="dashboard.php" class="list">Data User</a></li>
            <li><a href="transportasi.php" class="list">Layanan Transportasi</a></li>
            <li><a href="logistik.php" class="list">Layanan Logistik</a></li>
            <li><a href="transaksi_transportasi.php" class="list">Transaksi Transportasi</a></li>
            <li><a href="#" class="active">Transaksi Logistik</a></li>
            <a href="index.php" class="logout">Logout</a>
        </ul>
        <div class="right-box">
            <h1>Jadwal Logistik</h1>
            <button class="primary"><a href="add_tlogistik.php">Add</a></button>
            <table style='width:50%;'>
                <tr>
                    <td>
                        <label for="id_transaksi">ID Transaksi</label><br>
                    </td>
                    <td>
                        <label for="total">Total Tiket</label><br>
                    </td>
                    <td>
                        <label for="id_schedule">ID Schedule</label><br>

                    </td>
                    <td>
                        <label for="id_user">ID User</label><br>
                    </td>
                </tr>
                <?php
                    while ($tlogistik_data = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td class='input-box'>" . $tlogistik_data['id_transaksi'] . "</td>";
                        echo "<td class='input-box' >" . $tlogistik_data['total'] . "</td>";
                        echo "<td class='input-box' >" . $tlogistik_data['id_schedule'] . "</td>";
                        echo "<td class='input-box' >" . $tlogistik_data['id_user'] . "</td>";
                        echo "<td style='width:30%;'> <button class='primary'><a href='edit_tlogistik.php?id_transaksi=$tlogistik_data[id_transaksi]'>Edit</a></button>
                        <button class='secondary'><a href='delete_tlogistik.php?id_transaksi=".$tlogistik_data['id_transaksi']."'>Delete</a></button>";
                        echo "<tr>";
                    }
                    ?>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>