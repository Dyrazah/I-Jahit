<div class="content">
    <div class="wrapper">
        <h3>EDIT LAYANAN</h3>
        <?php foreach($layanan as $row) : ?>
                <form action="<?= base_url(). 'admin/Layanan_admin/update'?>" method="post">
                    <div class="form-group">
                        <label>Nama Layanan</label>
                        <input type="hidden" name="id_layanan" class="form-control" value="<?= $row->id_layanan ?>" required>
                        <input type="text" name="nama_layanan" class="form-control" value="<?= $row->nama_layanan ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Layanan</label>
                        <input type="text" name="deskripsi_layanan" class="form-control" value="<?= $row->deskripsi_layanan ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
        <?php endforeach; ?>
    </div>
</div>