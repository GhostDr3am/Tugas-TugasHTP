<?php
require 'Pegawai.php';
// data pegawai
$pegawai = array(
  array('01111', 'Andi', 'Manager', 'Islam', 'Menikah'),
  array('02222', 'Budi', 'Asisten Manager', 'Kristen', 'Duda'),
  array('03333', 'Caca', 'Kepala Bagian', 'Katolik', 'Janda Pirang'),
  array('04444', 'Deni', 'Staff', 'Hindu', 'Menikah'),
  array('05555', 'Euis', 'Staff', 'Budha', 'Duda')
);

// cetak semua pegawai
foreach ($pegawai as $data) {
  $p = new Pegawai($data[0], $data[1], $data[2], $data[3], $data[4]);
  echo $p->cetak();
}
