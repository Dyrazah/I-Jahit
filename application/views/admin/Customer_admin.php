<div class="content">
    <div class="wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Customer</h4>
                    </div>
                    
                    <div class="card-body">

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaltambah"><i class="fa fa-plus fa-sm"></i>
                            Tambah Data Customer
                        </button>

                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>No</th>
                                    <th>ID Customer</th>
                                    <th>Nama Lengkap</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                <?php
                                $no = 1;
                                foreach ($customer as $row): ?>
                                    <tr>
                                        <th><?= $no++?></th>
                                        <th><?= $row->id_user?></th>
                                        <td><?= $row->nama?></td>
                                        <td><?= $row->username?></td>
                                        <td><?= $row->email?></td>
                                        <td>
                                            <?= anchor('penjahit/Customer_penjahit'.$row->id_user, 
                                            '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?>
                                        </td>
                                        <td><?= anchor('admin/Customer_admin/hapus/' .$row->id_user, 
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
                    <form action="<?= base_url().'registrasi/index'?>" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                              <label>Nama Lengkap</label>
                              <input type="text" name="nama" class="form-control" placeholder="Nama lengkap" required>
                          </div>
                          <div class="form-group">
                              <label>Username</label>
                              <input type="text" name="username" class="form-control" placeholder="Username" required>
                          </div>
                          <div class="form-group">
                              <label>Email</label>
                              <input type="email" name="email" class="form-control" placeholder="Email">
                          </div>
                          <div class="form-group">
                              <label>Password</label>
                              <input type="password" name="password" class="form-control" placeholder="Password">
                          </div>
                          <div class="form-group">
                              <label>Konfirmasi Password</label>
                              <input type="password" name="konfirm_pass" class="form-control" placeholder="Konfirmasi Password">
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