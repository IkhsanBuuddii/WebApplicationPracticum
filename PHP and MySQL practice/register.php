<?php
include 'config.php';  // Database configuration file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nohp = $_POST['phone']; 
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    // Check if password and confirm password match
    if ($password !== $confirm_password) {
        header("Location: register.html?error=Password tidak cocok!");
        exit;
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into the database
    $sql = "INSERT INTO users (nama, nohp, email, password) VALUES ('$nama', '$nohp', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to the "welcome" page with a success message
        header("Location: selamatdatang.php?success=Berhasil daftar! Selamat datang.");
    } else {
        // If there was an error, redirect back to register page
        header("Location: register.html?error=Gagal daftar!");
    }
}
?>
