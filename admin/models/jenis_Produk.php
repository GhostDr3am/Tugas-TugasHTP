<?php
class jenisProduk
{
  private $koneksi;
  public function __construct()
  {
    global $dbh;
    $this->koneksi = $dbh;
  }
  public function jenisProduk()
  {
    $sql = "SELECT * FROM jenis_produk";
    $ps = $this->koneksi->prepare($sql);
    $ps->execute();
    $rs = $ps->fetchAll();
    return $rs;
  }
}
