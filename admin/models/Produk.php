<?php
class Produk
{
  private $koneksi;
  public function __construct()
  {
    global $dbh; // instance koneksi dari file koneksi.php
    $this->koneksi = $dbh;
  }
  public function dataProduk()
  {
    $sql = "SELECT produk.*, jenis_produk.nama as Kategori from produk inner join jenis_produk on jenis_produk.id = produk.jenis_produk_id";
    $stmt = $this->koneksi->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
  }
}
