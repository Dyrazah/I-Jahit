<div class="content">
    <div class="wrapper">
        <h3>EDIT PRODUK</h3>
        <?php foreach($produk as $row) : ?>
                <form action="<?= base_url(). 'admin/Produk_admin/update'?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="hidden" name="id_produk" class="form-control" value="<?= $row->id_produk ?>" required>
                        <input type="text" name="nama_produk" class="form-control" value="<?= $row->nama_produk ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Harga Produk</label>
                        <input type="text" name="harga_produk" class="form-control" value="<?= $row->harga_produk ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Produk</label>
                        <input type="text" name="deskripsi_produk" class="form-control" value="<?= $row->deskripsi_produk ?>">
                    </div>
                    <div class="form-group">
                        <label>Status Produk</label>
                        <select class="form-control" name="status_produk" id="status_produk">
                            <option selected disabled>Pilih Status Produk</option>
                            <option>Tersedia</option>
                            <option>Tidak Tersedia</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
        <?php endforeach; ?>
    </div>
</div>