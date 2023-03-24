<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rincian Gaji | Dedi Suupriadi</title>
</head>
<style>
  body {
    background-color: #f5f5f5;
  }

  table {
    border: 1px solid #000;
    border-collapse: collapse;
  }

  th {
    background-color: #3ec27c;
    color: #fff;
    padding: 10px;
  }

  td {
    padding: 10px;
  }

  button {
    background-color: #000;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  button:hover {
    background-color: #fff;
    color: #000;
    border: 1px solid #000;
  }

  input {
    padding: 10px;
    width: 80%;
    border: 1px solid #000;
    border-radius: 5px;
  }

  select {
    width: 90%;
    padding: 10px;
    border: 1px solid #000;
    border-radius: 5px;
  }

  label {
    font-weight: bold;
  }
</style>
<body>
  <h1 align="center"> Form Rincian Gaji Pegawai</h1>
  <form action="" method="post">
    <table cellpadding="10" cellspacing="0" align="center">
      <tr>
        <th colspan="3">Form Gaji Pegawai PT. Kepolu</th>
      </tr>
      <tr>
        <td>
          <label for="nama">Nama Pegawai</label>
        </td>
        <td>:</td>
        <td>
          <input type="text" name="nama" id="nama" placeholder="Masukkan Nama anda">
        </td>
      </tr>
      <tr>
        <td>
          <label for="agama">Agama</label>
        </td>
        <td>:</td>
        <td>
          <select name="agama" id="agama">
            <option value="">Silahkan Pilih Agama anda</option>
            <option value="islam">Islam</option>
            <option value="kristen">Kristen</option>
            <option value="hindu">Hindu</option>
            <option value="budha">Budha</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>
          <label for="status">Status</label>
        </td>
        <td>:</td>
        <td>
          <select name="status" id="status">
            <option value="">Silahkan Pilih Status anda</option>
            <option value="Menikah">Menikah</option>
            <option value="Belum Menikah">Belum Menikah</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>
          <label for="anak">Jumlah Anak</label>
        </td>
        <td>:</td>
        <td>
          <input type="number" name="anak" id="anak" placeholder="Masukkan Jumlah Anak anda">
        </td>
      </tr>
      <tr>
        <td>
          <label for="jabatan">Jabatan</label>
        </td>
        <td>:</td>
        <td>
          <select name="jabatan" id="jabatan">
            <option value="">Silahkan Pilih Jabatan anda</option>
            <option value="Manager">Manager</option>
            <option value="Asisten">Asisten Manager</option>
            <option value="Kabag">kabag</option>
            <option value="Staff">Staff</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>
          <button name="proses" type="submit">Simpan</button>
        </td>
      </tr>
    </table>
  </form>

  <?php
error_reporting(0);
$nama = $_POST['nama'];
$agama = $_POST['agama'];
$status = $_POST['status'];
$anak = $_POST['anak'];
$jabatan = $_POST['jabatan'];
$tombol = $_POST['proses'];

// menentukan gaji pokok
switch ($jabatan) {
    case 'Manager':
        $gajiPokok = 20000000;
        break;
    case 'Asisten':
        $gajiPokok = 15000000;
        break;
    case 'Kabag':
        $gajiPokok = 10000000;
        break;
    case 'Staff':
        $gajiPokok = 4000000;
        break;
    default:
        $gajiPokok = "";
        break;
}

// tunjangan jabatan 20% dari gaji pokok
if ($jabatan) {
    $tunjanganJabatan = 0.2 * $gajiPokok;
} else {
    $tunjanganJabatan = 0;
}

// tunjangan keluarga
if ($status == 'Menikah' && $anak <= 2) {
    $tunjanganKeluarga = 0.05 * $gajiPokok;
} else if ($status == 'Menikah' && $anak >= 3 && $anak <= 5) {
    $tunjanganKeluarga = 0.1 * $gajiPokok;
} else {
    $tunjanganKeluarga = 0;
}

// menentukan gaji kotor
$gajiKotor = $gajiPokok + $tunjanganJabatan + $tunjanganKeluarga;

// menentukan zakat
$zakat = ($agama == 'islam' && $gajiKotor >= 6000000) ? $gajiKotor * 0.025 : 0;

// menentukan gaji bersih
$gajiBersih = $gajiKotor - $zakat;

// menampilkan hasil
if (isset($tombol)) {
    ?>
    <br>
        <table cellpadding="10" cellspacing="0" align="center" width="50%">
          <tr>
            <th colspan="3">Rincian Gaji Pegawai PT. Kepolu</th>
          </tr>
          <tr>
            <td>Nama Pegawai</td>
            <td>:</td>
            <td><?=$nama;?></td>
          </tr>
          <tr>
            <td>Agama</td>
            <td>:</td>
            <td><?=$agama;?></td>
          </tr>
          <tr>
            <td>Status</td>
            <td>:</td>
            <td><?=$status;?></td>
          </tr>
          <tr>
            <td>Jumlah Anak</td>
            <td>:</td>
            <td><?=$anak;?></td>
          </tr>
          <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td><?=$jabatan;?></td>
          </tr>
          <tr>
            <td>Gaji Pokok</td>
            <td>:</td>
            <td>Rp.<?=$gajiPokok;?></td>
          </tr>
          <tr>
            <td>Tunjangan Jabatan</td>
            <td>:</td>
            <td>Rp.<?=$tunjanganJabatan;?></td>
          </tr>
          <tr>
            <td>Tunjangan Keluarga</td>
            <td>:</td>
            <td>Rp.<?=$tunjanganKeluarga;?></td>
          </tr>
          <tr>
            <td>Gaji Kotor</td>
            <td>:</td>
            <td>Rp.<?=$gajiKotor;?></td>
          </tr>
          <tr>
            <td>Zakat</td>
            <td>:</td>
            <td>Rp.<?=$zakat;?></td>
          </tr>
          <tr>
            <td>Gaji Bersih</td>
            <td>:</td>
            <td>Rp.<?=$gajiBersih;?></td>
          </tr>
        </table>
  <?php }?>

</body>
</html>