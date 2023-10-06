<?php
include_once("config.php");
# ambil id data dari url menggunakan method GET
$id = $_GET['id_transaksi'];
# delete user data
$result = mysqli_query($koneksi, "DELETE FROM transaksi_logistik WHERE id_transaksi= '$id' ");
# redirect kembali ke halaman utama
header("Location: transaksi_logistik.php");
