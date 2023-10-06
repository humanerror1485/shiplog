<?php
include_once("config.php");
# ambil id data dari url menggunakan method GET
$id = $_GET['id_user'];
# delete user data
$result = mysqli_query($koneksi, "DELETE FROM user WHERE id_user= '$id' ");
# redirect kembali ke halaman utama
header("Location: dashboard.php");
