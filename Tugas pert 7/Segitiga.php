<?php
require_once 'Abstract.php';

class Segitiga extends Bentuk2D
{
  private $alas;
  private $tinggi;

  public function __construct($alas, $tinggi)
  {
    $this->alas = $alas;
    $this->tinggi = $tinggi;
  }

  public function namaBidang()
  {
    return 'Segitiga';
  }

  public function setAlas($alas)
  {
    $this->alas = $alas;
  }
  public function setTinggi($tinggi)
  {
    $this->tinggi = $tinggi;
  }

  public function luasBidang()
  {
    return 0.5 * $this->alas * $this->tinggi;
  }
  public function kelilingBidang()
  {
    return 3 * $this->alas;
  }
  public function print()
  {
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr>
            <th>Nama Bidang</th>
            <th>Alas</th>
            <th>Tinggi</th>
            <th>Luas Bidang</th>
            <th>Keliling Bidang</th>
          </tr>";
    echo "<tr>
            <td>" . $this->namaBidang() . " cm" . "</td>
            <td>" . $this->alas . " cm" . "</td>
            <td>" . $this->tinggi . " cm" . "</td>
            <td>" . $this->luasBidang() . " cm" . "</td>
            <td>" . $this->kelilingBidang() . " cm" . "</td>
          </tr>";
  }
}
