<?php
require_once 'Abstract.php';

class Lingkaran extends Bentuk2D
{
  private $jariJari;

  public function __construct($jariJari)
  {
    $this->jariJari = $jariJari;
  }

  public function namaBidang()
  {
    return 'Lingkaran';
  }

  public function setJariJari($jariJari)
  {
    $this->jariJari = $jariJari;
  }

  public function luasBidang()
  {
    return 3.14 * $this->jariJari * $this->jariJari;
  }
  public function kelilingBidang()
  {
    return 2 * 3.14 * $this->jariJari;
  }
  public function print()
  {
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr>
            <th>Nama Bidang</th>
            <th>Dengan Jari-jari</th>
            <th>Luas Bidang</th>
            <th>Keliling Bidang</th>
          </tr>";
    echo "<tr>
            <td>" . $this->namaBidang() . "</td>
            <td>" . $this->jariJari . " cm" . "</td>
            <td>" . $this->luasBidang() . " cm" . "</td>
            <td>" . $this->kelilingBidang() . " cm" . "</td>
          </tr>";
  }
}
