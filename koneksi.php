<?php
$host ="localhost";
$username ="root";
$password ="";
$db ="db_tib";

$koneksi =new mysqli($host, $username, $password, $db);

if ($koneksi->connect_error) {
    die("Koneksi database gagal: ". $koneksi->connect_error);
}
    else {
        echo "koneksi databse berhasil";
    }
?>