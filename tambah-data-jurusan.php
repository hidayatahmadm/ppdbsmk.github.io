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
                        <h3>Tambah Data Jurusan</h3>
                        <p class="text-subtitle text-muted"></p>
                    </div>
                    <div class="col-12 col-md-6 order-md-1 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="home.php">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="data-jurusan.php">Jurusan</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Data Jurusan</h4>
                    </div>
                    <div class="card-body">

                        <form class="form form-vertical" method="POST" action="">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Kode Jurusan</label>
                                            <input type="text" id="" class="form-control" name="kodejurusan" placeholder="Kode Jurusan">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Nama Jurusan</label>
                                            <input type="text" id="" class="form-control" name="namajurusan" placeholder="Nama Jurusan">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 d-flex justify-content-end">
                                        <a href="javascript:inputconfirm()" class="btn btn-primary me-1 mb-1">Simpan</a>
                                        <!-- <button type="submit" class="btn btn-primary me-1 mb-1" name="submit">Simpan</button> -->
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                    <div class="modal fade" id="inputconfirm" tabindex="-1" role="dialog" aria-labelledby="inputconfirmLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="inputconfirmLabel">Konfirmasi Input Data</h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="icon-80px text-center text-primary">
                                                        <span class="fa fa-question"></span>
                                                    </div>
                                                    <p class="text-center">Apa kamu yakin ingin menambahkan data ini?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" name="submit" id="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="inputsuccess_jurusan" tabindex="-1" role="dialog" aria-labelledby="inputsuccess_jurusanLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="inputsuccess_jurusanLabel">Input Data Berhasil</h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="icon-80px text-center text-primary">
                                                        <span class="fa fa-check"></span>
                                                    </div>
                                                    <p class="text-center">Input data telah berhasil</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="" class="btn btn-light-secondary" data-bs-dismiss="modal">Batal</a>
                                                    <a href="data-jurusan.php" class="btn btn-primary">Selesai</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
    <?php
    if (isset($_POST['submit'])) {
        $a = $_POST['kodejurusan'];
        $b = $_POST['namajurusan'];

        $sqltambah = ("INSERT INTO jurusan (id, nama_jurusan)
                VALUES ('$a','$b') ");
        mysqli_query($koneksi, $sqltambah);

        echo "<script>document.location.href='javascript:inputsuccess_jurusan()';
      </script>";
    }
    ?>