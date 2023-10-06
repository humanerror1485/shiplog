<?php
include_once("config.php");
$id = $_GET['id_user'];
$result = mysqli_query($mysqli, "SELECT * FROM user WHERE id_user=$id");
while ($user_data = mysqli_fetch_array($result)) {
    $name = $user_data['nama_user'];
    $email = $user_data['email_user'];
    $mobile = $user_data['mobile_user'];
    $photo = $user_data['photo_user'];
}
?>
<html>

<head>
    <title>update</title>
</head>

<body>
    <a href="index.php">go to home</a>
    <br>
    <br>
    <form action="update.php" method="post" name="update" enctype="multipart/form-data">
        <table width="25%" border="0">
            <tr>
                <td>name</td>
                <td><input type="text" name="name" value="<?= $name ?>"></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="email" name="email" value="<?= $email ?>"></td>
            </tr>
            <tr>
                <td>mobile</td>
                <td><input type="text" name="mobile" value="<?= $mobile ?>"></td>
            </tr>
            <tr>
                <td>Photo</td>
                <td><input type="file" name="photo" value="<?= $photo ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?= $id ?>"></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>