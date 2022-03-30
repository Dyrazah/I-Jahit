<div class="content">
    <div class="wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Penilaian</h4>
                    </div>
                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>No</th>
                                    <th>Id_Transaksi</th>
                                    <th>Komentar</th>
                                    <th>Rating</th>
                                    <th>Foto Review</th>
                                </thead>
                                <tbody>
                                <?php
                                $no = 1;
                                foreach ($penilaian as $row): ?>
                                    <tr>
                                        <th><?= $no++ ?></th>
                                        <td><?= $row->id_transaksi?></td>
                                        <td><?= $row->komentar?></td>
                                        <td><?= $row->rating?></td>
                                        <td><?= $row->foto_review?></td>
                                    </tr>
                                <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>