<?php
$jsonData = file_get_contents('contoh.json');

// Konversi JSON ke dalam bentuk array PHP
$dataArray = json_decode($jsonData, true);

// Inisialisasi variabel penghitung iterasi
$startIndex = 0;
$counter = 0;
$con = 1;
$data = [];
$dadu1 = 0;
$dadu2 = 0;
$dadu3 = 0;
$dadu4 = 0;
$dadu5 = 0;
$dadu6 = 0;
$jmldata = count($dataArray);

?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>Azures BootStrap</title>
    <link rel="stylesheet" type="text/css" href="styles/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="styles/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css" />
    <link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js" />
    <link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png" />
  </head>
  
  <body class="theme-light" data-highlight="blue2">
    <div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
    <div id="page">
      <div id="footer-bar" class="footer-bar-5">
        <a href="index-components.html" class="active-nav"><i data-feather="heart" data-feather-line="1" data-feather-size="21" data-feather-color="red2-dark" data-feather-bg="red2-fade-light"></i><span>Features</span></a>
        <a href="index-media.html"><i data-feather="image" data-feather-line="1" data-feather-size="21" data-feather-color="green1-dark" data-feather-bg="green1-fade-light"></i><span>Media</span></a>
        <a href="index.php"><i data-feather="home" data-feather-line="1" data-feather-size="21" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-light"></i><span>Home</span></a>
        <a href="index-pages.html"><i data-feather="file" data-feather-line="1" data-feather-size="21" data-feather-color="brown1-dark" data-feather-bg="brown1-fade-light"></i><span>Pages</span></a>
        <a href="index-settings.html"><i data-feather="settings" data-feather-line="1" data-feather-size="21" data-feather-color="gray2-dark" data-feather-bg="gray2-fade-light"></i><span>Settings</span></a>
      </div>
      
      <div class="page-content">
        <div class="page-title page-title-small">
          <h2>
            <a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>LOSANODA
          </h2>
          <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="images/avatars/5s.png"></a>
        </div>
        <div class="card header-card shape-rounded" data-card-height="150">
          <div class="card-overlay bg-highlight opacity-95"></div>
          <div class="card-overlay dark-mode-tint"></div>
          <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
        </div>
        
        <div class="card card-style">
          <div class="card-body">
            <p class="mb-1">LOSANODA mengunakanan logikan dadu yang sering muncul, semakin sering muncul dadunya semakin besar juga peluang kemenangannya.</p>
          </div>
        </div>
        
        <?php
// Mengambil data dalam kelompok berukuran 10 secara terus menerus
while ($startIndex < count($dataArray)) {
 
  
  ?>
  <div class="card card-style">
    <div class="content mb-0">
      <h3 class="font-700"> <?php echo 'putaran   ' . $con ; ?></h3>
      <?php
            if($dataArray <=10){
              
              ?>
            <p class="mt-n2 mb-4"><?php echo 'putaran   ' . count(($dataArray)) ; ?></p>
            <?php
            }
            else{
              if ($jmldata >= 10) {
                 

          
  ?>
            <p class="mt-n2 mb-4"><?php echo 'jumlah data inputan  10 '; ?></p>
            <?php
               $jmldata -= 10;
              }
              else {
                ?>
            <p class="mt-n2 mb-4"><?php echo 'jumlah data inputan  ' . $jmldata ; ?></p>
            <?php $jmldata = 0;
            }
            }
  ?>
            <div class="row mb-0">
            <?php

    for ($i = $startIndex; $i < min($startIndex + 10, count($dataArray)); $i++) {
        $person = $dataArray[$i];
        
        // Memecah string $person['dadu123'] menjadi karakter-karakter
        $characters = str_split($person['dadu123']);
        // Menampilkan karakter-karakter
        foreach ($characters as $char) {
            if( $char == 1){
                $dadu1++;
              }
              elseif( $char == 2){
                $dadu2++;
              }
            elseif( $char == 3){
              $dadu3++;
            }
            elseif( $char == 4){
                $dadu4++;
              }
              elseif( $char == 5){
                $dadu5++;
              }
              elseif( $char == 6){
                $dadu6++;
              }
              if(true){
                $data[] = $char;
              }
              
              
            }
            // Meningkatkan penghitung iterasi
            $counter++;
          }
          $totalData = count($data);

// Menghitung kemunculan setiap angka
$angka = array_count_values($data);


          ?>
              <div class="col-4 pr-1">
                <a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-dark2-dark">DADU</a>
                <a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-red2-light">1</a>
                <a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-blue2-light">2</a>
                <a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-pink1-dark">3</a>
                <a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-magenta1-dark">4</a>
                <a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-brown1-dark">5</a>
                <a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-dark1-dark">6</a>
              </div>
              <div class="col-4 pr-1 pl-1">
                <a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-dark2-dark">JML</a>
                <a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-red2-light"><?php echo  $dadu1; ?> KALI</a>
                <a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-blue2-light"><?php echo  $dadu2; ?> KALI</a>
                <a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-pink1-dark"><?php echo  $dadu3; ?> KALI</a>
                <a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-magenta1-dark"><?php echo  $dadu4; ?> KALI</a>
                <a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-brown1-dark"><?php echo  $dadu5; ?> KALI</a>
                <a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-dark1-dark"><?php echo  $dadu6; ?> KALI</a>
              </div>
              

              <div class="col-4 pl-1">
                <a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-dark2-dark">PERSEN</a>
                <a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-red2-light"><?php $angka = array_count_values($data);
$r1 = false;
$r2 = false;
$r3 = false;
$r4 = false;
$r5 = false;
$r6 = false;
// Menghitung persentase kemunculan setiap angka
foreach ($angka as $key => $value) {
    $persentase = number_format(($value / $totalData) * 100, 2);;
    if($key == 1 ){
    echo "$persentase%";
      $r1 = true;
  }
}
if( $r1 == false){
  echo '0';
      
  }
          ?></a>
                <a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-blue2-light"><?php $angka = array_count_values($data);

// Menghitung persentase kemunculan setiap angka
foreach ($angka as $key => $value) {
    $persentase = number_format(($value / $totalData) * 100, 2);;
    if($key == 2 ){
    echo "$persentase%";
      $r2 = true;
  }
}
if( $r2 == false){
  echo '0';
      
  }
          ?></a>
                <a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-pink1-dark"><?php $angka = array_count_values($data);

// Menghitung persentase kemunculan setiap angka
foreach ($angka as $key => $value) {
    $persentase = number_format(($value / $totalData) * 100, 2);;
    if($key == 3 ){
    echo "$persentase%";
      $r3 = true;
  }
}
if( $r3 == false){
  echo '0';
      
  }
          ?></a>
                <a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-magenta1-dark"><?php $angka = array_count_values($data);

// Menghitung persentase kemunculan setiap angka
foreach ($angka as $key => $value) {
    $persentase = number_format(($value / $totalData) * 100, 2);;
    if($key == 4 ){
    echo "$persentase%";
      $r4 = true;
  }
}
if( $r4 == false){
  echo '0';
      
  }
          ?></a>
                <a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-brown1-dark"><?php $angka = array_count_values($data);

// Menghitung persentase kemunculan setiap angka
foreach ($angka as $key => $value) {
    $persentase = number_format(($value / $totalData) * 100, 2);;
    if($key == 5 ){
    echo "$persentase%";
      $r5 = true;
  }
}
if( $r5 == false){
  echo '0';
      
  }
          ?></a>
                <a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-dark1-dark"><?php $angka = array_count_values($data);

// Menghitung persentase kemunculan setiap angka
foreach ($angka as $key => $value) {
    $persentase = number_format(($value / $totalData) * 100, 2);;
    if($key == 6 ){
    echo "$persentase%";
      $r6 = true;
  }
}
if( $r6 == false){
  echo '0';
      
  }
          ?></a>
              </div>
              <!-- 
              <div class="card card-style">
                <div class="content mb-0">
                  <h3 class="font-700">Kemungkinan dadu keluar di puteran selanjutnya adalah</h3>
                  <p class="mt-n2 mb-4">Three levels of roundness, small, medium and large.</p>
                  <div class="row mb-0">
                    <div class="col-4 pl-1">
                      <a href="#" class="btn btn-3d btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s border-green1-dark bg-red2-light">1 = 100%</a>
                    </div>
                    <div class="col-4 pl-1">
                      <a href="#" class="btn btn-3d btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s border-green1-dark bg-blue2-light">2 = 100%</a>
                    </div>
                    <div class="col-4 pl-1">
                      <a href="#" class="btn btn-3d btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s border-green1-dark bg-pink1-dark">3 = 100%</a>
                    </div>
                    <div class="col-4 pl-1">
                      <a href="#" class="btn btn-3d btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s border-green1-dark bg-magenta1-dark">4 = 100%</a>
                    </div>
                    <div class="col-4 pl-1">
                      <a href="#" class="btn btn-3d btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s border-green1-dark bg-brown1-dark">5 = 100%</a>
                    </div>
                    <div class="col-4 pl-1">
                      <a href="#" class="btn btn-3d btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s border-green1-dark bg-dark1-dark">6 = 100%</a>
                    </div>
                  </div>
                </div>
              </div>

               --->
            </div>
          </div>
        </div>
        
              <?php

    // Memperbarui nilai variabel penghitung iterasi
    $startIndex += 10;
    $con++;
    $dadu1 = 0;
    $dadu2 = 0;
    $dadu3 = 0;
    $dadu4 = 0;
    $dadu5 = 0;
    $dadu6 = 0;
    array_splice($data, 0); 
    
  }
?>
      <!--
        <div class="card card-style">
          <div class="content mb-0">
            <h3 class="font-700">hasil kemungkin setiap puteranan</h3>
            <p class="mt-n2 mb-4">Three levels of roundness, small, medium and large.</p>
            <div class="row mb-0">
              <div class="col-4 pr-1">
                <a href="#" class="btn btn-3d btn-m btn-full mb-3 rounded-xl text-uppercase font-900 shadow-s border-red2-dark bg-red2-light">PUTERAN 1 </a>
              </div>
              <div class="col-4 pl-1 pr-1">
                <a href="#" class="btn btn-3d btn-m btn-full mb-3 rounded-xl text-uppercase font-900 shadow-s border-green1-dark bg-green1-light">Button</a>
              </div>
            </div>
          </div>
        </div>
        -->
        
      </div>
      <!-- end of page content-->
      
      <div id="menu-share" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-load="menu-share.html" data-menu-height="420" data-menu-effect="menu-over"></div>
      
      <div id="menu-highlights" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-load="menu-colors.html" data-menu-height="510" data-menu-effect="menu-over"></div>
      
      <div id="menu-main" class="menu menu-box-right menu-box-detached rounded-m" data-menu-width="260" data-menu-load="menu-main.html" data-menu-active="nav-features" data-menu-effect="menu-over"></div>
    </div>
    
    <script type="text/javascript" src="scripts/jquery.js"></script>
    <script type="text/javascript" src="scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="scripts/custom.js"></script>
  </body>
</html>
