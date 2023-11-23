<div class="container-fluid">
  <h4>Detail Pesanan <div class="btn btn-sm btn-success">No Invoice :
      <?= $invoice->id ?>
    </div>
  </h4>
  <table class="table table-bordered table-hover table-stripped">
    <tr>
      <th>No</th>
      <th>Nama Produk</th>
      <th>Jumlah Produk</th>
      <th>Harga Satuan</th>
      <th>Subtotal</th>
    </tr>

    <?php foreach ($pesanan as $inv) :
      $subtotal = $inv->jumlah * $inv->harga;
      @$total += $subtotal; 
      ?>
    <tr>
      <td>
        <?= $inv->id_barang ?>
      </td>
      <td>
        <?= $inv->nama_barang ?>
      </td>
      <td>
        <?= $inv->jumlah ?>
      </td>
      <td>Rp.
        <?= number_format($inv->harga, 0, ',', '.') ?>
      </td>
      <td>Rp.
        <?= number_format($subtotal, 0, ',', '.') ?>
      </td>
    </tr>
    <?php endforeach; ?>
    <tr>
      <td colspan="4">
        Total
      </td>
      <td>Rp.
        <?= number_format($total, 0, ',', '.') ?>
      </td>
    </tr>
  </table>
</div>