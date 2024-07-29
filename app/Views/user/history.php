<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>History</title>
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
        <a class="nav-link collapsed" href="<?= base_url('user') ?>">
          <i class="bi bi-check2-square"></i>
          <span>Sewa PS</span>
        </a>
      </li><!-- End Blank Page Nav -->

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('history') ?>">
          <i class="bi bi-clock"></i>
          <span>History</span>
        </a>
      </li><!-- End Pinjam Nav -->

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1 align="center">History</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col">

          <div class="card">
            <div class="card-body">
              <div class="card-body">
                <h5 class="card-title"></h5>

                <!-- Table with stripped rows -->
                <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                  <div class="datatable-top">
                    <div class="datatable-dropdown">
                      <label>
                        <select class="datatable-selector" name="per-page">
                          <option value="5" selected="">5</option>
                          <option value="10">10</option>
                          <option value="15">15</option>
                          <option value="-1">All</option>
                        </select> entries per page
                      </label>
                    </div>
                    <div class="datatable-search">
                      <input class="datatable-input" placeholder="Search..." type="search" name="search" title="Search within table">
                    </div>
                  </div>
                  <div class="datatable-container">
                    <table class="table datatable datatable-table">
                      <thead>
                        <tr>
                          <th data-sortable="true" style="width: 4.821541710665258%;"><button class="datatable-sorter">
                              <b>#</b>
                            </button></th>
                          <th data-sortable="true" style="width: 35.186906019007392%;"><button class="datatable-sorter">Name</button></th>
                          <th data-sortable="true" style="width: 15.511087645195353%;"><button class="datatable-sorter">Status</button></th>
                          <th data-format="YYYY/DD/MM" data-sortable="true" data-type="date" style="width: 16.89545934530095%;"><button class="datatable-sorter">Start Date</button></th>
                          <th data-format="YYYY/DD/MM" data-sortable="true" data-type="date" style="width: 16.89545934530095%;"><button class="datatable-sorter">End Date</button></th>
                          <th data-sortable="true" style="width: 15.585005279831044%;"><button class="datatable-sorter">Description</button></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr data-index="0">
                          <td>1</td>
                          <td>Brandon Jacob</td>
                          <td><button type="button" class="btn btn-outline-secondary">Completed</button></td>
                          <td>2005/02/11</td>
                          <td>2005/02/11</td>
                          <td>Playstation5 + 2 Controllers</td>
                        </tr>
                        <tr data-index="1">
                          <td>2</td>
                          <td>Bridie Kessler</td>
                          <td><button type="button" class="btn btn-outline-secondary">Completed</button></td>
                          <td>1999/04/07</td>
                          <td>1999/04/07</td>
                          <td>Playstation5 + 2 Controllers</td>
                        </tr>
                        <tr data-index="2">
                          <td>3</td>
                          <td>Ashleigh Langosh</td>
                          <td><button type="button" class="btn btn-outline-secondary">Completed</button></td>
                          <td>2005/09/08</td>
                          <td>2005/09/08</td>
                          <td>Playstation5 + 2 Controllers</td>
                        </tr>
                        <tr data-index="3">
                          <td>4</td>
                          <td>Angus Grady</td>
                          <td><button type="button" class="btn btn-outline-secondary">Completed</button></td>
                          <td>2009/29/11</td>
                          <td>2009/29/11</td>
                          <td>Playstation5 + 2 Controllers</td>
                        </tr>
                        <tr data-index="4">
                          <td>5</td>
                          <td>Raheem Lehner</td>
                          <td><button type="button" class="btn btn-outline-secondary">Completed</button></td>
                          <td>2006/11/09</td>
                          <td>2006/11/09</td>
                          <td>Playstation5 + 2 Controllers</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="datatable-bottom">
                    <div class="datatable-info">Showing 1 to 5 of 100 entries</div>
                    <nav class="datatable-pagination">
                      <ul class="datatable-pagination-list">
                        <li class="datatable-pagination-list-item datatable-hidden datatable-disabled"><button data-page="1" class="datatable-pagination-list-item-link" aria-label="Page 1">‹</button></li>
                        <li class="datatable-pagination-list-item datatable-active"><button data-page="1" class="datatable-pagination-list-item-link" aria-label="Page 1">1</button></li>
                        <li class="datatable-pagination-list-item"><button data-page="2" class="datatable-pagination-list-item-link" aria-label="Page 2">2</button></li>
                        <li class="datatable-pagination-list-item"><button data-page="3" class="datatable-pagination-list-item-link" aria-label="Page 3">3</button></li>
                        <li class="datatable-pagination-list-item"><button data-page="4" class="datatable-pagination-list-item-link" aria-label="Page 4">4</button></li>
                        <li class="datatable-pagination-list-item"><button data-page="5" class="datatable-pagination-list-item-link" aria-label="Page 5">5</button></li>
                        <li class="datatable-pagination-list-item"><button data-page="6" class="datatable-pagination-list-item-link" aria-label="Page 6">6</button></li>
                        <li class="datatable-pagination-list-item"><button data-page="7" class="datatable-pagination-list-item-link" aria-label="Page 7">7</button></li>
                        <li class="datatable-pagination-list-item datatable-ellipsis datatable-disabled"><button class="datatable-pagination-list-item-link">…</button></li>
                        <li class="datatable-pagination-list-item"><button data-page="10" class="datatable-pagination-list-item-link" aria-label="Page 10">10</button></li>
                        <li class="datatable-pagination-list-item"><button data-page="2" class="datatable-pagination-list-item-link" aria-label="Page 2">›</button></li>
                      </ul>
                    </nav>
                  </div>
                </div>
                <!-- End Table with stripped rows -->

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