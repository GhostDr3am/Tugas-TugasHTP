<?php
include 'koneksi.php';
include 'models/Pesanan.php';


$tanggal = $_POST['tanggal'];
$total = $_POST['total'];
$pelanggan_id = $_POST['pelanggan_id'];

$data = [$tanggal, $total, $pelanggan_id];

$model = new Pesanan();
$tombol = $_REQUEST['proses'];
switch ($tombol) {
  case 'simpan':
    $model->simpan($data);
    break;
  default:
    header('Location:index.php?url=pesanan');
    break;
}
header('Location:index.php?url=pesanan');
