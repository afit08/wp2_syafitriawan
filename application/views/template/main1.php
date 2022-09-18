<div class="">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url(); ?>vendor/image/slide/slide1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url(); ?>vendor/image/slide/slide2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url(); ?>vendor/image/slide/slide3.jpg" class="d-block w-100">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container">
        <table class="table">
            <thead>
                <div class="row mt-4">
                    <div class="col-lg-4 mb-2">
                        <h4 class="font-weight-bold" style="font-size: 28px">Kategori</h4>
                    </div>
                </div>
                <tr>
                    <th class="col mr-3">
                        <a href="<?php echo base_url() ?>kategori/foods_and_drinks">
                            <img href="" style="width: 255px; height: 220px" src="<?php echo base_url('vendor/image/kategori/foods.png') ?>">
                        </a>
                    </th>
                    <th class="col mr-3">
                        <a href="<?php echo base_url() ?>kategori/fruits">
                            <img style="width: 255px; height: 220px" src="<?php echo base_url('vendor/image/kategori/fruit.png') ?>">
                        </a>
                    </th>
                    <th class="col mr-3">
                        <a href="<?php echo base_url() ?>kategori/home_living">
                            <img style="width: 255px; height: 220px" src="<?php echo base_url('vendor/image/kategori/home.png') ?>">
                        </a>
                    </th>
                    <th class="col mr-3">
                        <a href="<?php echo base_url() ?>kategori/medical">
                            <img style="width: 255px; height: 220px" src="<?php echo base_url('vendor/image/kategori/medical.png') ?>">
                        </a>
                    </th>
                </tr>
            </thead>
        </table>
    </div>

    <h4 class="text-center font-weight-bold m-4" style="font-size: 30px">PRODUK TERBARU</h4>
    <div class="col-md-12">
        <div class="container-fluid">
            <div class="row mx-5 text-center">

                <?php foreach ($barang as $brg) : ?>
                    <div class="card mr-2 ml-4 mt-3" style="width: 16rem;">
                        <img style="width: 255px; height: 200px" src="<?php echo base_url() . '/vendor/image/' . $brg->gambar ?>" class="card-img-top">
                        <div class="card-body bg-light">
                            <h5 class="card-title mb-2"><?php echo $brg->nama_brg ?></h5>
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
</div>