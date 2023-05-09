<?php
include 'koneksi.php';
include 'models/Pelanggan.php';


$kode = $_POST['kode'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$email = $_POST['email'];
$kartu_id = $_POST['kartu_id'];

$data = [
  $kode, $nama, $jk, $tmp_lahir, $tgl_lahir, $email, $kartu_id
];

$model = new Pelanggan();
$tombol = $_REQUEST['proses'];
switch ($tombol) {
  case 'simpan':
    $model->simpan($data);
    break;
  default:
    header('Location:index.php?url=pelanggan');
    break;
}
header('Location:index.php?url=pelanggan');
