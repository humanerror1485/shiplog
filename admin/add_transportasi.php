<?php
include_once("config.php");
?>
<html>

<head>
    <title>add transportasi</title>
</head>

<body>
    <a href="transportasi.php">go to home</a>
    <br>
    <br>
    <form action="add_transportasi.php" method="post" name="form1" enctype="multipart/form-data">
        <table width="25%" border="0">
            <tr>
                <td>Nama Kapal</td>
                <td><input type="text" name="name_ship"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="class"></td>
            </tr>
            <tr>
                <td>Kapasitas Kapal</td>
                <td><input type="number" name="capacity"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="number" name="price"></td>
            </tr>
            <tr>
                <td>Pelabuhan Tujuan</td>
                <td><input type="text" name="route"></td>
            </tr>
            <tr>
                <td>Tanggal Keberangkatan</td>
                <td><input type='date' name='date_dep'></td>
            </tr>
            <tr>
                <td>Waktu Keberangkatan</td>
                <td><input type='time' name='time_dep'></td>
            </tr>
            <tr>
                <td>Tanggal Kedatangan</td>
                <td><input type='date' name='date_dest'></td>
            </tr>
            <tr>
                <td>Waktu Kedatangan</td>
                <td><input type='time' name='time_dest'></td>
            </tr>
                <td><input type="submit" name="submit" value="Add"></td>
        </table>
    </form>
</body>

</html>
<?php
if (isset($_POST['submit'])) {
    $nameship = $_POST['name_ship'];
    $class = $_POST['class'];
    $capacity = $_POST['capacity'];
    $price  = $_POST['price'];
    $route = $_POST['route'];
    $date_dep = $_POST['date_dep'];
    $time_dep = $_POST['time_dep'];
    $date_dest = $_POST['date_dest'];
    $time_dest = $_POST['time_dest'];
    
            $result = mysqli_query($koneksi, "INSERT INTO tiket_kapaltransportasi 
VALUES('','$nameship','$class','$capacity','$price','$route','$date_dep','$time_dep','$date_dest' ,'$time_dest')");
            header("Location: transportasi.php");
            exit;
        }
?>