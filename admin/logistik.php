<?php
include_once("./config.php");

$result = mysqli_query($koneksi, "SELECT * FROM tiket_kapallogistik ORDER BY id_schedule ASC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Logistik</title>
    <link rel="icon" href="assets/logo-shiplog.png">

    <link rel="stylesheet" href="assets/logistik.css">
</head>

<body>
    <div class="container">
        <ul>
            <li><img src="assets/shiplog.png" alt="logo-shiplog"></li>
            <li><a href="dashboard.php" class="list">Data User</a></li>
            <li><a href="transportasi.php" class="list">Layanan Transportasi</a></li>
            <li><a href="#" class="active">Layanan Logistik</a></li>
            <li><a href="transaksi_transportasi.php" class="list">Transaksi Transportasi</a></li>
            <li><a href="transaksi_logistik.php" class="list">Transaksi Logistik</a></li>
            <a href="index.php" class="logout">Logout</a>
        </ul>
        <div class="right-box">
            <h1>Jadwal Logistik</h1>
            <button class="primary"><a href="add_logistik.php">Add</a></button>
            <table  style='width:110%;'>
                <tr>
                    <td>
                        <label for="name_ship">Nama Kapal</label><br>
                    </td>
                    <td>
                        <label for="class">Kelas</label><br>
                    </td>
                    <td>
                        <label for="type">Tipe Cargo</label><br>
                    </td>
                    <td>
                        <label for="quantity">Muatan</label><br>
                    </td>
                    <td>
                        <label for="price">Harga</label><br>
                    </td>
                    <td>
                        <label for="route">Pelabuhan Tujuan</label><br>
                    </td>
                    <td>
                        <label for="date_dep">Tanggal Keberangkatan</label><br>
                    </td>
                    <td>
                        <label for="time_dep">Waktu Keberangkatan</label><br>
                    </td>
                    <td>
                        <label for="date_dest">Tanggal Kedatangan</label><br>
                    </td>
                    <td>
                        <label for="time_dest">Waktu Kedatangan</label><br>
                    </td>
                    <?php
                    while ($logistik_data = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td class='input-box'>" . $logistik_data['name_ship'] . "</td>";
                        echo "<td class='input-box' >" . $logistik_data['class'] . "</td>";
                        echo "<td class='input-box' >" . $logistik_data['type'] . "</td>";
                        echo "<td class='input-box' >" . $logistik_data['quantity'] . "</td>";
                        echo "<td class='input-box' >" . $logistik_data['price'] . "</td>";
                        echo "<td class='input-box' >" . $logistik_data['route'] . "</td>";
                        echo "<td class='input-box' >" . $logistik_data['date_dep'] . "</td>";
                        echo "<td class='input-box' >" . $logistik_data['time_dep'] . "</td>";
                        echo "<td class='input-box' >" . $logistik_data['date_dest'] . "</td>";
                        echo "<td class='input-box' >" . $logistik_data['time_dest'] . "</td>";
                        echo "<td> <button class='primary'><a href='edit_logistik.php?id_logistik=$logistik_data[id_schedule]'>Edit</a></button>
                        <button class='secondary'><a href='delete_logistik.php?id_logistik=".$logistik_data['id_schedule']."'>Delete</a></button>";
                        echo "<tr>";
                    }
                    ?>
            </table>
        </div>
    </div>
</body>

</html>