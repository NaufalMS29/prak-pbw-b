<?php
// Mengecek apakah ada parameter 'nama' di URL
if (isset($_GET['nama'])) {
    $nama = $_GET['nama'];
    echo "Halo, " . $nama . "! Selamat datang.";
} else {
    echo "Siapa nama Anda? Tambahkan '?nama=namakamu' di akhir URL.";
}
?>