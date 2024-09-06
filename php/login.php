<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Simpan username dan password dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (!empty($username) && !empty($password)) {
        // Validasi username dan password
        // Ganti kode ini dengan validasi database
        if ($username == 'user' && $password == 'pass') {
            header('Location: index.php');
        } else {
            echo 'Username atau password salah';
        }
    } else {
        echo 'Username dan password harus diisi';
    }
}
?>

<form method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username">
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
    <button type="submit">Login</button>
</form>
<a href="register.php">Belum punya akun? Daftar</a>
