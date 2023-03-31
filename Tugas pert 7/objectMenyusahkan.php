<?php 
require_once 'Lingkaran.php';
require_once 'Segitiga.php';
require_once 'persegiPanjang.php';


$lingkaran = new Lingkaran(30);
$segitiga = new Segitiga(10, 20);
$persegiPanjang = new persegiPanjang(20, 10);

$bangunDatar = [$lingkaran, $segitiga, $persegiPanjang];

foreach ($bangunDatar as $bangunDatar) {
  $bangunDatar->print();
  echo "<br>";
}
