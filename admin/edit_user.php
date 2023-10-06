<?php
include_once("config.php");
$id_user = $_GET['id_user'];
$result = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user=$id_user");
while ($data_user = mysqli_fetch_array($result)) {
    $name = $data_user['name'];
    $email = $data_user['email'];
    $phone = $data_user['phone'];
    $password = $data_user['password'];
    $cpassword = $data_user['c_password'];
    $foto = $data_user['photo'];
}
?>
<html>

<head>
    <title>update</title>
</head>

<body>
    <a href="dashboard.php">go to home</a>
    <br>
    <br>
    <form action="update_user.php" method="post" name="update" enctype="multipart/form-data">
        <table width="25%" border="0">
            <tr>
                <td>name</td>
                <td><input type="text" name="name" value="<?= $name ?>" required></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="email" name="email" value="<?= $email ?>" required></td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td><input type="text" name="phone" value="<?= $phone ?>" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" value="<?= $password ?>" required></td>
            </tr>
            <tr>
                <td>CPassword</td>
                <td><input type="text" name="c_password" value="<?= $cpassword ?>" required></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><input type="file" name="foto" value="<?= $foto ?>" required></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?= $id_user ?>"></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>