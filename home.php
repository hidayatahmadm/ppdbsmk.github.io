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
                    <div class="col-12 col-md-6 order-md-1">
                        <h3>Dashboard</h3>
                        <p class="text-subtitle text-muted"><?php echo greeting() . " " . ($_SESSION['login']); ?></p>
                    </div>
                </div>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-12">
                        <div class="card">
                            <div class="card-body px-3 py-4">
                                <h5 class="text-muted font-semibold">Selamat Datang</h5><?php echo ($_SESSION['login']); ?><h6></h6>
                            </div>
                        </div>
                    </div>
                </section>
            <?php } ?>

            <!-- Navbar Siswa -->

            <?php if ($_SESSION['user_type'] == 'siswa') { ?>
                <div id="main">
                    <header class="col-2 mb-3">
                        <a href="#" class="burger-btn d-block d-xl-none"><i class="bi bi-justify fs-3"></i></a>
                    </header>
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1">
                                <h3>Dashboard</h3>
                                <p class="text-subtitle text-muted"><?php echo greeting() . " " . ($_SESSION['login']); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="page-content">
                        <section class="row">
                            <div class="col-12 col-lg-12">
                                <div class="card">
                                    <div class="card-body px-3 py-4">
                                        <h5 class="text-muted font-semibold">Selamat Datang</h5><?php echo ($_SESSION['login']); ?><h6></h6>
                                    </div>
                                </div>
                            </div>
                        </section>
                <?php }
        } ?>
                <?php require_once 'template/template-footer.php'; ?>