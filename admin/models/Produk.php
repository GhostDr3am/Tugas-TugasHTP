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
  public function getProduk($id)
  {
    $sql = "SELECT produk.*, jenis_produk.nama as Kategori FROM produk INNER JOIN
    jenis_produk ON jenis_produk.id = produk.jenis_produk_id WHERE produk.id = ?";
    $ps = $this->koneksi->prepare($sql);
    $ps->execute([$id]);
    $rs = $ps->fetch();
    return $rs;
  }
  public function simpan($data)
  {
    $sql = "INSERT INTO produk(kode, nama, harga_jual,harga_beli, stok, min_stok, jenis_produk_id)
    VALUES (?,?,?,?,?,?,?)";
    $ps = $this->koneksi->prepare($sql);
    $ps->execute($data);
  }
}
