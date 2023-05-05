<?php
class Pelanggan
{
  private $koneksi;
  public function __construct()
  {
    global $dbh; // instance koneksi dari file koneksi.php
    $this->koneksi = $dbh;
  }
  public function dataPelanggan()
  {
    // $sql = "SELECT pelanggan.*, kartu.nama  from pelanggan inner join kartu on pelanggan.id = pelanggan.kartu_id";
    $sql = "SELECT pelanggan.*, kartu.nama as Kategori from pelanggan inner join kartu on kartu.id = pelanggan.kartu_id";
    $stmt = $this->koneksi->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
  }
}
