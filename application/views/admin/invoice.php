<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id invoice</th>
            <th>Nama Pemesanan</th>
            <th>Alamat Pengiriman</th>
            <th>tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
        </tr>

        <?php foreach ($invoice as $inv) : ?>
            <tr>
                <td><?php echo $inv->id ?></td>
                <td><?php echo $inv->nama ?></td>
                <td><?php echo $inv->alamat ?></td>
                <td><?php echo $inv->tgl_pesan ?></td>
                <td><?php echo $inv->batas_bayar ?></td>
                </td>
            </tr>
 
        <?php endforeach; ?>

    </table>
</div>