<?php
$model = new Produk();
$data_produk = $model->dataProduk();
?>
<h1 class="mt-4">Tables</h1>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
  <li class="breadcrumb-item active">Tables</li>
</ol>
<div class="card mb-4">
  <div class="card-body">
    DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
    <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
    .
  </div>
</div>
<div class="card mb-4">
  <div class="card-header">
    <i class="fas fa-table me-1"></i>
    Data Produk
  </div>
  <div class="card-body">
    <!-- membuat tombol tambah data -->
    <a href="index.php?url=product_form" class="btn btn-primary btn-sm">Tambah</a>
    <table id="datatablesSimple">
      <thead>
        <tr>
          <th>No</th>
          <th>Kode</th>
          <th>Nama</th>
          <th>Harga Beli</th>
          <th>Harga Jual</th>
          <th>Stok</th>
          <th>Minimal Stok</th>
          <th>Jenis Produk</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>No</th>
          <th>Kode</th>
          <th>Nama</th>
          <th>Harga Beli</th>
          <th>Harga Jual</th>
          <th>Stok</th>
          <th>Minimal Stok</th>
          <th>Jenis Produk</th>
          <th>Aksi</th>
        </tr>
      </tfoot>
      <tbody>
        <tr>
          <?php
          $no = 1;
          foreach ($data_produk as $row) {
          ?>
            <td><?= $no++ ?></td>
            <td><?= $row['kode'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['harga_beli'] ?></td>
            <td><?= $row['harga_jual'] ?></td>
            <td><?= $row['stok'] ?></td>
            <td><?= $row['min_stok'] ?></td>
            <td><?= $row['jenis_produk_id'] ?></td>
            <td>
              <form action="">
                <a href="index.php?url=product_detail&id=<?= $row['id'] ?>" class="btn btn-info btn-sm">Detail</a>
                <a href="" class="btn btn-warning btn-sm">Ubah</a>
                <a href="" class="btn btn-danger btn-sm">Hapus</a>
              </form>
            </td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>

</div>
</div>