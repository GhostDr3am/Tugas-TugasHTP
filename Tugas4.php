<?php
$m1 = ['NIM' => '01111021', 'nama' => 'Andi', 'nilai' => 90];
$m2 = ['NIM' => '01111022', 'nama' => 'Ani', 'nilai' => 70];
$m3 = ['NIM' => '01111023', 'nama' => 'Ari', 'nilai' => 50];
$m4 = ['NIM' => '01111024', 'nama' => 'Aji', 'nilai' => 40];
$m5 = ['NIM' => '01111025', 'nama' => 'Ali', 'nilai' => 90];
$m6 = ['NIM' => '01111026', 'nama' => 'Ai', 'nilai' => 75];
$m7 = ['NIM' => '01111027', 'nama' => 'Budi', 'nilai' => 30];
$m8 = ['NIM' => '01111028', 'nama' => 'Bani', 'nilai' => 85];
$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8];
$ar_judul = ['No', 'NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];


//fungsi-fungsi sederhana
$jumlah_data = count($mahasiswa);
$jml_nilai = array_column($mahasiswa, 'nilai');
$total_nilai = array_sum($jml_nilai);
$max_nilai = max($jml_nilai);
$min_nilai = min($jml_nilai);
$keterangan = [
  'Jumlah Data' => $jumlah_data,
  'Total Nilai' => $total_nilai,
  'Nilai tertinggi' => $max_nilai,
  'Nilai Terendah' => $min_nilai,
]
?>

<h2>Daftar Nilai Kelas 6 SD</h2>
<table border="1" width="100%" cellspacing="0">
  <thead>
    <tr>
      <?php
      foreach ($ar_judul as $judul) {
      ?>
        <th bgcolor="yellow"><?= $judul ?></th>
      <?php } ?>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    foreach ($mahasiswa as $mhs) {
      $ket = ($mhs['nilai'] >= 60) ? 'Lulus' : 'Tidak lulus';
      // grade 
      if ($mhs['nilai'] >= 85 && $mhs['nilai'] <= 100) {
        $grade = 'A';
      } elseif ($mhs['nilai'] >= 75 && $mhs['nilai'] < 80) {
        $grade = 'B';
      } elseif ($mhs['nilai'] >= 60 && $mhs['nilai'] < 74) {
        $grade = 'C';
      } elseif ($mhs['nilai'] >= 30 && $mhs['nilai'] < 59) {
        $grade = 'D';
      } elseif ($mhs['nilai'] >= 0 && $mhs['nilai'] < 29) {
        $grade = 'E';
      } else {
        $grade = '';
      }

      // switch case
      switch ($mhs['nilai']) {
        case ($mhs['nilai'] >= 85 && $mhs['nilai'] <= 100):
          $predikat = 'Memuaskan';
          break;
        case ($mhs['nilai'] >= 75 && $mhs['nilai'] < 80):
          $predikat = 'Bagus';
          break;
        case ($mhs['nilai'] >= 60 && $mhs['nilai'] < 74):
          $predikat = 'Cukup';
          break;
        case ($mhs['nilai'] >= 30 && $mhs['nilai'] < 59):
          $predikat = 'Kurang';
          break;
        case ($mhs['nilai'] >= 0 && $mhs['nilai'] < 29):
          $predikat = 'Buruk';
          break;
        default:
          $predikat = '';
          break;
      }

    ?>

      <tr>
        <td><?= $no++ ?> </td>
        <td><?= $mhs['NIM'] ?></td>
        <td><?= $mhs['nama'] ?></td>
        <td><?= $mhs['nilai'] ?></td>
        <td><?= $ket ?></td>
        <td><?= $grade ?></td>
        <td><?= $predikat ?></td>
      </tr>
    <?php } ?>
  </tbody>
  <tfoot>
    <?php
    foreach ($keterangan as $ket => $value) {
    ?>
      <tr>
        <th colspan="3"><?= $ket ?></th>
        <th colspan="4"><?= $value ?></th>
      </tr>
    <?php } ?>
  </tfoot>
