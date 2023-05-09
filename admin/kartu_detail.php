<?php
$id = $_REQUEST['id'];
$model = new Kartu();
$produk = $model->getKartu($id);

?>

<div>
  <h3><?= $produk['kode'] ?> </h3>
</div>