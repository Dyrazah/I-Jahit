<div class="container mt-5">
  <div class="page-banner">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-md-6">
        <nav aria-label="Breadcrumb">
          <ul class="breadcrumb justify-content-center py-0 bg-transparent">
            <li class="breadcrumb-item"><a href="<?= base_url('customer/Dashboard_customer')?>">Home</a></li>
            <li class="breadcrumb-item active">Product</li>
          </ul>
        </nav>
        <h1 class="text-center">Product</h1>
      </div>
    </div>
  </div>
</div>

<main> 
    <!-- Layanan -->
    <div class="page-section">
        <div class="container">
            <div class="text-center">
                <h2 class="title-section"><span class="marked">Silahkan Pilih Jenis Layanan</span></h2>
                <div class="divider mx-auto"></div>
            </div>
            <div align="center">
              <a href="<?= base_url('customer/Kategori/Rombak')?>">
              <div class="btn btn-sm btn-primary">Rombak</div></a>
              <a href="<?= base_url('customer/Kategori/Potong')?>">
              <div class="btn btn-sm btn-primary">Potong</div></a>
              <a href="<?= base_url('customer/Kategori/Jahit')?>">
              <div class="btn btn-sm btn-primary">Jahit</div></a>
            </div>
        </div>
    </div>

    <!-- Product -->
    <div class="page-section">
      <div class="container">
        <div class="text-center">
          <h2 class="title-section"><span class="marked">Silahkan Pilih Jenis Produk</span></h2>
          <div class="divider mx-auto"></div>
        </div>


        <div class="row mt-5 text-center">
            <?php foreach ($potong as $row):?>
                <div class="col-lg-4 py-3">
                    <img src="<?= base_url() ?>assets/img/<?= $row->foto_produk?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row->nama_produk?></h5><br>
                            <p class="card-text">Rp <?= number_format($row->harga_produk, 2,',','.') ?> </p>
                            <?= anchor('customer/Produk_customer/tambah_ke_keranjang/' .$row->id_produk, 
                            '<div type="button" class="btn btn-primary">Tambah</div>') ?>
                        </div>
                </div>
            <?php endforeach ?>
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