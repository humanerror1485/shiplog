<?php
include_once("config.php");
$id_logistik = $_GET['id_logistik'];
$result = mysqli_query($koneksi, "SELECT * FROM tiket_kapallogistik WHERE id_schedule=$id_logistik");
while ($data_logistik = mysqli_fetch_array($result)) {
    $nameship = $data_logistik['name_ship'];
    $class = $data_logistik['class'];
    $quantity = $data_logistik['quantity'];
    $price  = $data_logistik['price'];
    $route = $data_logistik['route'];
    $date_dep = $data_logistik['date_dep'];
    $time_dep = $data_logistik['time_dep'];
    $date_dest = $data_logistik['date_dest'];
    $time_dest = $data_logistik['time_dest'];
    
}
?>
<html>

<head>
    <title>update</title>
</head>

<body>
    <a href="logistik.php">go to home</a>
    <br>
    <br>
    <form action="update_transportasi.php" method="post" name="update" enctype="multipart/form-data">
        <table width="25%" border="0">
        <tr>
                <td>Nama Kapal</td>
                <td><input type="text" name="name_ship" value="<?= $nameship ?>"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="class" value="<?= $class ?>"></td>
            </tr>
            <tr>
                <td>Kapasitas Kapal</td>
                <td><input type="number" name="quantity" value="<?= $quantity ?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="number" name="price" value="<?= $price ?>"></td>
            </tr>
            <tr>
                <td>Pelabuhan Tujuan</td>
                <td><input type="text" name="route" value="<?= $route ?>"></td>
            </tr>
            <tr>
                <td>Tanggal Keberangkatan</td>
                <td><input type='date' name='date_dep' value="<?= $date_dep ?>"></td>
            </tr>
            <tr>
                <td>Waktu Keberangkatan</td>
                <td><input type='time' name='time_dep' value="<?= $time_dep ?>"></td>
            </tr>
            <tr>
                <td>Tanggal Kedatangan</td>
                <td><input type='date' name='date_dest' value="<?= $date_dest ?>"></td>
            </tr>
            <tr>
                <td>Waktu Kedatangan</td>
                <td><input type='time' name='time_dest' value="<?= $time_dest ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_logistik" value="<?= $id_logistik ?>"></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>