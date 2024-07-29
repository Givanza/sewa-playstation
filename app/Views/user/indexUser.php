<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sewa</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
      <a href="index.html" class="logo d-flex align-items-center">
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
            <span class="d-none d-md-block dropdown-toggle ps-2">Hi, Dhika</span>
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
        <a class="nav-link " href="<?= base_url('user') ?>">
          <i class="bi bi-check2-square"></i>
          <span>Sewa PS</span>
        </a>
      </li><!-- End Blank Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('history') ?>">
          <i class="bi bi-clock"></i>
          <span>History</span>
        </a>
      </li><!-- End Pinjam Nav -->

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1 align="center">Sewa Playstation</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row" style="justify-content: center;">
        <div class="col-lg-5">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <!-- General Form Elements -->
              <form action="<?= base_url('payments') ?>" class="row g-3">
                <div class="col-12">
                  <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-12">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-12">
                    <input type="email" class="form-control">
                  </div>
                </div>
                <div class="col-12">
                  <label for="inputText" class="col-sm-2 col-form-label">Telephone</label>
                  <div class="col-sm-12">
                    <input type="telephone" class="form-control">
                  </div>
                </div>

                <fieldset class="col-12">
                  <legend class="col-form-label col-sm-2 pt-0"></legend>
                  <div class="col-sm-12">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="">
                      <label class="form-check-label" for="gridRadios1">
                        <b>Playstation 4</b><br>
                        <p style="color: grey; font-size: 15px;">Unit + 2 controllers</p>
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                      <label class="form-check-label" for="gridRadios2">
                      <b>Playstation 5</b><br>
                      <p style="color: grey; font-size: 15px;">Unit + 2 controllers</p>
                      </label>
                    </div>
                  </div>
                </fieldset>
                <div class="col-12">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="d-grid gap-2 mt-3">
                    <button type="submit" class="btn btn-dark" >Continue Payments</button>
                  </div>
                </div>
              </form><!-- End General Form Elements -->
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('vendor/apexcharts/apexcharts.min.js'); ?> "></script>
  <script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.bundle.min.js'); ?> "></script>
  <script src="<?php echo base_url('vendor/chart.js/chart.umd.js'); ?> "></script>
  <script src="<?php echo base_url('vendor/echarts/echarts.min.js'); ?> "></script>
  <script src="<?php echo base_url('vendor/quill/quill.js'); ?> "></script>
  <script src="<?php echo base_url('vendor/simple-datatables/simple-datatables.js'); ?> "></script>
  <script src="<?php echo base_url('vendor/tinymce/tinymce.min.js'); ?> "></script>
  <script src="<?php echo base_url('vendor/php-email-form/validate.js'); ?> "></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('js/main.js'); ?> "></script>

</body>

</html>