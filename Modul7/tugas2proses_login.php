<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = $_POST["nama"];
    $password = $_POST["password"];

    echo "<h2>Selamat, Anda Berhasil Login!</h2>";
    echo "<strong>Nama:</strong> $nama<br>";
    echo "<strong>password:</strong> $password<br>";

}
?>
