<div class="container-fluid">
       <div class="row text-center">
              <?php foreach ($pakaian_pria as $brg) : ?>

                     <div class="card ml-3 mb-3" style="width: 16rem;">
                            <img src="<?php echo base_url() . '/uploads/' . $brg->gambar ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                   <h5 class="card-title mb-1"><?= $brg->nama_brg ?></h5>
                                   <small><?= $brg->keterangan ?></small><br>
                                   <span class="badge badge-pill badge-success mb-3">Rp. <?= $brg->harga ?></span>
                                   <a href="<?= base_url() . 'dashboard/tambah_ke_keranjang/' . $brg->id_brg ?>" class="btn btn-sm btn-primary mb-2">Tambah Ke Keranjang</a> 
                                   <a href="<?= base_url() . 'dashboard/detail/' . $brg->id_brg ?>" class="btn btn-sm btn-success">Detail</a>
                            </div>
                     </div>

              <?php endforeach; ?>
       </div>
</div>