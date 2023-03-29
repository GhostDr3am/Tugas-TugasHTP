<?php
$prodi = ["SI" => "Sistem Informasi", "TI" => "Teknik Informatika", "MI" => "Manajemen Informatika", "TF" => "Teknologi Informasi"];
$skill = ["HTML" => 10, "CSS" => 80, "PHP" => 70, "JS" => 60, "MySQL" => 50];
$domisili = ["Jakarta", "Bandung", "Surabaya", "Malang", "Lombok"];
?>
<style>
  fieldset {
    width: 50%;
    margin: auto;
    border-color: yellow;
    box-shadow: 2px 2px 4px #333;
  }

  .ip {
    width: 100%;
  }

  table {
    width: 100%;
  }

  table td {
    padding: 5px;
  }

  table th {
    padding: 5px;
    background-color: yellow;
  }
</style>
<fieldset>
  <legend align="center">Form Registrasi Kelompok Belajar</legend>
  <table>
    <thead>
      <tr>
        <th colspan="3">Form Registrasi</th>
      </tr>
    </thead>
    <tbody>
      <form action="" method="post">
        <tr>
          <td>NIM</td>
          <td>:</td>
          <td><input type="text" name="nim" id="nim" class="ip"></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td><input type="text" name="nama" id="nama" class="ip"></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>:</td>
          <td>
            <input type="radio" name="jk" id="jk" value="L">Laki-laki
            <input type="radio" name="jk" id="jk" value="P">Perempuan
        </tr>
        <tr>
          <td>Program Studi</td>
          <td>:</td>
          <td>
            <select name="prodi" id="prodi">
              <?php foreach ($prodi as $key => $value) : ?>
                <option value="<?= $key ?>"><?= $value ?></option>
              <?php endforeach; ?>
            </select>
          </td>
        </tr>
        <tr>
          <td>Skill</td>
          <td>:</td>
          <td>
            <?php
            foreach ($skill as $key => $value) {
            ?>
              <input type="checkbox" name="skill[]" id="skill" value="<?= $key ?>"><?= $key ?>
            <?php } ?>
          </td>
        </tr>
        <tr>
          <td>Domisili</td>
          <td>:</td>
          <td>
            <select name="domisili" id="domisili">
              <?php
              foreach ($domisili as $d) {
              ?>
                <option value="<?= $d ?>"><?= $d ?></option>
              <?php } ?>
            </select>
          </td>
        </tr>
    <tfoot>
      <tr>
        <th colspan="3">
          <button name="proses">Submit</button>
          <button name="reset"> Hapus</button>
        </th>
      </tr>
    </tfoot>
    </form>
    </tbody>
  </table>
</fieldset>
<?php
error_reporting(0);
// Menghitung skor skill
function skor($skill)
{
  $skor = 0;
  foreach ($skill as $s) {
    if ($s == "HTML") {
      $skor += 10;
    } elseif ($s == "CSS") {
      $skor += 20;
    } elseif ($s == "PHP") {
      $skor += 30;
    } elseif ($s == "JS") {
      $skor += 40;
    } elseif ($s == "MySQL") {
      $skor += 50;
    }
  }
  return $skor;
};

//menentukan kategori skill
function kategori($skor)
{
  if ($skor >= 100 && $skor <= 150) {
    return "Sangat Baik";
  } elseif ($skor >= 60 && $skor <= 100) {
    return "Baik";
  } elseif ($skor >= 40 && $skor <= 60) {
    return "Cukup";
  } elseif ($skor >= 0 && $skor <= 40) {
    return "Kurang";
  } else {
    return "Tidak Memadai";
  }
}


if (isset($_POST['proses'])) {
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $jk = $_POST['jk'];
  $prodi = $_POST['prodi'];
  $skill = $_POST['skill'];
  $domisili = $_POST['domisili'];
}

?>
<fieldset>
  <legend align="center">Bukti Registrasi Kelompok Belajar</legend>
  <table>
    <tr>
      <td>Nim</td>
      <td>:</td>
      <td><?= $nim ?></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td><?= $nama ?></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td>:</td>
      <td><?= $jk ?></td>
    </tr>
    <tr>
      <td>Program Studi</td>
      <td>:</td>
      <td><?= $prodi ?></td>
    </tr>
    <tr>
      <td>Skill</td>
      <td>:</td>
      <td><?php
          foreach ($skill as $s) {
          ?><?= $s ?>,
      <?php } ?>
      </td>
    </tr>
    <tr>
      <td>Skor Skill</td>
      <td>:</td>
      <td>
        <?php
        $skor = skor($skill);
        echo $skor;
        ?>
      </td>
    </tr>
    <tr>
      <td>Kategori Skiill</td>
      <td>:</td>
      <td>
        <?php
        $kategori = kategori($skor);
        echo $kategori;
        ?>
      </td>
    </tr>
    <tr>
      <td>Domisili</td>
      <td>:</td>
      <td><?= $domisili ?></td>
    </tr>
  </table>
</fieldset>