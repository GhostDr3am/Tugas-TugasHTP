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
    $sql = "SELECT pelanggan.*, kartu.nama as Kategori from pelanggan inner join kartu on kartu.id = pelanggan.kartu_id";
    $stmt = $this->koneksi->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
  }
  public function getPelanggan($id)
  {
    $sql = "SELECT pelanggan.*, kartu.nama as Kategori from pelanggan inner join kartu on kartu.id = pelanggan.kartu_id where pelanggan.id = ?";
    $ps = $this->koneksi->prepare($sql);
    $ps->execute([$id]);
    $rs = $ps->fetch();
    return $rs;
  }
  public function simpan($data)
  {
    $sql = "INSERT INTO pelanggan (kode,nama,jk,tmp_lahir,tgl_lahir,email,kartu_id) VALUES (?,?,?,?,?,?,?)";
    $ps = $this->koneksi->prepare($sql);
    $ps->execute($data);
  }
}
