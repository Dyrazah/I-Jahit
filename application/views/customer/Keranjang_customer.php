<div class="container mt-5">
    <div class="page-banner">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-md-6">
          <nav aria-label="Breadcrumb">
            <ul class="breadcrumb justify-content-center py-0 bg-transparent">
              <li class="breadcrumb-item"><a href="<?= base_url('customer/Dashboard_customer')?>">Home</a></li>
              <li class="breadcrumb-item active">Keranjang</li>
            </ul>
          </nav>
          <h1 class="text-center">Keranjang</h1>
        </div>
      </div>
    </div>
</div>

<main>  
  <div class="page-section">
    <div class="container">
        <div class="text-center">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Harga</th>
                <th scope="col">Sub Total</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($this->cart->contents() as $items): ?>
                <tr>
                  <th scope="row"><?= $no++ ?></th>
                  <td><?= $items['name'] ?></td>
                  <td><?= $items['qty']?></td>
                  <td>Rp <?= number_format($items['price'], 2,',','.')?></td>
                  <td>Rp <?= number_format($items['subtotal'], 2,',','.')?></td>
                  <td>
                    <a href="<?= base_url('customer/Produk_customer/hapus_keranjang')?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
              <?php endforeach ?>
            <tr>
                <th colspan="4">Total Harga</th>
                <td>
                    Rp <?= number_format($this->cart->total(), 2,',','.')?>
                </td>
            </tr>
            </tbody>
          </table>

          <div align="right"><br>
              <a href="<?= base_url('customer/Produk_Customer')?>">
              <div class="btn btn-sm btn-secondary">Kembali</div></a>
              <a href="<?= base_url('customer/Produk_Customer/order')?>">
              <div class="btn btn-sm btn-primary">Pesan</div></a>
          </div>
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