<?php
// Mulai session
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION["username"])) {
    header("Location: login.html");
    exit();
}

// Tampilkan halaman dashboard
echo "Selamat datang, " . $_SESSION["username"] . "! Ini adalah halaman dashboard.";
?>
