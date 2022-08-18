<div class="container-fluid">
    <h3><i class="fas fa-edit"></i> EDIT DATA BARANG</h3>

    <?php foreach ($barang as $brg) : ?>
        <form action="<?php echo base_url() . 'admin/data_barang/update' ?>" method="action">
            <div class="form-group">
                <label for="nama_brg">NAMA BARANG</label>
                <input type="text" name="nama_brg" id="nama_brg" class="form-control" value="<?php echo $brg->nama_brg ?>">
            </div>
            <div class="form-group">
                <label for="keterangan">KETERANGAN</label>
                <input type="text" name="keterangan" id="keterangan" class="form-control" value="<?php echo $brg->keterangan ?>">
            </div>
            <div class="form-group">
                <label for="kategori">KATEGORI</label>
                <input type="hidden" name="id_brg" class="form-control" value="<?php echo $brg->id_brg ?>">
                <input type="text" name="kategori" id="kategori" class="form-control" value="<?php echo $brg->kategori ?>">
            </div>
            <div class="form-group">
                <label for="harga">HARGA</label>
                <input type="text" name="harga" id="harga" class="form-control" value="<?php echo $brg->harga ?>">
            </div>
            <div class="form-group">
                <label for="stock">STOCK</label>
                <input type="text" name="stock" id="stock" class="form-control" value="<?php echo $brg->stock ?>">
            </div>

            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>

        </form>
    <?php endforeach; ?>
</div>