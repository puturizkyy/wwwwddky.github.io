<?php
$jsonData = file_get_contents('contoh.json');

// Konversi JSON ke dalam bentuk array PHP
$dataArray = json_decode($jsonData, true);

// Inisialisasi variabel penghitung iterasi
$startIndex = 0;
$counter = 10;
$con = 1;
$dadu1 = 0;
$dadu2 = 0;
$dadu3 = 0;
$dadu4 = 0;
$dadu5 = 0;
$dadu6 = 0;
$dataArrayy = count($dataArray) - $counter;
echo $dataArrayy;
// Mengambil data dalam kelompok berukuran 10 secara terus menerus
while ($startIndex < count($dataArray)) {
    // Loop untuk mengambil 10 data atau kurang pada putaran saat ini
    echo 'putaran' . $con . ' </br>';
    for ($i = $startIndex; $i < min($startIndex + 10, count($dataArray)); $i++) {
        $person = $dataArray[$i];
        
        // Memecah string $person['dadu123'] menjadi karakter-karakter
        $characters = str_split($person['dadu123']);
        // Menampilkan karakter-karakter
        foreach ($characters as $char) {
            echo $char . '<br>';
            if( $char == 5){
                $dadu6++;
                
            }
        }
        echo  $dadu6 . '</br>';
        
        // Meningkatkan penghitung iterasi
        $counter++;
    }
    
    // Memperbarui nilai variabel penghitung iterasi
    $startIndex += 10;
    $con++;
}
?>
