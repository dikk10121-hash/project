<?php
// Koneksi ke database MySQL
include("sys_koneksi.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil input dari POST
    $email    = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Masukkan ke tabel users (pakai prepared statement)
    $stmt = mysqli_prepare($koneksi, "INSERT INTO users (email ,username, password) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sss", $email, $username, $password);
    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo "<script>alert('Registrasi berhasil, Silahkan login ulang'); window.location='login.php';</script>";
    } else {
        echo "Registrasi gagal!";
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($koneksi);
?>
