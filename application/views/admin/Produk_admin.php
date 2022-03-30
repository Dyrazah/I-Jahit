<div class="content">
    <div class="wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Jenis Produk</h4>
                    </div>
                    
                    <div class="card-body">

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaltambah"><i class="fa fa-plus fa-sm"></i>
                            Tambah Data Produk
                        </button>

                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>ID Layanan</th>
                                    <th>Harga</th>
                                    <th>Deskripsi</th>
                                    <th>Gambar</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                <?php
                                $no = 1;
                                foreach ($produk as $row): ?>
                                    <tr>
                                        <th><?= $no++ ?></th>
                                        <td><?= $row->nama_produk?></td>
                                        <td><?= $row->id_layanan?></td>
                                        <td><?= $row->harga_produk?></td>
                                        <td><?= $row->deskripsi_produk?></td>
                                        <td><img src="<?= base_url() ?>assets/img/<?= $row->foto_produk?>"></td>
                                        <td><?= $row->status_produk?></td>
                                        <td><?= anchor('admin/Produk_admin/edit/' .$row->id_produk, 
                                            '<div type="button" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></div>') ?>
                                        </td>
                                        <td><?= anchor('admin/Produk_admin/hapus/' .$row->id_produk, 
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
                      <h5 class="modal-title" id="modaltambahLabel">Tambah Data Produk</h5>
                  </div>
                  <div class="modal-body">
                    <form action="<?= base_url(). 'admin/Produk_admin/tambah_aksi'?>" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                              <label>Nama Produk</label>
                              <input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk" required>
                          </div>
                          <div class="form-group">
                              <label>Harga Produk</label>
                              <input type="text" name="harga_produk" class="form-control" placeholder="RP 000.000" required>
                          </div>
                          <div class="form-group">
                              <label>Deskripsi Produk</label>
                              <input type="text" name="deskripsi_produk" class="form-control" placeholder="Deskripsi">
                          </div>
                          <div class="form-group">
                              <label>Status Produk</label>
                              <select class="form-control" name="status_produk" id="status_produk">
                                <option selected disabled>Pilih Status Produk</option>
                                <option>Tersedia</option>
                                <option>Tidak Tersedia</option>
                              </select>
                          </div>
                          <div>
                              <input type="file" name="foto_produk" class="form-control" required>
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