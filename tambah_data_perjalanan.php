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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    Tambah Data | JourneyWeb
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
	<?php
		session_start();
		if($_SESSION['status']!="login"){
		header("Location:. ./index.php?pesan=belum_login");
		}
	?>
  
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('assets/img/sign.jpg'); background-size: 1400px 500px;">
      <span class="mask bg-gradient-dark opacity-3"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Hello!</h1>
            <p class="text-lead text-white">Use this amazing form to remember your trip every time you go, wishing you a safe journey!.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="row px-xl-5 px-sm-4 px-3">
              <div class="mt-2 position-relative text-center">
                <p class="text-sm font-weight-bold mb-2 text-secondary text-border d-inline z-index-2 bg-white px-3">
                  Silahkan Isi Data Anda!
                </p>
              </div>
            </div>
            <div class="card-body bg-gradient-success">
              <form role="form" action="data_aksi.php" method="post">
			  	      <div class="mb-3">
                  <input type="hidden" class="form-control" name="id">
                </div>
                <div class="mb-3">
				          <input type="hidden" class="form-control" placeholder="Kosongkan!!"<?php echo $_SESSION['nik']; ?>>
                </div>
                <div class="mb-3">
                  <input type="date" class="form-control" placeholder="Tanggal" aria-label="Tanggal" name="tanggal">
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Waktu" aria-label="Waktu" name="waktu">
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Lokasi" aria-label="Lokasi" name="lokasi">
                </div>
			        	<div class="mb-3">
                  <input type="text" class="form-control" placeholder="Suhu Tubuh" aria-label="Suhu Tubuh" name="suhu_tubuh">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Simpan</button>
                  <a href="tampil_data_perjalanan.php" class="text-white">kembali</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
      </div>
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> Soft by <a href="https://www.instagram.com/alvinwillian_/" class="text-grey fw-bold">Alvin Willian</a>.
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/argon-dashboard.min.js?v=2.0.0"></script>
</body>

</html>