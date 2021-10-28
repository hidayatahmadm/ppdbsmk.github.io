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
                        <h3>Data Tahun Ajaran</h3>
                        <p class="text-subtitle text-muted"></p>
                    </div>
                    <div class="col-12 col-md-6 order-md-1 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="home.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tahun Ajaran</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <a href="tambah-data-tahun-ajaran.php" class="btn btn-outline-success">Tambah</a>
                        <br><br>
                        <table class="table" id="tabel-tahun-ajaran">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT*FROM tahun_ajar");
                                while ($show = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $show['tahun_ajar']; ?></td>
                                        <td>
                                            <?php
                                            if ($show['status'] == 1) {
                                            ?>
                                                <span class="badge bg-success">Aktif</span>
                                            <?php } else { ?>
                                                <span class="badge bg-danger">Non-Aktif</span>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <a href="edit-data-tahun-ajaran.php?id=<?php echo $show['id_tahunajar']; ?>" class='btn icon btn-outline-primary btn-sm'><i class="bi bi-pencil-square"></i></a>
                                            <a href="hapus-data-tahun-ajaran.php?id=<?php echo $show['id_tahunajar']; ?>" class='btn icon btn-outline-danger btn-sm'><i class="bi bi-trash-fill"></i></a>
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
                let jquery_datatable = $("#tabel-tahun-ajaran").DataTable()
            </script>
    <?php }
    if ($_SESSION['user_type'] == 'siswa') {
        echo "<script>document.location.href='access-denied.php';
		</script>";
    }
} ?>