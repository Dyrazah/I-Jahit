<div class="content">
    <div class="wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Detail Pesanan</h4>
                    </div>
                    
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>ID Produk</th>
                                    <th>Nama Produk</th>
                                    <th>Jumlah Pesanan</th>
                                    <th>Harga Satuan</th>
                                    <th>Sub Total</th>
                                </thead>
                                <tbody>
                                <?php
                                // $no = 1;
                                $total = 0;
                                foreach ($invoice as $row): 
                                    $subtotal = $row->jumlah * $row->harga;
                                    $total += $subtotal
                                ?>
                                    <tr>
                                        <td><?= $row->id_produk?></td>
                                        <td><?= $row->nama_produk?></td>
                                        <td><?= $row->jumlah?></td>
                                        <td>Rp <?= number_format($row->harga, 2,',','.')?></td>
                                        <td>Rp <?= number_format($subtotal, 2,',','.')?></td>
                                    </tr>
                                <?php endforeach ?>
                                    <tr>
                                        <th colspan="4" class="text-center">Total Harga</th>
                                        <td>
                                            Rp <?= number_format($total, 2,',','.')?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div align="right"><br>
                                <a href="<?= base_url('penjahit/Invoice_penjahit/index')?>">
                                <div class="btn btn-sm btn-secondary">Kembali</div></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>