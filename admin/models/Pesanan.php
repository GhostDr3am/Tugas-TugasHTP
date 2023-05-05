<?php
class Pesanan
{
  private $koneksi;
  public function __construct()
  {
    global $dbh; // instance koneksi dari file koneksi.php
    $this->koneksi = $dbh;
  }
  public function dataPesanan()
  {
    $sql = "SELECT pesanan.*, pelanggan.id from pesanan inner join pelanggan";
    $stmt = $this->koneksi->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
  }
}
