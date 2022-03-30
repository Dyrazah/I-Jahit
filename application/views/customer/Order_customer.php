<br>
<div class="page-section">
  <div class="container">
    <h4 class="title-section">ORDER</h4>
    <div class="divider"></div>
    <div class="form-control py-2">
      <?php
      $grand_total = 0;
      if ($keranjang = $this->cart->contents())
      {
        foreach ($keranjang as $item)
        {
          $grand_total = $grand_total + $item['subtotal'];
        }
      echo "Total Bayar : Rp ".number_format($grand_total,2,',','.');     
      ?>
    </div>
    
    <form action="<?= base_url('customer/Produk_customer/proses_pesan/')?>" method="POST" enctype="multipart/form-data">
      <div class="row align-items-center">
        
        <div class="col-lg-6 py-3">
          <label><h6 class="title-section">Data Diri</h6></label>
          <div class="py-2">
            <input type="text" name="nama_pengorder" class="form-control" placeholder="Nama Lengkap">
          </div>
          <div class="py-2">
            <input type="text" name="nomorhp_pengorder" class="form-control" placeholder="Nomor Handphone">
          </div>
          <div class="py-2">
            <input type="email" name="email_pengorder" class="form-control" placeholder="example@gmail.com">
          </div>
          <div class="py-2">
            <input type="alamat" name="alamat_pengorder" class="form-control" placeholder="Alamat Lengkap">
          </div>
          <div class="py-2">
            <textarea rows="6" class="form-control" name="keterangan" placeholder="Keterangan"></textarea>
          </div>
        </div>
        
        <div class="col-lg-6 py-3"><br>
        <h4 class="title-section"></h4>
          <label><h6 class="title-section">Pengambilan Barang</h6></label>
          <div class="py-2">
          <select class="form-control" name="pengambilan" id="pengambilan">
            <option selected disabled>Pilih Metode Pengambilan</option>
            <option>Ambil Sendiri</option>
            <option>Antar</option>
          </select>
          </div>
          <div class="py-2">
            <input type="date" name="tgl_pengambilan" class="form-control" placeholder="Tanggal Pengambilan">
          </div><br>
          <label><h6 class="title-section">Pengiriman Barang</h6></label>
          <div class="py-2">
            <select class="form-control" name="pengiriman" id="pengiriman">
              <option selected disabled>Pilih Metode Pengiriman</option>
              <option>Ambil Sendiri</option>
              <option>Antar</option>
            </select>
          </div>
          <div class="py-2">
            <input type="date" name="tgl_pengiriman" class="form-control" placeholder="Tanggal Pengambilan">
          </div><br>
          <label><h6 class="title-section">Metode Pembayaran</h6></label>
          <div class="py-2">
            <select class="form-control" name="metode_pembayaran" id="metode_pembayaran">
              <option selected disabled>Pilih Metode Pembayaran</option>
              <option>Transfer Bank</option>
            </select>
          </div><br>
          <div align="right">
            <button type="submit" class="btn btn-secondary">Kembali</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
    </form>

    <?php
    } else 
      { 
        echo "Anda Belum Memilih";
      } 
    ?>

  </div> <!-- .container -->
</div> <!-- .page-section -->

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