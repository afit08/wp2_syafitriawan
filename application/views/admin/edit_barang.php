<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Edit Data Barang</h1>
        </div>

        <div class="card">
            <div class="card-body">
            <?php foreach ($barang as $brg) : ?>
            <form action="<?php echo base_url() . 'admin/data_barang/update' ?>" method="POST">
            <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="hidden" name="id_brg" class="form_control" value="<?php echo $brg->id_brg ?>">
                    <input type="text" name="nama_brg" class="form_control" value="<?php echo $brg->nama_brg ?>">
                </div>

                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan" class="form_control" value="<?php echo $brg->keterangan ?>">
                </div>

                <div class="form-group">
                    <label>Kategori</label>
                    <input type="text" name="kategori" class="form_control" value="<?php echo $brg->kategori ?>">
                </div>

                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" name="harga" class="form_control" value="<?php echo $brg->harga ?>">
                </div>

                <div class="form-group">
                    <label>Stok</label>
                    <input type="text" name="stok" class="form_control" value="<?php echo $brg->stok ?>">
                </div>

                <button type="reset" class="btn btn-danger btn-sm mt-3">Reset
                </button>
                <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan
                </button>
                </form>
                    </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
</div>