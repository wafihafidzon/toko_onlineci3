<div class="container">
  <?php foreach ($barang as $brg) : ?>
  <form action="<?= base_url() . 'admin/data_barang/update'; ?>" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label>Nama Barang</label>
      <input type="hidden" name="id_brg" class="form-control" value="<?= $brg->id_brg; ?>">
      <input type="text" name="nama_brg" class="form-control" value="<?= $brg->nama_brg; ?>">
    </div>
    <div class="form-group">
      <label>Keterangan</label>
      <input type="text" name="keterangan" class="form-control" value="<?= $brg->keterangan; ?>">
    </div>
    <div class="form-group">
      <label>Kategori</label>
      <input type="text" name="kategori" class="form-control" value="<?= $brg->kategori; ?>">
    </div>
    <div class="form-group">
      <label>Harga</label>
      <input type="text" name="harga" class="form-control" value="<?= $brg->harga; ?>">
    </div>
    <div class="form-group">
      <label>Stok</label>
      <input type="text" name="stok" class="form-control" value="<?= $brg->stok; ?>">
    </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
<?php endforeach; ?>
</div>