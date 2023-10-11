<?php
// Cek apakah ada data yang dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ganti dengan akun dan password yang sesuai
    $static_username = "username";
    $static_password = "password";

    // Ambil data yang dikirimkan dari form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Periksa apakah username dan password benar
    if ($username === $static_username && $password === $static_password) {
        // Autentikasi berhasil
        session_start();
        $_SESSION["username"] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        // Autentikasi gagal, kembali ke halaman login
        header("Location: login.html");
        exit();
    }
} else {
    // Jika halaman diakses tanpa mengirimkan data POST, kembalikan ke halaman login
    header("Location: login.html");
    exit();
}
?>
