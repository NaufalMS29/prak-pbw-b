<?php 
$host = '127.0.0.1';
$user = 'root';
$password = 'root';
$dbname = 'akademik_pbw_b';
$port = 8889;

$koneksi = mysqli_connect($host, $user, $password, $dbname, $port);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi ke server MySQL berhasil!\n";

?>