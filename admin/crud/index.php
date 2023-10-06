<?php
# panggil file config.php agar kita dapat
# memanfaatkan variabel $mysqli
include_once("config.php");
# menjalankan query sql yang artinya
# SELECT (pilih) semua kolom FROM nama_table (table user kita)
# ORDER BY (urutkan berdasarkan) kolom id DESC (Descending)
$result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY id_user DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body>
    <a href="add.php">Add user</a>
    <table width="80%" border=1>
        <tr>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Photo</th>
            <th>Update</th>
        </tr>
        <?php
# menjalankan method mysqli_fetch_array()
# dimana method ini akan menghasilkan array assosiatif
# lebih lengkap baca di https://www.php.net/manual/function.mysqli-fetch-array.php
while ($user_data = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $user_data['nama_user'] . "</td>";
    echo "<td>" . $user_data['mobile_user'] . "</td>";
    echo "<td>" . $user_data['email_user'] . "</td>";
    echo "<td><img src='uploads/{$user_data['photo_user']}' width='240'/></td>";
    echo "<td><a href='edit.php?id_user=$user_data[id_user]'>edit</a> | <a
href='delete.php?id_user=$user_data[id_user]'>delete</a></td>";
    echo "</tr>";
}
?>
    </table>
</body>