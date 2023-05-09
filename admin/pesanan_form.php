<br>
<?php
$obj_produk = new Pesanan();
$data_pesanan = $obj_produk->dataPesanan();

?>
<form action="pesanan_controller.php" method="POST">
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Tanggal</label>
    <div class="col-8">
      <input id="tanggal" name="tanggal" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Total</label>
    <div class="col-8">
      <input id="total" name="total" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text6" class="col-4 col-form-label">Pelanggan ID</label>
    <div class="col-8">
      <input id="pelanggan_id" name="pelanggan_id" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" value="simpan" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>