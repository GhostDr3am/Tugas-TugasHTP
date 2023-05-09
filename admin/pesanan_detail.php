<?php
$id = $_REQUEST['id'];
$model = new Pesanan();
$produk = $model->getPesanan($id);

?>

<div>
  <h3><?= $produk['tanggal'] ?> </h3>
</div>