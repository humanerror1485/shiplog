<?php
include_once("./config.php");

$result = mysqli_query($koneksi, "SELECT * FROM user ORDER BY id_user ASC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
    <link rel="icon" href="assets/logo-shiplog.png">

    <link rel="stylesheet" href="assets/dashboard.css">
</head>

<body>
    <div class="container">
        <ul>
            <li><img src="assets/shiplog.png" alt="logo-shiplog"></li>
            <li><a href="#" class="active">Data User</a></li>
            <li><a href="transportasi.php" class="list">Layanan Transportasi</a></li>
            <li><a href="logistik.php" class="list">Layanan Logistik</a></li>
            <li><a href="transaksi_transportasi.php" class="list">Transaksi Transportasi</a></li>
            <li><a href="transaksi_logistik.php" class="list">Transaksi Logistik</a></li>
            <a href="logout.php" class="logout">Logout</a>
        </ul>
        <div class="right-box">
            <h1>Data User </h1>
            <button class="primary"><a href="add_user.php">Add</a></button>
            <table>
                <tr>
                    <td>

                        <label for="name">Name</label><br>
                    </td>
                    <td>
                        <label for="phone">Phone Number</label><br>
                    </td>
                    <td>
                        <label for="email">Email</label><br>
                    </td>
                    <td>
                        <label for="password">Password</label><br>
                    </td>
                    <td>
                        <label for="Cpassword">C_Password</label><br>
                    </td>
                    <td>
                        <label for="password">Foto</label><br>
                    </td>
                    </td>
                    <?php
                    while ($user_data = mysqli_fetch_array($result)) {
                        echo "<tr >";
                        echo "<td class='input-box'>" . $user_data['name'] . "</td>";
                        echo "<td class='input-box' >" . $user_data['phone'] . "</td>";
                        echo "<td class='input-box' >" . $user_data['email'] . "</td>";
                        echo "<td class='input-box' >" . $user_data['password'] . "</td>";
                        echo "<td class='input-box' >" . $user_data['c_password'] . "</td>";
                        echo "<td class='input-box' ><img src='img/{$user_data['photo']}' width='100'/></td>";
                        echo "<td style='width:165px'> <button class='primary'><a href='edit_user.php?id_user=$user_data[id_user]'>Edit</a></button>
                        <button class='secondary'><a href='delete_user.php?id_user=".$user_data['id_user']."'>Delete</a></button>";
                        echo "<tr>";
                    }
                    ?>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>