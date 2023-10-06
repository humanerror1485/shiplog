<?php
include_once("config.php");
$id_transaksi = $_GET['id_transaksi'];
$result = mysqli_query($koneksi, "SELECT * FROM transaksi_transportasi WHERE id_transaksi=$id_transaksi");
while ($data_transaksi = mysqli_fetch_array($result)) {
    $total = $data_transaksi['total'];
    $id_schedule = $data_transaksi['id_schedule'];
    $id_user = $data_transaksi['id_user'];
   
}
?>
<html>

<head>
    <title>Update Transaksi Logistik</title>
</head>

<body>
    <a href="transaksi_transportasi.php">go to home</a>
    <br>
    <br>
    <form action="update_ttrans.php" method="post" name="update" enctype="multipart/form-data">
        <table width="25%" border="0">
            <tr>
                <td>Total</td>
                <td><input type="number" name="total" value="<?= $total ?>" required></td>
            </tr>
            <tr>
                <td>ID Schedule</td>
                <td><input type="number" name="id_schedule" value="<?= $id_schedule ?>" required></td>
            </tr>
            <tr>
                <td>ID User</td>
                <td><input type="number" name="id_user" value="<?= $id_user ?>" required></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?= $id_transaksi ?>"></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>