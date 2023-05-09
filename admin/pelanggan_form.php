<br>
<?php
$model = new Pelanggan();
$data_pelanggan = $model->dataPelanggan();

?>
<form action="pelanggan_controller.php" method="POST">
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Kode</label>
    <div class="col-8">
      <input id="kode" name="kode" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama</label>
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label>
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="L" id="jk" type="radio" class="custom-control-input" value="L" required="required">
        <label for="jk" class="custom-control-label">Laki-laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="P" id="jk" type="radio" class="custom-control-input" value="P" required="required">
        <label for="jk" class="custom-control-label">Perempuan</label>
      </div>
    </div>
    <div class="form-group row">
      <label for="text3" class="col-4 col-form-label">Tempat lahir</label>
      <div class="col-8">
        <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="text4" class="col-4 col-form-label">Tanggal Lahir</label>
      <div class="col-8">
        <input id="tgl_lahir" name="tgl_lahir" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="text5" class="col-4 col-form-label">Email</label>
      <div class="col-8">
        <input id="email" name="email" type="email" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="text6" class="col-4 col-form-label">Kartu ID</label>
      <div class="col-8">
        <input id="kartu_id" name="kartu_id" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="proses" type="submit" value="simpan" class="btn btn-primary">Submit</button>
      </div>
    </div>
</form>