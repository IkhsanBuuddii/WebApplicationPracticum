# WebApplicationPracticum

# WSA Store - Sistem Registrasi dan Login

WSA Store adalah aplikasi berbasis web yang memungkinkan pengguna untuk mendaftar akun baru dan login menggunakan PHP, MySQL, dan JavaScript. Aplikasi ini menggunakan hashing password untuk meningkatkan keamanan data pengguna.

## Fitur Utama

- **Registrasi Pengguna:** Pengguna dapat mendaftar dengan mengisi formulir dengan informasi seperti nama, nomor handphone, email, dan password.
- **Login Pengguna:** Pengguna dapat masuk dengan menggunakan email dan password yang sudah terdaftar.
- **Password Hashing:** Password yang disimpan di database di-hash menggunakan algoritma `bcrypt` untuk menjaga keamanan data pengguna.
- **Penggunaan JavaScript:** Menyediakan fungsionalitas interaktif pada halaman registrasi dan login seperti toggle password visibility.

## Struktur Proyek

- `register.html`: Halaman registrasi pengguna.
- `register.php`: Script PHP untuk memproses data registrasi dan menyimpan ke database.
- `login.html`: Halaman login pengguna.
- `login.php`: Script PHP untuk memverifikasi login.
- `config.php`: Konfigurasi untuk menghubungkan aplikasi dengan database MySQL.
- `selamatdatang.php`: Halaman yang muncul setelah berhasil mendaftar, mengonfirmasi registrasi yang sukses.
- `Script.js`: Script JavaScript untuk mengelola fungsionalitas di sisi klien, termasuk toggle visibilitas password.
