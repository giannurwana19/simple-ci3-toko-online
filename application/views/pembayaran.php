<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "<h5>Total Belanja Anda : Rp. " . number_format($grand_total, 0, ',', '.');
                ?>
            </div>
            <br><br>

            <h3>Input Alamat Pengiriman dan Pembayaran</h3>
            <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">

                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label for="no_telp">No. Telepon</label>
                    <input type="text" id="no_telp" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label for="jasa">Jasa Pengiriman</label>
                    <select name="" id="jasa" class="form-control">
                        <option value="">JNE</option>
                        <option value="">TIKI</option>
                        <option value="">POS Indonesia</option>
                        <option value="">Gojek</option>
                        <option value="">Grab</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="bank">METODE PEMBAYARAN</label>
                    <select name="" id="bank" class="form-control">
                        <option value="">Bayar di Tempat</option>
                        <option value="">BCA - XXXXXXX</option>
                        <option value="">BNI - XXXXXXX</option>
                        <option value="">BRI - XXXXXXX</option>
                        <option value="">Mandiri - XXXXXXX</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-success mb-4">Pesan</button>


            </form>

            <?php
} else{
    echo "<h5>Keranjang Belanja Anda Masih Kosong";
}
            ?>

            



        </div>
        <div class="col-md-2"></div>
    </div>
</div>