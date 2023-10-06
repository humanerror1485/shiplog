<?php
include_once("./config.php");
if (isset($_POST['update'])) {
    $id = $_POST['id_transportasi'];
    $nameship = $_POST['name_ship'];
    $class = $_POST['class'];
    $capacity = $_POST['capacity'];
    $price  = $_POST['price'];
    $route = $_POST['route'];
    $date_dep = $_POST['date_dep'];
    $time_dep = $_POST['time_dep'];
    $date_dest = $_POST['date_dest'];
    $time_dest = $_POST['time_dest'];
    
    $result = mysqli_query($koneksi, "UPDATE `tiket_kapaltransportasi` SET `name_ship` = '$nameship', `class` =
    '$class', `capacity` = '$capacity' ,`price` = '$price' ,  `route` = '$route' , `date_dep` = '$date_dep' 
    , `time_dep` = '$time_dep' , `date_dest` = '$date_dest' , `time_dest` = '$time_dest' 
    WHERE `tiket_kapaltransportasi`.`id_schedule` = $id");        
    header("Location: transportasi.php");
    exit;
}