<?php
include_once("./config.php");
if (isset($_POST['update'])) {
    $id = $_POST['id_logistik'];
    $nameship = $_POST['name_ship'];
    $class = $_POST['class'];
    $quantity = $_POST['quantity'];
    $price  = $_POST['price'];
    $route = $_POST['route'];
    $date_dep = $_POST['date_dep'];
    $time_dep = $_POST['time_dep'];
    $date_dest = $_POST['date_dest'];
    $time_dest = $_POST['time_dest'];
    
    $result = mysqli_query($koneksi, "UPDATE `tiket_kapallogistik` SET `name_ship` = '$nameship', `class` =
    '$class', `quantity` = '$quantity' ,`price` = '$price' ,  `route` = '$route' , `date_dep` = '$date_dep' 
    , `time_dep` = '$time_dep' , `date_dest` = '$date_dest' , `time_dest` = '$time_dest' 
    WHERE `tiket_kapallogistik`.`id_schedule` = $id");        
    header("Location: logistik.php");
    exit;
}