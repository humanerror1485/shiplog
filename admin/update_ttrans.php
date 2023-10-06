<?php
include_once("./config.php");
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $total = $_POST['total'];
    $id_schedule = $_POST['id_schedule'];
    $id_user = $_POST['id_user'];

    
    $result = mysqli_query($koneksi, "UPDATE `transaksi_transportasi` SET `total` = '$total', `id_schedule` =
    '$id_schedule', `id_user` = '$id_user' WHERE `transaksi_transportasi`.`id_transaksi` = $id");        
    header("Location: transaksi_transportasi.php");
    exit;
}