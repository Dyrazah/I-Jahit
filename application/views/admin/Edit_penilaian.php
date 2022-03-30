<div class="content">
    <div class="wrapper">
        <h3>EDIT PENILAIAN</h3>
        <?php foreach($penilaian as $row) : ?>
                <form action="<?= base_url(). 'admin/Penilaian_admin/update'?>" method="post">
                    <div class="form-group">
                        <label>ID Transaksi</label>
                        <input type="hidden" name="id_review" class="form-control" value="<?= $row->id_review ?>" required>
                        <input type="text" name="id_transaksi" class="form-control" value="<?= $row->id_transaksi ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Komentar</label>
                        <input type="text" name="komentar" class="form-control" value="<?= $row->komentar ?>">
                    </div>
                    <div class="form-group">
                        <label>Rating</label>
                        <input type="text" name="rating" class="form-control" value="<?= $row->rating ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
        <?php endforeach; ?>
    </div>
</div>