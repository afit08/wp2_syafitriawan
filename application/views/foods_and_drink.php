<div class="col-md-10">
    <div class="container-fluid">
        <div class="row mx-auto text-center">

            <?php foreach ($foods_and_drinks as $brg) : ?>
                <div class="card mr-2 ml-3" style="width: 16rem;">
                    <img src="<?php echo base_url() . '/vendor/image/' . $brg->gambar ?>" class="card-img-top">
                    <div class="card-body bg-light">
                        <h5 class="card-title mb-2"><?php echo $brg->nama_brg ?></h5>
                        <small><?php echo $brg->keterangan ?></small><br>
                        <span class="badge badge-pill badge-success mb-3">Rp. <?php echo $brg->harga ?></span>
                        <?php echo anchor('home/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-sm btn-danger">Tambah ke Keranjang</div>') ?>
                        <?php echo anchor('home/detail/' . $brg->id_brg, '<div class="btn btn-sm btn-primary">Detail</div>') ?>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</div>
</div>