<div class="container-fluid mb-5">
    <div class="row mt-5">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success mt-5">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "<h5>Total Belanja Anda : Rp. " . number_format($grand_total, 0, ',', '.');
                }
                ?>
            </div><br><br>
            <h3>Input Alamat Pengiriman dan Pembayaran</h3>
            <form method="post" action="<?php echo base_url() ?>home/proses_pesanan">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>No.telepon</label>
                    <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select class="form-control">
                        <option>JNE</option>
                        <option>J&T</option>
                        <option>GOJEK</option>
                        <option>GRAB</option>
                        <option>Ninja Express</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Pilih BANK</label>
                    <select class="form-control">
                        <option>BCA - XXXXXXXX</option>
                        <option>BNI - XXXXXXXX</option>
                        <option>BRI - XXXXXXXX</option>
                        <option>MANDIRI - XXXXXXXX</option>
                        <option>Ninja Express</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>