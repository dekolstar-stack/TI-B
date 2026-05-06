<form method="post">
    username: <input type="text" name="username"><br><br>
    password: <input type="password" name="password"><br><br>
    nama: <input type="text" name="nama"><br><br>
    alamat: <input type="text" name="alamat"><br><br>
    <button type="submit" name="Kirim">Kirim</button>
</form>

<?php
include 'koneksi.php';

if (isset($_POST['Kirim'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO user (username, password, nama, alamat) VALUES ('$username', '$password', '$nama', '$alamat')";

    if ($koneksi->query($sql) === TRUE) {
        echo "Data berhasil disimpan";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
?>