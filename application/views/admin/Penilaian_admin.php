<div class="content">
    <div class="wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Penilaian</h4>
                    </div>
                    
                    <div class="card-body">

                        <!-- Button trigger modal -->
                        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaltambah"><i class="fa fa-plus fa-sm"></i>
                            Tambah Data Penilaian
                        </button> -->

                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>No</th>
                                    <th>Id_Transaksi</th>
                                    <th>Komentar</th>
                                    <th>Rating</th>
                                    <th>Foto Review</th>
                                    <th>Aksi</th>
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
                                        <td><?= anchor('admin/Penilaian_admin/edit/' .$row->id_review, 
                                            '<div type="button" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></div>') ?>
                                        </td>
                                        <td><?= anchor('admin/Penilaian_admin/hapus/' .$row->id_review, 
                                            '<div type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
                                        </td>
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