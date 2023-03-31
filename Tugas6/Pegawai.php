<?php
class Pegawai
{
  protected $nip;
  public $nama;
  private $jabatan;
  private $agama;
  private $status;
  static $jml = 0;
  const PT = 'PT. HTP Indonesia';

  public function __construct($nip, $nama, $jabatan, $agama, $status)
  {
    $this->nip = $nip;
    $this->nama = $nama;
    $this->jabatan = $jabatan;
    $this->agama = $agama;
    $this->status = $status;
    self::$jml++;
  }
  // set gaji pokok jabatan 
  public function setGajiPokok($jabatan)
  {
    $this->jabatan = $jabatan;
    switch ($jabatan) {
      case 'Manager':
        $gapok = 15000000;
        break;
      case 'Asisten Manager':
        $gapok = 10000000;
        break;
      case 'Kepala Bagian':
        $gapok = 7000000;
        break;
      case 'Staff':
        $gapok = 5000000;
        break;
      default:
        $gapok = 0;
    }
    return $gapok;
  }

  public function setTunjanganJabatan($jabatan)
  {
    $this->jabatan = $jabatan;
    switch ($jabatan) {
      case 'Manager':
        $tunjangan = 15000000 * 0.2;
        break;
      case 'Asisten Manager':
        $tunjangan = 10000000 * 0.2;
        break;
      case 'Kepala Bagian':
        $tunjangan = 7000000 * 0.2;
        break;
      case 'Staff':
        $tunjangan = 5000000 * 0.2;
        break;
      default:
        $tunjangan = 0;
    }
    return $tunjangan;
  }

  public function setTunkel($status)
  {
    $this->status = $status;
    return ($status == 'Menikah') ? $this->setGajiPokok($this->jabatan) * 0.1 : 0;
  }
  public function setZakat($agama, $jabatan)
  {
    $this->agama = $agama;
    $this->jabatan = $jabatan;
    if ($agama == 'Islam' && $this->setGajiPokok($jabatan) >= 6000000) {
      return $this->setGajiPokok($jabatan) * 0.025;
    } else {
      return 0;
    }
  }

  public function cetak()
  {
    echo 'NIP Pegawai : ' . $this->nip;
    echo '<br>Nama Pegawai : ' . $this->nama;
    echo '<br>Jabatan : ' . $this->jabatan;
    echo '<br>Agama : ' . $this->agama;
    echo '<br>Status : ' . $this->status;
    echo '<br>Gaji Pokok Rp.' . number_format($this->setGajiPokok($this->jabatan), 0, ',', '.');
    echo '<br>Tunjangan Jabatan Rp.' . number_format($this->setTunjanganJabatan($this->jabatan), 0, ',', '.');
    echo '<br>Tunjangan Keluarga Rp.' . number_format($this->setTunkel($this->status), 0, ',', '.');
    echo '<br>Zakat Rp.' . number_format($this->setZakat($this->agama, $this->jabatan), 0, ',', '.');
    echo '<br>Gaji Kotor Rp.' . number_format($this->setGajiPokok($this->jabatan) + $this->setTunjanganJabatan($this->jabatan) + $this->setTunkel($this->status), 0, ',', '.');
    echo '<br>Gaji Bersih Rp.' . number_format($this->setGajiPokok($this->jabatan) + $this->setTunjanganJabatan($this->jabatan) + $this->setTunkel($this->status) - $this->setZakat($this->agama, $this->jabatan), 0, ',', '.');
    echo '<hr>';
  }
}
