<div class="container mt-5">
      <div class="page-banner">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-md-6">
            <nav aria-label="Breadcrumb">
              <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                <li class="breadcrumb-item"><a href="home_customer.php">Home</a></li>
                <li class="breadcrumb-item active">Riwayat</li>
              </ul>
            </nav>
            <h1 class="text-center">Riwayat Transaksi</h1>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main>  
    <div class="page-section">
      <div class="container">
            <?php echo form_open('customer/cek_pesanan/search')?>
                <div class="row my-5">
                    <div class="col-md-10">
                        <input type="text" name="keyword" class="form-control" placeholder="Masukkan Nama Pengorder">
                    </div>

                    <div class="col md-2">
                        <button type="submit" class="btn btn-primary">Cek Pesanan</button>
                    </div>
                </div>
            <?php echo form_close() ?>

            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Lengkap</th>
                  <th>Keterangan</th>
                  <th>Status Pesanan</th>
                  <th>Status Pembayaran</th>
                </tr>
              </thead>
              <tbody>
              <?php
              $no = 1;
              foreach ($pembayaran as $row): ?>
                  <tr>
                      <th><?= $no++ ?></th>
                      <td><?= $row->nama_pemilik_rek?></td>
                      <td><?= $row->keterangan?></td>
                      <td><button type="button" class="btn btn-success"><?= $row->status_pembayaran?></button></td>
                      <td><button type="button" class="btn btn-success"><?= $row->status_pesanan?></button></td>
                  </tr>
              <?php endforeach ?>
              </tbody>
            </table>

            <!-- <table class="table">
              <thead>
                <tr>
                  <th>Status Pembayaran</th>
                  <th>Status Pesanan</th>
                </tr>
              </thead>
              <tbody>
              <?php
              foreach ($pembayaran as $row): ?>
                  <tr>
                      <td><button type="button" class="btn btn-success"><?= $row->status_pembayaran?></button></td>
                      <td><button type="button" class="btn btn-success"><?= $row->status_pesanan?></button></td>
                  </tr>
              <?php endforeach ?>
              </tbody>
            </table> -->
        </div>
  
      </div> <!-- .container -->
    </div> <!-- .page-section -->
  </main>

  <footer class="page-footer">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-3 py-3">
          <h3>Jahit.<span class="text-primary">In</span></h3>
          <p>Penyedia Jasa Penjahit Terbaik Untuk Anda</p>

          <p><a href="#" >jahitin@gmail.com</a></p>
          <p><a href="#">+62 878 8427 2060</a></p>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Quick Links</h5>
          <ul class="footer-menu">
            <li><a href="#">Order</a></li>
            <li><a href="#">Layanan</a></li>
            <li><a href="#">Product</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Profil</a></li>
          </ul>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6 py-2">
          <p id="copyright">&copy; 2021 Jahit.In</p>
        </div>
        <div class="col-sm-6 py-2 text-right">
          <div class="d-inline-block px-3">
            <a href="#">Credit</a>
          </div>
          <div class="d-inline-block px-3">
            <a href="#">License</a>
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </footer> <!-- .page-footer -->