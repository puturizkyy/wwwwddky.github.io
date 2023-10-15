<?php 

$jsonData = file_get_contents('contoh.json');
$dataArray = json_decode($jsonData, true);

// Ambil semua nama dari data JSON


    ?>



<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>Winkro</title>
    <link rel="stylesheet" type="text/css" href="styles/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="styles/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css" />
    <link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js" />
    <link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png" />
    <link rel="stylesheet" href="tambah.css">
  </head>

  <body class="theme-light" data-highlight="blue2">
    <div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

    <div id="page">
  
      <!-- header and footer bar go here-->

      
      <div id="footer-bar" class="footer-bar-5">
        <div class="input">
  <form action="proses.php" method="post">
  <div class="l">
  <div class="logo"><h1>Masukan data : </h1></div>
  <input type="text" name="dadu1" class="e">
  <input type="text" name="dadu2" class="e">
  <input type="text" name="dadu3" class="e">
  <input type="submit" name="submit" class="s" value="KIRIM">
  </div>
  
  </form>
  </div>
        <a href="index-components.html"><i data-feather="heart" data-feather-line="1" data-feather-size="21" data-feather-color="red2-dark" data-feather-bg="red2-fade-light"></i><span>Data</span></a>
        <a href="index-media.html"><i data-feather="image" data-feather-line="1" data-feather-size="21" data-feather-color="green1-dark" data-feather-bg="green1-fade-light"></i><span>Analisis</span></a>
        <a href="index.php" class="active-nav"><i data-feather="home" data-feather-line="1" data-feather-size="21" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-light"></i><span>Tambah</span></a>
        <a href="index-pages.html"><i data-feather="file" data-feather-line="1" data-feather-size="21" data-feather-color="brown1-dark" data-feather-bg="brown1-fade-light"></i><span>Pages</span></a>
        <a href="index-settings.html"><i data-feather="settings" data-feather-line="1" data-feather-size="21" data-feather-color="gray2-dark" data-feather-bg="gray2-fade-light"></i><span>Settings</span></a>
      </div>

      <div class="page-content">
        <div class="page-title page-title-small">
          <h2>
            <a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>Urutan data
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
            <p class="mb-1">Setiap data yang anda masukan akan disimpan disini dan setiap data yang anda masukan tidak akan bisa di hapus</p>
          </div>
        </div>

        <div class="card card-style">
          <div class="content mb-0">
            <h3 class="font-700">Data</h3>


            
            <div class="row mb-0">
              <div class="col-6 pr-1">
                <a href="#" class="btn btn-l btn-full mb-1 rounded-xs text-uppercase font-900 shadow-m bg-dark1-dark">nomor</a>
                <?php
                if($dataArray != null){
                foreach ($dataArray as $person) {
                  // Memeriksa apakah nomor genap
                  if ($person['nomor'] % 2 != 0) {
                    ?> <a href="#" class="btn btn-l btn-full mb-1 rounded-xs text-uppercase font-900 shadow-m bg-magenta1-dark"><?php echo $person['nomor']; ?></a> <?php
                  } else { ?>
                    <a href="#" class="btn btn-l btn-full mb-1 rounded-xs text-uppercase font-900 shadow-m bg-pink1-dark"><?php echo $person['nomor']; ?></a>
                    <?php
                  }
                }
              }

                else{
                  ?>
                  <a href="#" class="btn btn-l btn-full mb-1 rounded-xs text-uppercase font-900 shadow-m bg-magenta1-dark">tidak ada data</a>
                 <?php } ?>
              </div>
              <div class="col-6 pl-1">
                <a href="#" class="btn btn-l btn-full mb-1 rounded-xs text-uppercase font-900 shadow-m bg-dark1-dark">Dadu</a>   <?php
                if($dataArray != null)
                {foreach ($dataArray as $person) {
                  // Memeriksa apakah nomor genap
                  if ($person['nomor'] % 2 != 0) {
                    ?> <a href="#" class="btn btn-l btn-full mb-1 rounded-xs text-uppercase font-900 shadow-m bg-magenta1-dark"><?php echo $person['dadu123']; ?></a> <?php
                  } else { ?>
                    <a href="#" class="btn btn-l btn-full mb-1 rounded-xs text-uppercase font-900 shadow-m bg-pink1-dark"><?php echo $person['dadu123']; ?></a>
                    <?php
                  }
                }
              }else{
                ?>
                <a href="#" class="btn btn-l btn-full mb-1 rounded-xs text-uppercase font-900 shadow-m bg-magenta1-dark">tidak ada data</a>
               <?php } ?>
              </div>
        
            </div>
          </div>
        </div>

        
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
