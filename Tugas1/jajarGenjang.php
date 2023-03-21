<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Rumus | PHP</title>
</head>

<body>
  <h1> Menghitung Luas dan Keliling Jajar Genjang </h1>
  <form method="POST">
    <table class="apaluh">
      <tr>
        <th colspan="2">
          <h2>Luas & Keliling Jajar Genjang</h2>
        </th>
      </tr>
      <tr>
        <td>Alas</td>
        <td>
          <input type="text" name="alas" require>
        </td>
      </tr>
      <tr>
        <td>Tinggi</td>
        <td>
          <input type="text" name="tinggi" require>
        </td>
      </tr>
      <tr>
        <td>Sisi Miring</td>
        <td>
          <input type="text" name="sisimiring" require>
        </td>
      </tr>
      <tr>
        <td>
          <input type="submit" name="submit" value="Hitung">
        </td>
      </tr>
    </table>
  </form>
  <?php
if (isset($_POST['submit'])) {
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];
    $miring = $_POST['sisimiring'];

    // Rumus Luas Jajar Genjang
    $luasjajarGenjang = $alas * $tinggi;

    // Rumus Keliling Jajar Genjang
    $kelilingjajarGenjang = 2 * ($alas + $miring);
    echo 'Hasil dari perhitungan Luas dan Keliling Jajar Genjang adalah ';
    echo '<br> Diketahui :';
    echo '<br> Alas : ' . $alas . ' cm';
    echo '<br> Tinggi : ' . $tinggi . ' cm';
    echo '<br> Sisi Miring : ' . $miring . ' cm';

    echo '<br> Maka Luas yang didapatkan adalah : ' . $luasjajarGenjang . ' cm' . '<sup>2</sup>' . ' dan Kelilingnya ' . $kelilingjajarGenjang . ' cm';
}
?>
</body>
</html>