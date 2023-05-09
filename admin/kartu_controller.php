<?php
include 'koneksi.php';
include 'models/Kartu.php';


$kode = $_POST['kode'];
$nama = $_POST['nama'];
$diskon = $_POST['diskon'];
$iuran = $_POST['iuran'];

$data = [$kode, $nama, $diskon, $iuran];

$model = new Kartu();
$tombol = $_REQUEST['proses'];
switch ($tombol) {
  case 'simpan':
    $model->simpan($data);
    break;
  default:
    header('Location:index.php?url=kartu');
    break;
}
header('Location:index.php?url=kartu');
