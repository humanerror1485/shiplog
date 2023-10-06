<?php
$databaseHost = 'localhost';
$databaseUserName = 'root';
$databaseName = 'kel03_shiplog'; // sesuaikan dengan nama database
$databasePassword = '';
session_start();
$conn =  mysqli_connect ($databaseHost, $databaseUserName, $databasePassword,
$databaseName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>