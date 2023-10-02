<?
// Membuat array asosiatif
$array = [
    "nama" => "hanif",
    "umur" => 25,
    "pekerjaan" => "Programmer",
    "alamat" => "banjarmasin",
    "telepon" => "081234567890"
];

// Mengurutkan array berdasarkan kunci
ksort($array);

// Menampilkan array yang sudah diurutkan
echo "<pre>";
print_r($array);
echo "</pre>";

// Mengurutkan array berdasarkan nilai
asort($array);

// Menampilkan array yang sudah diurutkan
echo "<pre>";
print_r($array);
echo "</pre>";

// Mengurutkan array berdasarkan nilai secara menurun
arsort($array);

// Menampilkan array yang sudah diurutkan
echo "<pre>";
print_r($array);
echo "</pre>";

// Mengurutkan array berdasarkan kunci secara menurun
krsort($array);

// Menampilkan array yang sudah diurutkan
echo "<pre>";
print_r($array);
echo "</pre>";
?>