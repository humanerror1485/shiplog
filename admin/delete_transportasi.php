<?php
include_once("config.php");
# ambil id data dari url menggunakan method GET
$id = $_GET['id_transportasi'];
# delete user data
$result = mysqli_query($koneksi, "DELETE FROM tiket_kapaltransportasi WHERE id_schedule= '$id' ");
# redirect kembali ke halaman utama
header("Location: transportasi.php");
