
<div class="content">
    <div class="wrapper">
        <h3>EDIT STATUS INVOICE</h3>

        <?php foreach($invoice as $row) : ?>
                <form action="<?= base_url().'admin/Invoice_admin/update'?>" method="post">
                    <div class="form-group">
                        <label>Nama Pengorder</label>
                        <input type="hidden" name="id_pembayaran" class="form-control" value="<?= $row->id_invoice ?>">
                        <input type="text" class="form-control" value="<?= $row->nama_pengorder?>">
                    </div>
                    <label><h6 class="title-section">Status Pesanan</h6></label>
                    <div class="form-group">
                        <select class="form-control" name="status_pesanan" id="status_pesanan">
                            <option selected disabled>Status Pesanan</option>
                            <option>Pesanan Diproses</option>
                            <option>Pesanan Ditolak</option>
                            <option>Pesanan Pending</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
        <?php endforeach; ?>
    </div>
</div>