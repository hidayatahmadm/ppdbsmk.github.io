<?php
require_once 'config.php';
require_once 'access-required.php';
?>
<!DOCTYPE html>
<html lang="ID">

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

    <?php
    function greeting()
    {
        date_default_timezone_set('Asia/Jakarta');
        $tanggal = date("G");
        if ($tanggal >= 0 and $tanggal <= 10) {
            echo "Selamat Pagi, ";
        } elseif ($tanggal >= 10 and $tanggal <= 15) {
            echo "Selamat Siang, ";
        } elseif ($tanggal >= 15 and $tanggal <= 18) {
            echo "Selamat Sore, ";
        } elseif ($tanggal >= 18 and $tanggal <= 23) {
            echo "Selamat Malam, ";
        } else {
            echo "Waktu Salah";
        }
    }
    ?>

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
    <?php if (isset($_SESSION['user_type'])) { ?>

        <!-- Navbar Admin -->

        <?php if ($_SESSION['user_type'] == 'admin') { ?>

            <div id="app">
                <div id="sidebar" class="active">
                    <div class="sidebar-wrapper active">
                        <div class="sidebar-header">
                            <div class="d-flex justify-content-between">
                                <div class="logo">
                                    <a href="home.php"><span>PPDB</span></a>
                                </div>
                                <div class="toggler">
                                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-menu">
                            <ul class="menu">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl bg-primary">
                                        <span class="avatar-content"><?php echo inisial(($_SESSION['login'])); ?></span>
                                    </div>
                                    <div class="ms-3 name">
                                        <a href="" class="h5 font-bold"><?php echo ($_SESSION['login']); ?></a>
                                        <h6 class="text-muted mb-0"><?php echo ($_SESSION['data_login']); ?></h6>
                                    </div>
                                </div>
                                <li class="sidebar-title text-muted">Menu</li>
                                <li class="sidebar-item">
                                    <a href="home.php" class='sidebar-link'>
                                        <i class="bi bi-grid-fill"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="data-tahun-ajaran.php" class='sidebar-link'>
                                        <i class="bi bi-calendar-fill"></i>
                                        <span>Tahun Ajaran</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="data-jurusan.php" class='sidebar-link'>
                                        <i class="bi bi-wrench"></i>
                                        <span>Jurusan</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="data-calon-siswa.php" class='sidebar-link'>
                                        <i class="bi bi-people-fill"></i>
                                        <span>Data Calon Siswa</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="data-pendaftaran.php" class='sidebar-link'>
                                        <i class="bi bi-file-person-fill"></i>
                                        <span>Data Pendaftaran</span>
                                    </a>
                                </li>
                                <li class="sidebar-title text-muted">Lainnya</li>
                                <li class="sidebar-item">
                                    <a href="pengaturan.php" class="sidebar-link">
                                        <i class="bi bi-gear-fill"></i>
                                        <span>Pengaturan</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="javascript:logout()" class="sidebar-link text-danger" data-bs-toggle="modal" data-bs-target="#logout">
                                        <i class="text-danger bi bi-power"></i>
                                        <span>Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
                    </div>
                </div>
            <?php } ?>

            <!-- Navbar Siswa -->

            <?php if ($_SESSION['user_type'] == 'siswa') { ?>
                <div id="app">
                    <div id="sidebar" class="active">
                        <div class="sidebar-wrapper active">
                            <div class="sidebar-header">
                                <div class="d-flex justify-content-between">
                                    <div class="logo">
                                        <a href="home.php"><span>PPDB</span></a>
                                    </div>
                                    <div class="toggler">
                                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-menu">
                                <ul class="menu">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xl bg-primary">
                                            <span class="avatar-content"><?php echo inisial(($_SESSION['login'])); ?></span>
                                        </div>
                                        <div class="ms-3 name">
                                            <a href="" class="h5 font-bold"><?php echo ($_SESSION['login']); ?></a>
                                            <h6 class="text-muted mb-0">NISN. <?php echo ($_SESSION['data_login']); ?></h6>
                                        </div>
                                    </div>
                                    <li class="sidebar-title text-muted">Menu</li>
                                    <li class="sidebar-item">
                                        <a href="home.php" class='sidebar-link'>
                                            <i class="bi bi-grid-fill"></i>
                                            <span>Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="data-pendaftaran.php" class='sidebar-link'>
                                            <i class="bi bi-file-person-fill"></i>
                                            <span>Data Pendaftaran</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-title text-muted">Lainnya</li>
                                    <li class="sidebar-item">
                                        <a href="pengaturan.php" class="sidebar-link">
                                            <i class="bi bi-gear-fill"></i>
                                            <span>Pengaturan</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="javascript:logout()" class="sidebar-link text-danger" data-bs-toggle="modal" data-bs-target="#logout">
                                            <i class="text-danger bi bi-power"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
            <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="logoutLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="logoutLabel">Konfirmasi Logout</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="icon-80px text-center text-danger">
                                <span class="fa fa-power-off"></span>
                            </div>
                            <p class="text-center">Apa kamu yakin ingin logout?</p>
                        </div>
                        <div class="modal-footer">
                            <a href="" class="btn btn-light-secondary" data-bs-dismiss="modal">Batal</a>
                            <a href="logout.php" class="btn btn-danger">Logout</a>
                        </div>
                    </div>
                </div>
            </div>