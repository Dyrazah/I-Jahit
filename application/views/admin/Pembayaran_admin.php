<div class="content">
    <div class="wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Pembayaran</h4>
                    </div>
                    
                    <div class="card-body">

                        <!-- Button trigger modal -->
                        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaltambah"><i class="fa fa-plus fa-sm"></i>
                            Tambah Data Pembayaran
                        </button> -->

                        <!-- Button trigger modal -->
                        <a class="btn btn-danger" href="<?= base_url('admin/Pembayaran_admin/print_pembayaran')?>"><i class="fa fa-print"></i> Print</a>

                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>No</th>
                                    <th>Nama Pemilik Rekening</th>
                                    <th>Bukti Pembayaran</th>
                                    <th>Keterangan</th>
                                    <th>Status Pembayaran</th>
                                    <th>Status Pesanan</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                <?php
                                $no = 1;
                                foreach ($pembayaran as $row): ?>
                                    <tr>
                                        <th><?= $no++ ?></th>
                                        <td><?= $row->nama_pemilik_rek?></td>
                                        <td><img src="<?= base_url() ?>assets/bukti_pembayaran/<?= $row->bukti_pembayaran?>" height="100" width="70"></td>
                                        <td><?= $row->keterangan?></td>
                                        <td><button type="button" class="btn btn-success"><?= $row->status_pembayaran?></button></td>
                                        <td><button type="button" class="btn btn-success"><?= $row->status_pesanan?></button></td>
                                        <td><?= anchor('admin/Pembayaran_admin/edit/' .$row->id_pembayaran, 
                                            '<div type="button" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></div>') ?>
                                            <?= anchor('admin/Pembayaran_admin/hapus/' .$row->id_pembayaran, 
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

      <!-- Modal -->
      <div class="modal fade" id="modaltambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modaltambahLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="modaltambahLabel">Tambah Data Layanan</h5>
                  </div>
                  <div class="modal-body">
                    <form action="<?= base_url(). 'admin/Layanan_admin/tambah_aksi'?>" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                              <label>Nama Layanan</label>
                              <input type="text" name="nama_layanan" class="form-control" placeholder="Nama Layanan" required>
                          </div>
                          <div class="form-group">
                              <label>Deskripsi Layanan</label>
                              <input type="text" name="deskripsi_layanan" class="form-control" placeholder="Deskripsi Layanan">
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                              <button type="submit"class="btn btn-primary">Submit</button>
                          </div>
                    </form>
                </div>
              </div>
          </div>
      </div>