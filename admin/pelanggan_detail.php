<?php
$id = $_REQUEST['id'];
$model = new Pelanggan();
$produk = $model->getPelanggan($id);

?>

<div>
  <h3><?= $produk['kode'] ?> </h3>
</div>