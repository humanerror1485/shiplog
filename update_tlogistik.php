<?php 
include "koneksi.php";
$id_schedule = $_SESSION['id_schedule'];
    $id_user = $_SESSION['id_user'];
    $quantity = $_SESSION['quantity'];
if (isset($_POST['checkout'])) {
    $total = $_POST['total'];
    $sql = "INSERT INTO transaksi_logistik VALUES('','$total','$id_schedule','$id_user','$quantity')";
    $result = mysqli_query($conn, $sql);
    header("Location: chekout.php");
            exit;
}
?>