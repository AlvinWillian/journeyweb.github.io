<!--
=========================================================
* Argon Dashboard 2 - v2.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php
    include "koneksi.php";
    session_start();
    if($_SESSION['status']!="login"){
        header("Location:. ./index.php?pesan=belum_login");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    Data Perjalanan | JourneyWeb
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/argon-dashboard.css?v=2.0.0" rel="stylesheet" />
</head>

<body class="bg-gradient-dark">
  <div class="min-height-300 position-absolute w-100" style="background-image: url('assets/img/signup.jpg'); background-size: 1440px 295px;"></div>
  <!-- <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    </div>
  </aside> -->
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 bg-gradient-success shadow-sm border-radius-xl" id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
      <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-dark" href="">
        JOURNEY WEB
      </a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center me-2 active font-weight-bolder" aria-current="page" href="index.php">
              <i class="fa fa-chart-pie opacity-6  me-1"></i>
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2 font-weight-bolder" href="tambah_data_perjalanan.php">
              <i class="fas fa-user-circle opacity-6  me-1"></i>
              Tambah Data
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2 font-weight-bolder" href="keluar.php">
              <i class="fas fa-key opacity-6  me-1"></i>
              Keluar
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4 bg-gradient-success">
            <div class="card-header pb-0">
              <h6>Data Perjalanan</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7">NO</th>
                      <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2">NIK</th>
                      <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7">Tanggal</th>
                      <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7">Waktu</th>
                      <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7">Lokasi</th>
                      <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7">Suhu Tubuh</th>
                    </tr>

                    <?php
                            include 'koneksi.php';
                            $no = 1;
                            $data = mysqli_query($koneksi,"select * from perjalanan where nik=$_SESSION[nik]");
                            while($d = mysqli_fetch_array($data)){
                            ?>

                            <tr>
                                <td>
                                  <div class="d-flex px-2 py-1">
                                    <?php echo $no++; ?>
                                  </div>
                                </td>

                                <td>
                                  <p class="text-xs font-weight-bold mb-0"><?php echo $d['nik']; ?></p>
                                </td>

                                <td class="align-middle text-center text-sm">
                                  <?php echo $d['tanggal']; ?>
                                </td>

                                <td class="align-middle text-center">
                                  <?php echo $d['waktu']; ?>
                                </td>

                                <td class="align-middle text-center">
                                  <?php echo $d['lokasi']; ?>
                                </td>

                                <td class="align-middle text-center">
                                  <?php echo $d['suhu_tubuh']; ?>
                                </td>
                            </tr>
                            
                            <?php
                                }
                            ?> 
                  </thead>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>