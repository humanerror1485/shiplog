<?php
include "koneksi.php";
$id_schedule = $_SESSION['id_schedule'];
    $id_user = $_SESSION['id_user'];
if (isset($_POST['checkout'])) {
    $total = $_POST['price'];
    $sql = "INSERT INTO transaksi_transportasi VALUES('','$total','$id_schedule','$id_user')";
    $result = mysqli_query($conn, $sql);
    $sql2 = "SELECT * FROM tiket_kapaltransportasi WHERE id_schedule = $id_schedule";
    $data = mysqli_query($conn, $sql2);
    $row = mysqli_fetch_assoc($data);
    $kursi = ($row['capacity'] - 1);
    $sql3 = "UPDATE `tiket_kapaltransportasi` SET `capacity` = '$kursi'WHERE `tiket_kapaltransportasi`.`id_schedule` = $id_schedule;";
    $result2 = mysqli_query($conn,$sql3);
            header("Location: chekout.php");
            exit;
        }


?>