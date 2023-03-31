<?php
require_once 'Abstract.php';
class persegiPanjang extends Bentuk2D
{
  private $panjang;
  private $lebar;
  public function __construct($panjang, $lebar)
  {
    $this->panjang = $panjang;
    $this->lebar = $lebar;
  }
  public function namaBidang()
  {
    return 'Persegi Panjang';
  }
  public function setPanjang($panjang)
  {
    $this->panjang = $panjang;
  }
  public function setLebar($lebar)
  {
    $this->lebar = $lebar;
  }
  public function luasBidang()
  {
    return $this->panjang * $this->lebar;
  }
  public function kelilingBidang()
  {
    return 2 * ($this->panjang + $this->lebar);
  }
  public function print()
  {
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr>
                <th>Nama Bidang</th>
                <th>Panjang</th>
                <th>Lebar</th>
                <th>Luas Bidang</th>
                <th>Keliling Bidang</th>
              </tr>";
    echo "<tr>
                <td>" . $this->namaBidang() . "</td>
                <td>" . $this->panjang . " cm" . "</td>
                <td>" . $this->lebar  . " cm" . "</td>
                <td>" . $this->luasBidang()  . " cm" . "</td>
                <td>" . $this->kelilingBidang()  . " cm" . "</td>
              </tr>";
  }
}
