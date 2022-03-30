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
    
      <div class="row align-items-center">

        <div class="col-lg-6 py-3">
          <label><h6 class="title-section">Pembayaran</h6></label>
            <?php
            echo form_open('customer/Pembayaran_customer/tambah_bayar');
            ?>
            <?php echo form_open_multipart('customer/Pembayaran_customer/tambah_bayar'); ?>
              <div class="py-2">
                  <input type="text" name="nama_pemilik_rek" placeholder="Nama Pemilik Rekening" class="form-control" required>
              </div>
              <div class="py-2">
                  <label><h6 class="title-section">Silahkan Upload Bukti Pembayaran</h6></label>
                  <input type="file" name="bukti_pembayaran" class="form-control" required>
              </div>
              <div class="py-2">
                  <textarea rows="6" class="form-control" name="keterangan" placeholder="Keterangan" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary rounded-pill mt-4">Submit</button>
            <?php echo form_close(); ?>
        </div>
        
        <div class="col-lg-6 py-3"><br>
        <h4 class="title-section"></h4>
          <label><h6 class="title-section">Silahkan Transfer Ke No Rekening Di Bawah Ini :</h6></label><br>
          <label><h6 class="text-primary">Bank Mandiri 5434-4382-3434 A/N Zahra Nurdyani</h6></label><br>
          <label><h5 class="title-section">Produk</h5></label>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Harga</th>
                <th scope="col">Sub Total</th>
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
        </div>
      </div>

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