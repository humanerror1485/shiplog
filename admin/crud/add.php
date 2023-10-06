<?php
include_once("config.php");
?>
<html>

<head>
    <title>add users</title>
</head>

<body>
    <a href="index.php">go to home</a>
    <br>
    <br>
    <!-- enctype="multipart/form-data" dapat digunakan untuk mengirim file -->
    <form action="add.php" method="post" name="form1" enctype="multipart/form-data">
        <table width="25%" border="0">
            <tr>
                <td>name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>mobile</td>
                <td><input type="text" name="mobile"></td>
            </tr>
            <tr>
                <td>Photo</td>
                <td><input type="file" name="photo"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>

</html>
<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $targetDir = "uploads/"; // folder tempat foto kita akan disimpan
# file yang dikirim dari form akan disimpan pada variabel $_FILE
    $fileName = basename($_FILES["photo"]["name"]);
    $targetFilepath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilepath, PATHINFO_EXTENSION);
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'png'); // file extension yang diperbolehkan
    if (in_array($fileType, $allowTypes)) {
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFilepath)) {
            # query SQL INSERT nama_table(kolom1,kolom2) VALUE (val1, val2)
# lebih lengkap https://www.w3schools.com/mysql/mysql_insert.asp
            $result = mysqli_query($mysqli, "INSERT INTO user (nama_user,email_user,mobile_user,photo_user)
VALUES('$name','$email','$mobile','$fileName')");
            # jika selesai pindahkan browser ke halaman index (utama)
            header("Location: index.php");
            exit;
        }
    }
}
?>