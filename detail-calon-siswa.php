<?php
require_once 'config.php';
$a = $_GET['id'];
$sql = "SELECT * FROM siswa, tahun_ajar WHERE siswa.nisn='$a' AND siswa.id_tahunajar = tahun_ajar.id_tahunajar";
$sqlshow = mysqli_query($koneksi, $sql);
$show = mysqli_fetch_array($sqlshow);

require_once 'template/template-header.php'; ?>
<?php if (isset($_SESSION['user_type'])) { ?>

    <!-- Admin -->

    <?php if ($_SESSION['user_type'] == 'admin') { ?>
        <div id="main">
            <header class="col-2 mb-3">
                <a href="#" class="burger-btn d-block d-xl-none"><i class="bi bi-justify fs-3"></i></a>
            </header>
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Info Calon Siswa</h3>
                        <p class="text-subtitle text-muted"></p>
                    </div>
                    <div class="col-12 col-md-6 order-md-1 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="home.php">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="data-calon-siswa.php">Calon Siswa</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Info</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">

                    <div class="card-body">
                        <div class="row d-flex align-items-center mb-5">
                            <div class="col-1">
                                <div class="avatar avatar-xl bg-primary">
                                    <span class="avatar-content"><?php echo inisial($show['nama_siswa']); ?></span>
                                </div>
                            </div>
                            <div class="col-11">
                                <h4><?php echo $show['nama_siswa']; ?></h4>
                                <p class="text-muted mb-0"><?php echo "NISN : " . $show['nisn']; ?></p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table mb-0 table-lg">
                                    <thead>
                                        <tr>
                                            <th colspan="3">
                                                <h5>Data Diri</h5>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>NISN</td>
                                            <td>:</td>
                                            <td><?php echo $show['nisn']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Siswa</td>
                                            <td>:</td>
                                            <td><?php echo $show['nama_siswa']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tempat Tanggal Lahir</td>
                                            <td>:</td>
                                            <td><?php echo $show['temp_lahir'] . ", " . date('d-m-Y', strtotime($show['tgl_lahir'])); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td><?php echo $show['alamat']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php require_once 'template/template-footer.php'; ?>
            <script>
                let jquery_datatable = $("#tabel-jurusan").DataTable()
            </script>
    <?php }
    if ($_SESSION['user_type'] == 'siswa') {
        echo "<script>document.location.href='access-denied.php';
		</script>";
    }
} ?>

    </body>

    </html>