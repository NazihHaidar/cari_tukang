<?php
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $nama = $_POST["nama"];
    $no_telp = $_POST["no_telp"];
    $alamat = $_POST["alamat"];
    $daftar_sebagai = $_POST["daftar_sebagai"];

    if ($daftar_sebagai == "tukang") {
        // Jika mendaftar sebagai tukang
        $deskripsi = $_POST["deskripsi"];
        $harga = $_POST["harga"];
        $no_rekening = $_POST["no_rekening"];

        $query = "INSERT INTO tukang (username, password, email, nama_tukang, alamat, no_telp, deskripsi, harga, no_rekening) VALUES ('$username', '$password', '$email', '$nama', '$alamat', '$no_telp', '$deskripsi', '$harga', '$no_rekening')";
    } else {
        // Jika mendaftar sebagai customer
        $query = "INSERT INTO customer (username, password, email, nama, alamat, no_telp) VALUES ('$username', '$password', '$email', '$nama', '$alamat', '$no_telp')";
    }

    if (mysqli_query($conn, $query)) {
        // Registrasi berhasil
        header("Location: login.php");
        exit();
    } else {
        $registration_error = "Registrasi gagal. Silakan coba lagi.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Form Registrasi</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
        <h2>REGISTRASI</h2>
        <form method="POST" action="register.php">
            <input class="input" id="username" name="username" placeholder="Masukkan username" required><br><br>

            <input type="password" class="input" id="password" placeholder="Masukkan username" name="password"
                required><br><br>

            <input type="email" class="input" id="email" name="email" placeholder="Masukkan email" required><br><br>

            <input class="input" id="nama" name="nama" placeholder="Masukkan nama anda" required><br><br>

            <input class="input" id="no_telp" name="no_telp" placeholder="Masukkan nomer hp" required><br><br>

            <input class="input" id="alamat" name="alamat" placeholder="Masukkan alamat" required><br><br>

            <select id="daftar_sebagai" name="daftar_sebagai">
                <option value="tukang">Tukang</option>
                <option value="customer">Customer</option>
            </select><br><br>

            <button class="button"><span>Daftar</span></button>
            <p>Sudah mempunyai akun? <a class="daftar-link" href="login.php">Login</a></p>
        </form>

        <?php
        if (isset($registration_error)) {
            echo "<p>$registration_error</p>";
        }
        ?>
    </div>
</body>

</html>