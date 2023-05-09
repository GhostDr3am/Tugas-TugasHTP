<?php
class Kartu
{
  private $koneksi;
  public function __construct()
  {
    global $dbh;
    $this->koneksi = $dbh;
  }
  public function jenisKartu()
  {
    $sql = "SELECT * FROM kartu";
    $ps = $this->koneksi->prepare($sql);
    $ps->execute();
    $rs = $ps->fetchAll();
    return $rs;
  }
  public function getKartu($id)
  {
    $sql = "SELECT * FROM kartu WHERE id = '$id'";
    $ps = $this->koneksi->prepare($sql);
    $ps->execute([$id]);
    $rs = $ps->fetch();
    return $rs;
  }
  public function simpan($data)
  {
    $sql = "INSERT INTO kartu(kode, nama, diskon,iuran)
    VALUES (?,?,?,?)";
    $ps = $this->koneksi->prepare($sql);
    $ps->execute($data);
  }
}
