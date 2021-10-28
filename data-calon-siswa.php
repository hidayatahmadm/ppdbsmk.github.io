<?php require_once 'template/template-header.php'; ?>
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
                        <h3>Data Calon Siswa</h3>
                        <p class="text-subtitle text-muted"></p>
                    </div>
                    <div class="col-12 col-md-6 order-md-1 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="home.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Calon Siswa</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <a href="tambah-data-calon-siswa.php" class="btn btn-outline-success">Tambah</a>
                        <br><br>
                        <table class="table" id="tabel-jurusan">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>TTL</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Tahun Masuk</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT*FROM siswa, tahun_ajar WHERE siswa.id_tahunajar = tahun_ajar.id_tahunajar");
                                while ($show = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $show['nisn']; ?></td>
                                        <!-- <td>
                                            <div class="avatar avatar-lg bg-primary">
                                                <span class="avatar-content"><?php echo inisial($show['nama_siswa']); ?></span>
                                            </div>
                                        </td> -->
                                        <td>
                                            <?php echo $show['nama_siswa']; ?>
                                        </td>
                                        <td><?php echo $show['temp_lahir'] . ", " . date('d-m-Y', strtotime($show['tgl_lahir'])); ?></td>
                                        <td><?php
                                            if ($show['jenis_kelamin'] == 'L') {
                                                echo "Laki-laki";
                                            } else {
                                                echo "Perempuan";
                                            }
                                            ?></td>
                                        <td><?php echo $show['alamat']; ?></td>
                                        <td><?php echo $show['tahun_ajar']; ?></td>
                                        <td>
                                            <a href="detail-calon-siswa.php?id=<?php echo $show['nisn']; ?>" class='btn icon btn-outline-info btn-sm'><i class="bi bi-eye-fill"></i></a>
                                            <a href="edit-data-jurusan.php?id=<?php echo $show['nisn']; ?>" class='btn icon btn-outline-primary btn-sm'><i class="bi bi-pencil-square"></i></a>
                                            <a href="hapus-data-jurusan.php?id=<?php echo $show['nisn']; ?>" class='btn icon btn-outline-danger btn-sm'><i class="bi bi-trash-fill"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
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