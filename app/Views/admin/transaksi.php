<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Transaksi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <style>
    .kanan_sedikit{
      position: relative;
      left: 3rem;
    }
  </style>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('vendor/quill/quill.snow.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('vendor/quill/quill.bubble.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('vendor/remixicon/remixicon.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('vendor/simple-datatables/style.css'); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('css/style.css'); ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/home" class="logo d-flex align-items-center">
        <img src="img/logo.png" alt="" style="margin-right: 10px; margin-left: 20px;">
        <div class="d-none d-lg-block">
          <span class="d-block">Nice</span>
          <span class="d-block">Playstation</span>
        </div>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>


    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Hi, Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('home') ?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Blank Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('pinjam') ?>">
          <i class="bi bi-clock"></i>
          <span>Pinjam</span>
        </a>
      </li><!-- End Pinjam Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('selesai') ?>">
          <i class="bi bi-check2-square"></i>
          <span>Selesai</span>
        </a>
      </li><!-- End Selesai Nav -->

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('transaksi') ?>">
          <i class="bi bi-clipboard"></i>
          <span>Data Transaksi</span>
        </a>
      </li><!-- End Data Transaksi Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <section class="section">
      <div class="row">
        <div class="col-12 mb-2">
          <div class="pagetitle kanan_sedikit">
              <h1>Data Transaksi</h1>
          </div>
          <div class="d-flex gap-5">
            <div class="entries-per-page ms-5">
            <label>
              <select name="entries-per-page">
                <option value="5">Day</option>
                <option value="10">Senin</option>
                <option value="15">Selasa</option>
                <option value="20">Rabu</option>
              </select>
              
            </label>
          </div>
          <div class="entries-per-page">
            <label>
              <select name="entries-per-page">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
              </select>
              entries per page
            </label>
          </div>
          <div class="add-members-btn">
            <button class="btn btn-outline-secondary"><i class="bi bi-download"></i> Export to excel</button>
          </div>
          </div>
        </div>
        <div class="col-12">
          <table class="table datatable">
            <thead>
              <tr>
                <th><b>#</b></th>
                <th><b>Name</b></th>
                <th>Status</th>
                <th>Email</th>
                <th>End Date</th>
                <th>Total Payment</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Brandon Jacob</td>
                <td><button class="btn btn-outline-secondary">Payment</button></td>
                <td>Brandon@gmail.com</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Bridie Kessler</td>
                <td><button class="btn btn-outline-secondary">Payment</button></td>
                <td>Bridie@gmail.com</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Ashleigh Langosh</td>
                <td><button class="btn btn-outline-secondary">Payment</button></td>
                <td>Langosh@gmail.com</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Angus Grady</td>
                <td><button class="btn btn-outline-secondary">Payment</button></td>
                <td>angus@gmail.com</td>
              </tr>
              <tr>
                <td>5</td>
                <td>Raheem Lehner</td>
                <td><button class="btn btn-outline-secondary">Payment</button></td>
                <td>Raheem@gmail.com</td>
              </tr>
            </tbody>
          </table>
          <div class="d-flex justify-content-between bold">
              <p>Total Pemasukan</p>
              <p class="text-bold">Rp.100.000.000</p>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Kelompok 3</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">kelompok 3</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('vendor/apexcharts/apexcharts.min.js'); ?> "></script>
  <script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.bundle.min.js'); ?> "></script>
  <script src="<?php echo base_url('vendor/chart.js/chart.umd.js'); ?> "></script>
  <script src="<?php echo base_url('vendor/echarts/echarts.min.js'); ?> "></script>
  <script src="<?php echo base_url('vendor/quill/quill.js'); ?> "></script>
  <!-- <script src="<?php echo base_url('vendor/simple-datatables/simple-datatables.js'); ?> "></script> -->
  <script src="<?php echo base_url('vendor/tinymce/tinymce.min.js'); ?> "></script>
  <script src="<?php echo base_url('vendor/php-email-form/validate.js'); ?> "></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('js/main.js'); ?> "></script>

</body>

</html>