<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Login</title>
</head>
<body>

<h2>Login</h2>
<form method="POST">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required><br><br>
    
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br><br>
    
    <button type="submit">Login</button>
</form>

<?php
// Function untuk memvalidasi login
function validasiLogin($username, $password) {
    // Daftar username dan password valid (contoh)
    $validUsername = "admin";
    $validPassword = "1234";

    // Cek apakah username dan password cocok
    if ($username == $validUsername && $password == $validPassword) {
        return true;  // Login berhasil
    } else {
        return false; // Login gagal
    }
}

// Pengecekan saat form disubmit
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Ambil nilai username dan password dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek validasi login
    if (validasiLogin($username, $password)) {
        echo "<p>Login Berhasil! Selamat datang, $username.</p>";
    } else {
        echo "<p>Login Gagal! Username atau Password salah.</p>";
    }
}
?>

</body>
</html>
