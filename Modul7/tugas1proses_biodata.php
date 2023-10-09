<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <h2>Biodata</h2>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST["nama"];
            $NIM = $_POST["NIM"];
            $umur = $_POST["umur"];
            $jenis_kelamin = $_POST["jenis_kelamin"];
            $jurusan = $_POST['jurusan'];
            $tanggal_lahir = $_POST['tanggal_lahir'];

            // Periksa apakah tanggal lahir valid
            if (!strtotime($tanggal_lahir)) {
                echo "<p>Tanggal lahir tidak valid</p>";
                exit;
            }

            echo "<table>";
            echo "<tr>";
            echo "<td><strong>Nama:</strong></td>";
            echo "<td>$nama</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><strong>NIM:</strong></td>";
            echo "<td>$NIM</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><strong>Umur:</strong></td>";
            echo "<td>$umur tahun</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><strong>Jenis Kelamin:</strong></td>";
            echo "<td>$jenis_kelamin</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><strong>Tanggal Lahir:</strong></td>";
            echo "<td>$tanggal_lahir</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><strong>Jurusan:</strong></td>";
            echo "<td>$jurusan</td>";
            echo "</tr>";
            echo "</table>";
        }
    ?>
</body>
</html>
