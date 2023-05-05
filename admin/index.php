<?php
include "koneksi.php";
require_once 'models/Produk.php';
require_once 'models/jenis_Produk.php';
require_once 'models/Kartu.php';
require_once 'models/Pelanggan.php';
require_once 'models/Pesanan.php';


//memanggil dan memproses file bagian atas
include_once 'top.php';
//memanggil dan memproses file bagian menu
include_once 'menu.php';
?>
<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">

      <?php
      //algoritma menangkap url agar masuk kedalam index
      $url = $_GET['url'];
      if ($url == 'dashboard') {
        include 'dashboard.php';
      } else if (!empty($url)) {
        include_once '' . $url . '.php';
      } else {
        'dashboard.php';
      }

      ?>
    </div>
  </main>
</div>

<?php
//memanggil file bagian bawah
include_once 'bottom.php';
?>