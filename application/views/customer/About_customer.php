<div class="container mt-5">
  <div class="page-banner">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-md-6">
        <nav aria-label="Breadcrumb">
          <ul class="breadcrumb justify-content-center py-0 bg-transparent">
            <li class="breadcrumb-item"><a href="<?= base_url('customer/Dashboard_customer')?>">Home</a></li>
            <li class="breadcrumb-item active">About</li>
          </ul>
        </nav>
        <h1 class="text-center">About</h1>
      </div>
    </div>
  </div>
</div>

<main>
    <div class="page-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3">
            <div class="img-fluid text-center">
              <img src="<?= base_url()?>assets/img/bg_image_2.png" alt="">
            </div>
          </div>
          <div class="col-lg-6 py-3 pr-lg-5">
            <h2 class="title-section">Selamat Datang Di <span class="marked">Jahit.In</span></h2>
            <div class="divider"></div>
            <p>Jahit.In adalah sebuah aplikasi yang menjembatani antara penjahit dengan customer. 
                Dengan berbagai fitur yang ada kami berharap jahit.in dapat memfasilitasi berbagai kebutuhan pengguna.</p>
            <a href="<?= base_url('customer/Produk_customer')?>" class="btn btn-primary">Product</a>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
  
    <!-- Testimonials -->
    <div class="page-section bg-light">
      <div class="container">
        
        <div class="owl-carousel" id="testimonials">
          <div class="item">
            <div class="row align-items-center">
              <div class="col-md-6 py-3">
                <div class="testi-image">
                  <img src="<?= base_url()?>assets/img/ijah.jpg" alt="">
                </div>
              </div>
              <div class="col-md-6 py-3">
                <div class="testi-content">
                  <p>Necessitatibus ipsum magni accusantium consequatur delectus a repudiandae nemo quisquam dolorum itaque, tenetur, esse optio eveniet beatae explicabo sapiente quo.</p>
                  <div class="entry-footer">
                    <strong>Zahra Nurdyani</strong> &mdash; <span class="text-grey">CEO Jahit.In</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <div class="item">
            <div class="row align-items-center">
              <div class="col-md-6 py-3">
                <div class="testi-image">
                  <img src="<?= base_url()?>assets/img/ijah.jpg" alt="">
                </div>
              </div>
              <div class="col-md-6 py-3">
                <div class="testi-content">
                  <p>Repudiandae vero assumenda sequi labore ipsum eos ducimus provident a nam vitae et, dolorum temporibus inventore quaerat consectetur quos! Animi, qui ratione?</p>
                  <div class="entry-footer">
                    <strong>Zahra Nurdyani</strong> &mdash; <span class="text-grey">CEO Jahit.In</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->

    <div class="page-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 py-3">
            <div class="card-blog">
              <div class="header">
                <div class="avatar">
                  <img src="../assets/img/person/person_1.jpg" alt="">
                </div>
                <div class="entry-footer">
                  <div class="post-author">Sam Newman</div>
                  <a href="#" class="post-date">23 Apr 2021</a>
                </div>
              </div>
              <div class="body">
                <div class="post-title"><a href="blog-single.html">Terima Kasih Jahit.In</a></div>
                <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
              </div>
              <div class="footer">
                <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 py-3">
            <div class="card-blog">
              <div class="header">
                <div class="avatar">
                  <img src="../assets/img/person/person_2.jpg" alt="">
                </div>
                <div class="entry-footer">
                  <div class="post-author">Muhammad Peter</div>
                  <a href="#" class="post-date">23 Apr 2021</a>
                </div>
              </div>
              <div class="body">
                <div class="post-title"><a href="blog-single.html">Good Job !!!</a></div>
                <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
              </div>
              <div class="footer">
                <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 py-3">
            <div class="card-blog">
              <div class="header">
                <div class="avatar">
                  <img src="../assets/img/person/person_3.jpg" alt="">
                </div>
                <div class="entry-footer">
                  <div class="post-author">Tuti Zendana</div>
                  <a href="#" class="post-date">23 Apr 2021</a>
                </div>
              </div>
              <div class="body">
                <div class="post-title"><a href="blog-single.html">Alus Pisan !!!</a></div>
                <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
              </div>
              <div class="footer">
                <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
              </div>
            </div>
          </div>

          

          <div class="col-12 mt-5">
            <nav aria-label="Page Navigation">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div>

        </div>
  
      </div>
    </div>
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
            <li><a href="order_customer.php">Order</a></li>
            <li><a href="layanan_customer.php">Layanan</a></li>
            <li><a href="produk_customer.php">Product</a></li>
            <li><a href="about_customer.php">Tentang Kami</a></li>
            <li><a href="profil_customer.php">Profil</a></li>
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