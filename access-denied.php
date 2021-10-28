<?php
require_once 'config.php';
require_once 'access-required.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB SMK Negeri 1 Rao Selatan</title>

    <link href="https://api.fontshare.com/css?f[]=satoshi@300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">
    <!-- DataTables -->
    <!-- <link rel="stylesheet" href="assets/vendors/jquery-datatables/jquery.dataTables.min.css"> -->
    <link rel="stylesheet" href="assets/vendors/jquery/jquery.min.js">
    <link rel="stylesheet" href="assets/vendors/jquery-datatables/jquery.dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="assets/vendors/fontawesome/all.min.css">
    <link rel="stylesheet" href="assets/css/pages/login.css">
    <style>
        table.dataTable td {
            padding: 15px 8px;
        }

        .fontawesome-icons .the-icon svg {
            font-size: 24px;
        }
    </style>
    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">

    <!-- INISIAL -->
    <?php
    function inisial($nama)
    {
        $arr = explode(' ', $nama);
        $singkatan = '';
        foreach ($arr as $kata) {
            $singkatan .= substr($kata, 0, 1);
        }
        return $singkatan;
    }
    ?>
</head>

<body>
    <div class="page login-page">
        <div class="container d-flex align-items-center">
            <div class="form-holder has-shadow">
                <div class="row">
                    <!-- <div class="col-lg-4">
						<div class="form d-flex align-items-center text-center">
							<div class="content text-center">
								<img src="public/image/logo.png" alt="logo" class="logo-login-150">
								<h4 class="text-center text-white">SISTEM INFORMASI NILAI SISWA</h4>
							</div>
						</div>
					</div> -->
                    <!-- <div class="col-lg-4 offset-lg-2">
						<div class="form d-flex align-items-center text-center">
							<div class="content text-center">
								<h4 class="text-center text-white">ERROR</h4>
								<div class="text-center text-white">
									<h1 class="text-center icon-150px">401</h1>
								</div>
								<h4 class="text-center text-white">AKSES DILARANG</h4>
							</div>
						</div>
					</div> -->

                    <div class="col-lg-12">
                        <div class="form d-flex align-items-center">
                            <div class="content text-center">
                                <img src="assets/images/bg/undraw_access_denied_re_awnf.svg" height="180px" class="mb-5">
                                <div class="text-center">
                                    <h1 class="text-center">Error <span class="text-primary"> 401</span></h1>
                                </div>
                                <p class="text-center">Kamu tidak memiliki hak untuk mengakses halaman ini.</p>
                                <br>
                                <a href="home.php" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="public/js/popper.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="public/js/bootstrap.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="public/js/jquery.mCustomScrollbar.concat.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="public/js/front.js" charset="utf-8"></script>
</body>

</html>