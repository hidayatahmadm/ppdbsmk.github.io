<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="ID">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB SMK Negeri 1 Rao Selatan</title>
    <link href="https://api.fontshare.com/css?f[]=satoshi@300,400,500,700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.css"> -->
    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">
    <!-- DataTables -->
    <!-- <link rel="stylesheet" href="assets/vendors/jquery-datatables/jquery.dataTables.min.css"> -->
    <link rel="stylesheet" href="assets/vendors/jquery/jquery.min.js">
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/timeline.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/all.min.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">

    <?php
    function inisial($nama)
    {
        $arr = explode(' ', $nama);
        $singkatan = '';
        foreach ($arr as $kata) {
            $singkatan .= substr($kata, 0, 1);
        }
        return $singkatan;
    } ?>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold text-primary" href="#page-top">PPDB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#jurusan">Jurusan</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#galeri">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#tentang">Tentang</a></li>
                </ul>
                <a href="register.php" class="btn text-primary px-3 mb-2 mb-lg-0 me-lg-3">Daftar</a>
                <a href="login.php" class="btn btn-primary px-3 mb-2 mb-lg-0">Login</a>
            </div>
        </div>
    </nav>
    <!-- Mashead header-->
    <header class="masthead">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 mb-5">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <h1 class="display-1 lh-1 mb-4">PPDB<br>SMK Negeri 1 Rao Selatan</h1>
                        <p class="lead fw-normal text-muted mb-4">Selamat datang di Sistem PPDB SMK Negeri 1 Rao Selatan</p>
                        <a href="#caradaftar" class="btn text-primary py-3 px-4">Cara Mendaftar</a>
                        <a href="register.php" class="btn btn-primary py-3 px-4">Daftar Sekarang</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Masthead device mockup feature-->
                    <div class="masthead-device-mockup">
                        <img class="img-fluid" src="assets/images/samples/undraw_education_f8ru.svg" alt="" style="max-width: 80%; height:80%">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Quote/testimonial aside-->
    <!-- <aside class="text-center bg-gradient-primary-to-secondary">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xl-8">
                    <div class="h2 fs-1 text-white mb-4">"An intuitive solution to a common problem that we all face, wrapped up in a single app!"</div>
                    <img src="assets/img/tnw-logo.svg" alt="..." style="height: 3rem" />
                </div>
            </div>
        </div>
    </aside> -->
    <!-- App features section-->
    <section id="jurusan">
        <div class="container px-5">
            <h2 class="text-center font-alt mb-5">Pilihan Jurusan</h2>
            <div class="row gx-5">
                <?php
                $no = 1;
                $query = mysqli_query($koneksi, "SELECT*FROM jurusan");
                while ($show = mysqli_fetch_array($query)) {
                ?>
                    <div class="col-xl-4 col-md-6 col-sm-12 mb-5">
                        <div class="card h-100 bg-white">
                            <div class="card-body text-center">
                                <h2 class="display-6 mb-3 text-primary"><?php echo $show['id']; ?></h2>
                                <h4 class="font-alt mb-3"><?php echo $show['nama_jurusan']; ?></h4>
                                <p class="text-muted mb-3">Ready to use HTML/CSS device mockups, no Photoshop required!</p>
                            </div>
                            <a href="" class="btn btn-outline-primary py-3 px-4">Selengkapnya</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Basic features section-->
    <section id="caradaftar" class="masthead bg-light">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                <div class="col-lg-6 mb-5">
                    <div class="masthead-device-mockup">
                        <img class="img-fluid" src="assets/images/samples/undraw_fill_form_re_cwyf.svg" alt="" style="max-width: 80%; height:80%">
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0">
                        <h2 class="display-3 lh-1 mb-4">Bagaimana <br> cara mendaftar?</h2>
                        <p class="lead fw-normal text-muted mb-5 mb-lg-0">Berikut adalah cara pendaftaran bagi calon siswa baru</p>
                        <ul class="timeline text-muted text-justify mb-5">
                            <li>
                                <p>Silahkan klik <a href="register.php">daftar</a>. Kemudian isi data diri seperti NISN, Nama Lengkap, TTL, Jenis Kelamin, dan Pilihan Jurusan.</p>
                            </li>
                            <li>
                                <p>Silahkan <a href="login.php">login</a>. Untuk Username dan Password default-nya sama dengan NISN mu. Kamu juga bisa mengubah Password ketika sudah login ke dalam sistem.</p>
                            </li>
                            <li>
                                <p>Setelah itu silahkan upload berkas yang diperlukan seperti Ijazah, SKL, SKHUN, SKKB, Pas Foto (dalam format .jpg atau .pdf). Jangan lupa untuk memantau status pendaftaranmu.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="" class="masthead bg-white">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                <div class="col-lg-6 mb-5">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0">
                        <h2 class="display-4 lh-1 mb-4">
                            Cek
                            <br />
                            Status Pendaftaran
                        </h2>
                        <p class="lead fw-normal text-muted mb-4">Silahkan cek status pendaftaranmu disini</p>
                        <a class="btn btn-outline-primary py-3 px-4" href="login.php">Cek sekarang</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="masthead-device-mockup">
                        <img class="img-fluid" src="assets/images/samples/undraw_order_confirmed_re_g0if.svg" alt="" style="max-width: 80%; height:80%">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="galeri" class="masthead bg-light">
        <div class="container px-5">
            <h2 class="text-center font-alt mb-5">Galeri</h2>
            <div class="row gx-5">
                <div class="col-xl-4 col-md-6 col-sm-12 mb-5">
                    <div class="card h-100">
                        <img src="assets/images/bg/7x.jpg" class="card-img" alt="...">
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12 mb-5">
                    <div class="card h-100">
                        <img src="assets/images/bg/7x.jpg" class="card-img" alt="...">
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12 mb-5">
                    <div class="card h-100">
                        <img src="assets/images/bg/7x.jpg" class="card-img" alt="...">
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12 mb-5">
                    <div class="card h-100">
                        <img src="assets/images/bg/7x.jpg" class="card-img" alt="...">
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12 mb-5">
                    <div class="card h-100">
                        <img src="assets/images/bg/7x.jpg" class="card-img" alt="...">
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12 mb-5">
                    <div class="card h-100">
                        <img src="assets/images/bg/7x.jpg" class="card-img" alt="...">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- App badge section-->
    <section class="bg-gradient-primary-to-secondary" id="tentang">
        <div class="container px-5">
            <h2 class="text-left text-white font-alt mb-5">Tentang</h2>
            <div class="col-lg-8">
                <p class="text-white text-justify mb-5">SMK Negeri 1 Rao Selatan adalah salah satu satuan pendidikan dengan jenjang SMK di Nagari Tanjung Betung, Kec. Rao Selatan, Kab. Pasaman, Sumatera Barat. Dalam menjalankan kegiatannya, SMK Negeri 1 Rao Selatan berada di bawah naungan Kementerian Pendidikan dan Kebudayaan Republik Indonesia.</p>
                <div class="mb-5">
                    <a href="http://smkn1raoselatan.sch.id" class="btn btn-circle btn-outline-light"><i class="bi bi-globe2"></i></a>
                    <a href="mailto:smkn01raoselatan@gmail.com." class="btn btn-circle btn-outline-light"><i class="bi bi-envelope"></i></a>
                    <a href="" class="btn btn-circle btn-outline-light"><i class="bi bi-telephone"></i></a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="text-white-50 small text-center">
                    <div class="mb-2">2021 &copy; SMK Negeri 1 Rao Selatan</div>
                    <p>Crafted with <span class="text-danger"><i class="bi bi-heart-fill"></i></span> by Kelompok 2</span></p>
                </div>
            </div>
        </div>
    </section>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>