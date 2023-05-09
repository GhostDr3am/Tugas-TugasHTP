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
    $sql = "SELECT pesanan.*, pelanggan.nama AS nama_pelanggan FROM pesanan inner JOIN pelanggan ON pesanan.pelanggan_id = pelanggan.id";
    $stmt = $this->koneksi->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
  }
  public function getPesanan($id)
  {
    $sql = "SELECT pesanan.*, pelanggan.nama AS nama_pelanggan FROM pesanan inner JOIN pelanggan ON pesanan.pelanggan_id = pelanggan.id ORDER BY tanggal = ?";
    $ps = $this->koneksi->prepare($sql);
    $ps->execute($id);
    $rs = $ps->fetch();
    return $rs;
  }
  public function simpan($data)
  {
    $sql = "INSERT INTO pesanan (tanggal,total,pelanggan_id) VALUES(?,?,?)";
    $ps = $this->koneksi->prepare($sql);
    $ps->execute($data);
  }
}
