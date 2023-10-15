<?php
// Membaca isi dari file JSON 'contoh.json' dan mengonversinya menjadi array PHP
$jsonData = file_get_contents('contoh.json');
$dataArray = json_decode($jsonData, true);

// variabel data awal
$angka1=0;
$angka2=0;
$angka3=0;
$angka4=0;
$angka5=0;
$angka6=0;

$angka111 = 0;
$angka112 = 0;
$angka113 = 0;
$angka114 = 0;
$angka115 = 0;
$angka116 = 0;
$angka122 = 0;
$angka123 = 0;
$angka124 = 0;
$angka125 = 0;
$angka126 = 0;
$angka133 = 0;
$angka134 = 0;
$angka135 = 0;
$angka136 = 0;
$angka144 = 0;
$angka145 = 0;
$angka146 = 0;
$angka155 = 0;
$angka156 = 0;
$angka166 = 0;
$angka222 = 0;
$angka223 = 0;
$angka224 = 0;
$angka225 = 0;
$angka226 = 0;
$angka233 = 0;
$angka234 = 0;
$angka235 = 0;
$angka236 = 0;
$angka244 = 0;
$angka245 = 0;
$angka246 = 0;
$angka255 = 0;
$angka256 = 0;
$angka266 = 0;
$angka333 = 0;
$angka334 = 0;
$angka335 = 0;
$angka336 = 0;
$angka344 = 0;
$angka345 = 0;
$angka346 = 0;
$angka355 = 0;
$angka356 = 0;
$angka366 = 0;
$angka444 = 0;
$angka445 = 0;
$angka446 = 0;
$angka455 = 0;
$angka456 = 0;
$angka466 = 0;
$angka555 = 0;
$angka556 = 0;
$angka566 = 0;
$angka666 = 0;
$slh =0;


// Memeriksa apakah berhasil membaca file JSON
if ($dataArray === null) {
    die('Gagal mengurai JSON.');
}

// Mengambil dan menampilkan semua nilai dari kunci 'dadu123' dalam data JSON
foreach ($dataArray as $person) {
  
    // Memeriksa apakah kunci 'dadu123' ada dalam setiap objek JSON
    if (isset($person['dadu123'])) {
      if($person['dadu123'] == 111){
        $angka111++;
    }
    elseif($person['dadu123'] == 112){
        $angka112++;
    }
    elseif($person['dadu123'] == 113){
        $angka113++;
    }
    elseif($person['dadu123'] == 114){
        $angka114++;
    }
    elseif($person['dadu123'] == 115){
        $angka115++;
    }
    elseif($person['dadu123'] == 116){
        $angka116++;
    }
    elseif($person['dadu123'] == 122){
        $angka122++;
    }
    elseif($person['dadu123'] == 123){
        $angka123++;
    }
    elseif($person['dadu123'] == 124){
        $angka124++;
    }
    elseif($person['dadu123'] == 125){
        $angka125++;
    }
    elseif($person['dadu123'] == 126){
        $angka126++;
    }
    elseif($person['dadu123'] == 133){
        $angka133++;
    }
    elseif($person['dadu123'] == 134){
        $angka134++;
    }
    elseif($person['dadu123'] == 135){
        $angka135++;
    }
    elseif($person['dadu123'] == 136){
        $angka136++;
    }
    elseif($person['dadu123'] == 144){
        $angka144++;
    }
    elseif($person['dadu123'] == 145){
        $angka145++;
    }
    elseif($person['dadu123'] == 146){
        $angka146++;
    }
    elseif($person['dadu123'] == 155){
        $angka155++;
    }
    elseif($person['dadu123'] == 156){
        $angka156++;
    }
    elseif($person['dadu123'] == 166){
        $angka166++;
    }
    elseif($person['dadu123'] == 222){
        $angka222++;
    }
    elseif($person['dadu123'] == 223){
        $angka223++;
    }
    elseif($person['dadu123'] == 224){
        $angka224++;
    }
    elseif($person['dadu123'] == 225){
        $angka225++;
    }
    elseif($person['dadu123'] == 226){
        $angka226++;
    }
    elseif($person['dadu123'] == 233){
        $angka233++;
    }
    elseif($person['dadu123'] == 234){
        $angka234++;
    }
    elseif($person['dadu123'] == 235){
        $angka235++;
    }
    elseif($person['dadu123'] == 236){
        $angka236++;
    }
    elseif($person['dadu123'] == 244){
        $angka244++;
    }
    elseif($person['dadu123'] == 245){
        $angka245++;
    }
    elseif($person['dadu123'] == 246){
        $angka246++;
    }
    elseif($person['dadu123'] == 255){
        $angka255++;
    }
    elseif($person['dadu123'] == 256){
        $angka256++;
    }
    elseif($person['dadu123'] == 266){
        $angka266++;
    }
    elseif($person['dadu123'] == 333){
        $angka333++;
    }
    elseif($person['dadu123'] == 334){
        $angka334++;
    }
    elseif($person['dadu123'] == 335){
        $angka335++;
    }
    elseif($person['dadu123'] == 336){
        $angka336++;
    }
    elseif($person['dadu123'] == 344){
        $angka344++;
    }
    elseif($person['dadu123'] == 345){
        $angka345++;
    }
    elseif($person['dadu123'] == 346){
        $angka346++;
    }
    elseif($person['dadu123'] == 355){
        $angka355++;
    }
    elseif($person['dadu123'] == 356){
        $angka356++;
    }
    elseif($person['dadu123'] == 366){
        $angka366++;
    }
    
    elseif($person['dadu123'] == 444){
        $angka444++;
    }
    elseif($person['dadu123'] == 445){
        $angka445++;
    }
    elseif($person['dadu123'] == 446){
        $angka446++;
    }
    elseif($person['dadu123'] == 455){
        $angka455++;
    }
    elseif($person['dadu123'] == 456){
        $angka456++;
    }
    elseif($person['dadu123'] == 466){
        $angka466++;
    }
    elseif($person['dadu123'] == 555){
        $angka555++;
    }
    elseif($person['dadu123'] == 556){
        $angka556++;
    }
    elseif($person['dadu123'] == 566){
        $angka566++;
    }
    elseif($person['dadu123'] == 666){
        $angka666++;
    }
    


        // Memecah nilai 'dadu123' menjadi karakter-karakter individual
        $characters = str_split($person['dadu123']);
        foreach ($characters as $char) {
        
            if($char == 1){
                $angka1++;
            }
            elseif($char == 2){
                $angka2++;
            }
            elseif($char == 3){
                $angka3++;
            }
            elseif($char == 4){
                $angka4++;
            }
            elseif($char == 5){
                $angka5++;
            }
            elseif($char == 6){
                $angka6++;
            }
            else{
                $slh++;
            }
        }
    



    } else {

    }
}
?>
<!DOCTYPE html>
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
      <!-- header and footer bar go here-->

      <div id="footer-bar" class="footer-bar-5">
        <a href="index-components.html" class="active-nav"><i data-feather="heart" data-feather-line="1" data-feather-size="21" data-feather-color="red2-dark" data-feather-bg="red2-fade-light"></i><span>Data</span></a>
        <a href="index-media.html"><i data-feather="image" data-feather-line="1" data-feather-size="21" data-feather-color="green1-dark" data-feather-bg="green1-fade-light"></i><span>Media</span></a>
        <a href="index.php"><i data-feather="home" data-feather-line="1" data-feather-size="21" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-light"></i><span>Home</span></a>
        <a href="index-pages.html"><i data-feather="file" data-feather-line="1" data-feather-size="21" data-feather-color="brown1-dark" data-feather-bg="brown1-fade-light"></i><span>Pages</span></a>
        <a href="index-settings.html"><i data-feather="settings" data-feather-line="1" data-feather-size="21" data-feather-color="gray2-dark" data-feather-bg="gray2-fade-light"></i><span>Settings</span></a>
      </div>

      <div class="page-content">
        <div class="page-title page-title-small">
          <h2>
            <a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>Data Dadu
          </h2>
          <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="images/avatars/5s.png"></a>
        </div>
        <div class="card header-card shape-rounded" data-card-height="150">
          <div class="card-overlay bg-highlight opacity-95"></div>
          <div class="card-overlay dark-mode-tint"></div>
          <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
        </div>

        <div class="card card-style">
          <div class="content">Data angka dadu yang dimasukan akan di tampilkan disini, Setiap jumlah angka dadu yang dimasukan sebelumnya bisa di jadikan refrensi untuk anda dalam memilih langkah selanjutnya.</div>
        </div>

        <div class="card card-style">
          <div class="content mt-0 mb-0">
            <div class="list-group list-custom-large">
              <a href="component-ad-boxes.html">
                <i> <img src="images/dadu/dadu1.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 1</span>
                <strong>Muncul Sebanyak : <?php echo $angka1;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>
              <a href="component-ad-scroll-show.html">
                <i> <img src="images/dadu/dadu2.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 2</span>
                <strong>Muncul Sebanyak : <?php echo $angka2;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>
              <a href="component-ad-timed.html">
                <i> <img src="images/dadu/dadu3.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 3</span>
                <strong>Muncul Sebanyak : <?php echo $angka3;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>
              <a href="component-add-to-home.html">
                <i> <img src="images/dadu/dadu4.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 4</span>
                <strong>Muncul Sebanyak : <?php echo $angka4;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-accordions.html">
                <i> <img src="images/dadu/dadu5.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 5</span>
                <strong>Muncul Sebanyak : <?php echo $angka5;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-action-sheets.html">
                <i> <img src="images/dadu/dadu6.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 6</span>
                <strong>Muncul Sebanyak : <?php echo $angka6;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-action-modals.html">
                <i> <img src="images/dadu/dadu111.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 111</span>
                <strong>Muncul Sebanyak : <?php echo $angka111;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-auto-dark.html">
                <i> <img src="images/dadu/dadu112.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 112</span>
                <strong>Muncul Sebanyak : <?php echo $angka112;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-buttons.html">
                <i> <img src="images/dadu/dadu113.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 113</span>
                <strong>Muncul Sebanyak : <?php echo $angka113;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-back-to-top.html">
                <i> <img src="images/dadu/dadu114.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 114</span>
                <strong>Muncul Sebanyak : <?php echo $angka114;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-charts.html">
                <i> <img src="images/dadu/dadu115.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 115</span>
                <strong>Muncul Sebanyak : <?php echo $angka115;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-chips.html">
                <i> <img src="images/dadu/dadu116.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 116</span>
                <strong>Muncul Sebanyak : <?php echo $angka116;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-cookie-box.html">
                <i> <img src="images/dadu/dadu122.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 122</span>
                <strong>Muncul Sebanyak : <?php echo $angka122;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-card-captions.html">
                <i> <img src="images/dadu/dadu123.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 123</span>
                <strong>Muncul Sebanyak : <?php echo $angka123;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-card-content.html">
                <i> <img src="images/dadu/dadu124.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 124</span>
                <strong>Muncul Sebanyak : <?php echo $angka124;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-card-gradient.html">
                <i> <img src="images/dadu/dadu125.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 125</span>
                <strong>Muncul Sebanyak : <?php echo $angka125;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-card-gradient.html">
                <i> <img src="images/dadu/dadu126.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 126</span>
                <strong>Muncul Sebanyak : <?php echo $angka126;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-columns.html">
                <i> <img src="images/dadu/dadu133.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 133</span>
                <strong>Muncul Sebanyak : <?php echo $angka133;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-colors.html">
                <i> <img src="images/dadu/dadu134.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 134</span>
                <strong>Muncul Sebanyak : <?php echo $angka134;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-collapse.html">
                <i> <img src="images/dadu/dadu135.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 135</span>
                <strong>Muncul Sebanyak : <?php echo $angka135;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-dividers.html">
                <i> <img src="images/dadu/dadu136.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 136</span>
                <strong>Muncul Sebanyak : <?php echo $angka136;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-disqus-comments.html">
                <i> <img src="images/dadu/dadu144.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 144</span>
                <strong>Muncul Sebanyak : <?php echo $angka144;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-file-upload.html">
                <i> <img src="images/dadu/dadu145.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 145</span>
                <strong>Muncul Sebanyak : <?php echo $angka145;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-file-upload.html">
                <i> <img src="images/dadu/dadu146.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 146</span>
                <strong>Muncul Sebanyak : <?php echo $angka146;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-facebook-comments.html">
                <i> <img src="images/dadu/dadu155.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 155</span>
                <strong>Muncul Sebanyak : <?php echo $angka155;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-geo-location.html">
                <i> <img src="images/dadu/dadu156.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 156</span>
                <strong>Muncul Sebanyak : <?php echo $angka156;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-graphs.html">
                <i> <img src="images/dadu/dadu166.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 166</span>
                <strong>Muncul Sebanyak : <?php echo $angka166;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-google-fonts.html">
                <i> <img src="images/dadu/dadu222.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 222</span>
                <strong>Muncul Sebanyak : <?php echo $angka222;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-headers.html">
                <i> <img src="images/dadu/dadu223.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 223</span>
                <strong>Muncul Sebanyak : <?php echo $angka223;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-footers.html">
                <i> <img src="images/dadu/dadu224.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 224</span>
                <strong>Muncul Sebanyak : <?php echo $angka224;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-shapes.html">
                <i> <img src="images/dadu/dadu225.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 225</span>
                <strong>Muncul Sebanyak : <?php echo $angka225;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-inputs.html">
                <i> <img src="images/dadu/dadu226.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 226</span>
                <strong>Muncul Sebanyak : <?php echo $angka226;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-icons.html">
                <i> <img src="images/dadu/dadu233.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 233</span>
                <strong>Muncul Sebanyak : <?php echo $angka233;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-icon-font.html">
                <i> <img src="images/dadu/dadu234.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 234</span>
                <strong>Muncul Sebanyak : <?php echo $angka234;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-images.html">
                <i> <img src="images/dadu/dadu235.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 235</span>
                <strong>Muncul Sebanyak : <?php echo $angka235;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-list-groups.html">
                <i> <img src="images/dadu/dadu236.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 236</span>
                <strong>Muncul Sebanyak : <?php echo $angka236;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-notifications.html">
                <i> <img src="images/dadu/dadu244.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 244</span>
                <strong>Muncul Sebanyak : <?php echo $angka244;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-os-detection.html">
                <i> <img src="images/dadu/dadu245.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 245</span>
                <strong>Muncul Sebanyak : <?php echo $angka245;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-offline-detection.html">
                <i> <img src="images/dadu/dadu246.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 246</span>
                <strong>Muncul Sebanyak : <?php echo $angka246;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-quotes.html">
                <i> <img src="images/dadu/dadu255.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 255</span>
                <strong>Muncul Sebanyak : <?php echo $angka255;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-quotes.html">
                <i> <img src="images/dadu/dadu256.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 256</span>
                <strong>Muncul Sebanyak : <?php echo $angka256;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-pagination.html">
                <i> <img src="images/dadu/dadu266.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 266</span>
                <strong>Muncul Sebanyak : <?php echo $angka266;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-preloaders.html">
                <i> <img src="images/dadu/dadu333.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 333</span>
                <strong>Muncul Sebanyak : <?php echo $angka333;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-pricing.html">
                <i> <img src="images/dadu/dadu334.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 334</span>
                <strong>Muncul Sebanyak : <?php echo $angka334;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-pricing-packs.html">
                <i> <img src="images/dadu/dadu335.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 335</span>
                <strong>Muncul Sebanyak : <?php echo $angka335;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-reviews.html">
                <i> <img src="images/dadu/dadu336.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 336</span>
                <strong>Muncul Sebanyak : <?php echo $angka336;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-reading-time.html">
                <i> <img src="images/dadu/dadu344.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 344</span>
                <strong>Muncul Sebanyak : <?php echo $angka344;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-carousels.html">
                <i> <img src="images/dadu/dadu345.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 345</span>
                <strong>Muncul Sebanyak : <?php echo $angka345;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-snackbars.html">
                <i> <img src="images/dadu/dadu346.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 346</span>
                <strong>Muncul Sebanyak : <?php echo $angka346;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-socials.html">
                <i> <img src="images/dadu/dadu355.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 355</span>
                <strong>Muncul Sebanyak : <?php echo $angka355;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-sharing.html">
                <i> <img src="images/dadu/dadu356.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 356</span>
                <strong>Muncul Sebanyak : <?php echo $angka356;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-search.html">
                <i> <img src="images/dadu/dadu366.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 366</span>
                <strong>Muncul Sebanyak : <?php echo $angka366;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-tabs.html">
                <i> <img src="images/dadu/dadu444.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 444</span>
                <strong>Muncul Sebanyak : <?php echo $angka444;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-tables.html">
                <i> <img src="images/dadu/dadu445.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 445</span>
                <strong>Muncul Sebanyak : <?php echo $angka445;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-text-sizer.html">
                <i> <img src="images/dadu/dadu446.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 446</span>
                <strong>Muncul Sebanyak : <?php echo $angka446;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-toasts.html">
                <i> <img src="images/dadu/dadu455.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 455</span>
                <strong>Muncul Sebanyak : <?php echo $angka455;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-toggles.html">
                <i> <img src="images/dadu/dadu456.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 456</span>
                <strong>Muncul Sebanyak : <?php echo $angka456;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-toggles.html">
                <i> <img src="images/dadu/dadu466.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 466</span>
                <strong>Muncul Sebanyak : <?php echo $angka466;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-typography.html" class="no-border">
                <i> <img src="images/dadu/dadu555.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 555</span>
                <strong>Muncul Sebanyak : <?php echo $angka555;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-working-hours.html">
                <i> <img src="images/dadu/dadu556.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 556</span>
                <strong>Muncul Sebanyak : <?php echo $angka556;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-vibrate.html" class="border-0">
                <i> <img src="images/dadu/dadu566.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 566</span>
                <strong>Muncul Sebanyak : <?php echo $angka566;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>

              <a href="component-vibrate.html" class="border-0">
                <i> <img src="images/dadu/dadu666.png" alt="Ikon Dadu" style="width: 30px" /></i>
                <span>Nomor dadu 666</span>
                <strong>Muncul Sebanyak : <?php echo $angka666;?> Kali</strong>
                <i class="fa fa-angle-right"></i>
              </a>
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
