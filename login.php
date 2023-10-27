<?php
session_start();
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM customer WHERE username = '$username' AND password = '$password'";
    $result_customer = mysqli_query($conn, $query);

    $query = "SELECT * FROM tukang WHERE username = '$username' AND password = '$password'";
    $result_tukang = mysqli_query($conn, $query);

    $query = "SELECT * FROM tb_admin WHERE username = '$username' AND password = '$password'";
    $result_admin = mysqli_query($conn, $query);

    if (mysqli_num_rows($result_admin) == 1) {
        // Login sebagai admin berhasil
        header("Location: admin/home.admin.php");
        exit();
    } elseif (mysqli_num_rows($result_customer) == 1) {
        // Login sebagai customer berhasil
        $row = mysqli_fetch_assoc($result_customer);
        $_SESSION['username'] = $row['username'];
        header("Location: index.php");
        exit();
    } elseif (mysqli_num_rows($result_tukang) == 1) {
        // Login sebagai tukang berhasil
        $row = mysqli_fetch_assoc($result_tukang);
        $_SESSION['username'] = $row['username'];
        header("Location: index.php");
        exit();
    } else {
        $login_error = "Username/Password salah. Silakan coba lagi.";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Form Login</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
        <img src="img/logo.png" alt="Logo" class="logo">
        <h2>LOGIN</h2>
        <form method="POST" action="login.php">
            <input class="input" id="username" name="username" placeholder="Masukkan username" required><br><br>

            <input type="password" class="input" id="password" name="password" placeholder="Masukkan password"
                required><br><br>

            <button class="button"><span>Login</span></button>
            <p>Belum mempunyai akun? <a class="daftar-link" href="register.php">Daftar Disini</a></p>
        </form>

        <?php
        if (isset($login_error)) {
            echo "<p>$login_error</p>";
        }
        ?>
    </div>
</body>

</html>