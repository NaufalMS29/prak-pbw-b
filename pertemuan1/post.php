<?php
// Mengecek apakah form sudah ditekan (method POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Menangkap data yang dikirim dari form HTML di bawah
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "<h3>Berhasil Login!</h3>";
    echo "Username yang dimasukkan: " . $username . "<br>";
    echo "Password disembunyikan dari URL.";
    echo "<hr>";
}
?>

<!-- HTML Form untuk simulasi Client/Pengguna -->
<form method="POST" action="">
    <label>Username:</label><br>
    <input type="text" name="username" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Login</button>
</form>