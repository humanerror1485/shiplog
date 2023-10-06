<?php
include_once("config.php");
?>
<html>

<head>
    <title>add transaksi logistik</title>
</head>

<body>
    <a href="transaksi_logistik.php">go to home</a>
    <br>
    <br>
    <form action="add_tlogistik.php" method="post" name="form1" enctype="multipart/form-data">
        <table width="25%" border="0">
            <tr>
                <td>Total</td>
                <td><input type="number" name="total"></td>
            </tr>
            <tr>
                <td>ID Schedule</td>
                <td><input type="text" name="id_schedule"></td>
            </tr>
            <tr>
                <td>ID User</td>
                <td><input type="number" name="id_user"></td>
            </tr>
                <td><input type="submit" name="submit" value="Add"></td>
        </table>
    </form>
</body>

</html>
<?php
if (isset($_POST['submit'])) {
    $total = $_POST['total'];
    $id_schedule = $_POST['id_schedule'];
    $id_user = $_POST['id_user'];

            $result = mysqli_query($koneksi, "INSERT INTO transaksi_logistik
VALUES('','$total','$id_schedule','$id_user')");
            header("Location: transaksi_logistik.php");
            exit;
        }
?>