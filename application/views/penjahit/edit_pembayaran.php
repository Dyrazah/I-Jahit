
<div class="content">
    <div class="wrapper">
        <h3>EDIT STATUS PEMBAYARAN</h3>

        <?php foreach($pembayaran as $row) : ?>
                <form action="<?= base_url(). 'penjahit/Pembayaran_penjahit/update'?>" method="post">
                    <div class="form-group">
                        <label>Nama Pemilik Rekening</label>
                        <input type="hidden" name="id_pembayaran" class="form-control" value="<?= $row->id_pembayaran ?>">
                        <input type="text" class="form-control" value="<?= $row->nama_pemilik_rek ?>">
                    </div>
                    <label><h6 class="title-section">Status Pembayaran</h6></label>
                    <!-- <div class="form-group">
                        <select class="form-control" name="status_pembayaran" id="status_pembayaran">
                            <option selected disabled>Status Pembayaran</option>
                            <option>Pembayaran Diterima</option>
                            <option>Pembayaran Gagal</option>
                            <option>Pending</option>
                        </select>
                    </div> -->
                    <div class="form-group">
                        <select class="form-control" name="status_pesanan" id="status_pembayaran">
                            <option selected disabled>Status Pesanan</option>
                            <option>Pesanan Diproses</option>
                            <option>Pesanan Ditolak</option>
                            <option>Pending</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
        <?php endforeach; ?>
    </div>
</div>