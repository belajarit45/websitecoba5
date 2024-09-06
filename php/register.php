<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $whatsapp = $_POST['whatsapp'];
    
    if (!empty($username) && !empty($password) && !empty($whatsapp)) {
        if (is_numeric($whatsapp)) {
            // Simpan data ke database
            // Ganti kode ini dengan validasi dan penyimpanan database
            // Periksa apakah username sudah ada
            echo 'Registrasi berhasil';
        } else {
            echo 'Nomor WhatsApp harus berupa angka';
        }
    } else {
        echo 'Semua field harus diisi';
    }
}
?>

<form method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username">
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
    <label for="whatsapp">Nomor WhatsApp:</label>
    <input type="text" name="whatsapp" id="whatsapp">
    <button type="submit">Register</button>
</form>
<a href="login.php">Sudah punya akun? Login</a>
