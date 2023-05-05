<?php
$model = new Pesanan();
$pesanan = $model->dataPesanan();
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
    Data Pesanan
  </div>
  <div class="card-body">
    <table id="datatablesSimple">
      <thead>
        <tr>
          <th>No</th>
          <th>Tanggal</th>
          <th>Total</th>
          <th>Pelanggan iD</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>No</th>
          <th>Tanggal</th>
          <th>Total</th>
          <th>Pelanggan iD</th>
        </tr>
      </tfoot>
      <tbody>
        <tr>
          <?php
          $no = 1;
          foreach ($pesanan as $row) {
          ?>
            <td><?= $no++ ?></td>
            <td><?= $row['tanggal'] ?></td>
            <td><?= $row['total'] ?></td>
            <td><?= $row['pelanggan_id'] ?></td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>

</div>
</div>