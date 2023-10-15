<?php

// Nama file JSON yang ingin Anda tambahkan data
$jsonFile = 'contoh.json';

// Baca file JSON yang sudah ada
$jsonData = file_get_contents($jsonFile);

// Konversi JSON ke dalam bentuk array PHP
$dataArray = json_decode($jsonData, true);

// Inisialisasi nomor awal
$nomorTerakhir = 0;

// Cari nomor terakhir dalam data yang sudah ada
if($dataArray != null){
foreach ($dataArray as $person) {
    $nomor = $person['nomor'];
    if ($nomor > $nomorTerakhir) {
        $nomorTerakhir = $nomor;
    }
}
}

// Inkremen nomor terakhir
$nomorBaru = $nomorTerakhir + 1;

// Dapatkan nilai dadu dari POST data
$dadu1 = $_POST['dadu1'];
$dadu2 = $_POST['dadu2'];
$dadu3 = $_POST['dadu3'];
$dadu123 = $dadu1 . $dadu2 . $dadu3;

// Mengubah string menjadi array karakter.
$daduArray = str_split($dadu123);

// Mengurutkan array
sort($daduArray);

// Menggabungkan karakter-karakter yang sudah diurutkan menjadi string kembali.
$hasil = implode('', $daduArray);

// Data yang ingin ditambahkan
$newData = array(
    'nomor' => $nomorBaru, // Nomor baru yang sudah diinkremen
    'dadu123' => $hasil
);

// Tambahkan data baru ke dalam array
$dataArray[] = $newData;

// Konversi kembali ke JSON
$newJsonData = json_encode($dataArray);

// Simpan kembali ke file JSON
file_put_contents($jsonFile, $newJsonData);

header('location:index.php')
?>
