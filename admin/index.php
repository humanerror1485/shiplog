<?php 
    include ('config.php'); 
    error_reporting(0);



    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE email='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['id'] = $row['id_admin'];
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";}
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="icon" href="assets/logo-shiplog.png">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <img class="logo" src="assets/shiplog.png" alt="">
        <form action="index.php" method="post">
            <div class="box">
                <h2>Login Admin</h2>
                <input type="text" name="username" class="input-field" placeholder="Username" required value="<?php echo $username ?>">
                <input type="password" name="password" class="input-field" placeholder="Password" required value="<?php $_POST['password'] ?>">
                <input type="submit" name="login" value="Login" class="login-button">
            </div>
        </form>
    </div>
</body>

</html>