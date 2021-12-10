<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT BARANG</h3>
    <?php foreach($barang as $brg):?>
        <form action="<?php echo base_url(). 'admin/data_barang/update'?>" method="POST">
        <div class="for-group">
            <label for="">NAMA</label>
            <input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->nama_brg?>">
        </div>
        <div class="for-group">
            <label for="">KETERANGAN</label>
            <input type="hidden" name="id_brg" class="form-control" value="<?php echo $brg->id_brg?>">
            <input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan?>">
        </div>
        <div class="for-group">
            <label for="">KATEGORI</label>
            <input type="text" name="kategori" class="form-control" value="<?php echo $brg->kategori?>">
        </div>
        <div class="for-group">
            <label for="">HARGA</label>
            <input type="text" name="harga" class="form-control" value="<?php echo $brg->harga?>">
        </div>
        <div class="for-group">
            <label for="">STOK</label>
            <input type="text" name="stok" class="form-control" value="<?php echo $brg->stok?>">
        </div>

        <button class="btn btn-sm btn-primary mt-2" type="submit">Save</button>
        </form>
    <?php endforeach;?>
</div>