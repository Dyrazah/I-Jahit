<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="<?= base_url('penjahit/Dashboard_penjahit')?>" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="<?= base_url() ?>assets/img/logo_jahitin.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="profil_admin.php.php" class="simple-text logo-normal">
          Penjahit
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active">
            <a href="<?= base_url('penjahit/Dashboard_penjahit')?>">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="<?= base_url('penjahit/Invoice_penjahit')?>">
              <i class="nc-icon nc-paper"></i>
              <p>Data Invoice</p>
            </a>
          </li>
          <li>
            <a href="<?= base_url('penjahit/Pembayaran_penjahit')?>">
              <i class="nc-icon nc-paper"></i>
              <p>Data Pembayaran</p>
            </a>
          </li>
          <li>
            <a href="<?= base_url('penjahit/Customer_penjahit/customer')?>">
              <i class="nc-icon nc-single-02"></i>
              <p>Data Customer</p>
            </a>
          </li>
          <li>
            <a href="<?= base_url('penjahit/Penilaian_penjahit')?>">
              <i class="nc-icon nc-satisfied"></i>
              <p>Data Penilaian</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">

      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">JAHIT.IN</a>
          </div>
          
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <?php if($this->session->userdata('username')){?>
                <li class=" ml-2"><div>Selamat Datang <?= $this->session->userdata('username')?></div></li>
                <li class="ml-2"><?php echo anchor('auth/logout','Logout')?></li>
              <?php } else { ?>
                <li class="ml-2"><?php echo anchor('auth/login','Login')?></li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->