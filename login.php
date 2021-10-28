<!DOCTYPE html>
<html lang="ID">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB SMK Negeri 1 Rao Selatan</title>
    <link href="https://api.fontshare.com/css?f[]=satoshi@300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/pages/login.css">
</head>

<body>
    <div class="page login-page">
        <div class="container d-flex align-items-center">
            <div class="form-holder has-shadow">
                <div class="row">
                    <!-- Logo & Information Panel-->
                    <!-- <div class="col-lg-4 offset-lg-2">
                        <div class="form d-flex align-items-center">
                            <div class="content">
                                <h4 class="">SISTEM INFORMASI PPDB SMK NEGERI 1 RAO SELATAN</h4>
                            </div>
                        </div>
                    </div> -->
                    <!-- Form Panel    -->
                    <div class="col-lg-4 offset-lg-4 bg-white">
                        <div class="form d-flex align-items-center">
                            <div class="content">
                                <h3 class="mb-5">Login</h3>
                                <!-- <p class="small mb-5">Sistem Informasi PPDB SMK Negeri 1 Rao Selatan</p> -->
                                <form method="post" action="">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="login" onclick="validasi()" class="btn btn-primary">Login</button>
                                    </div>
                                </form>

                                <script type="text/javascript">
                                    function validasi() {

                                        x = document.getElementById('username').value;
                                        y = document.getElementById('password').value;

                                        if (x == "" && y == "") {
                                            alert("Username dan Password tidak boleh kosong");
                                        } else if (x == "") {
                                            alert("Username tidak boleh kosong");
                                        } else if (y == "") {
                                            alert("Password tidak boleh kosong");
                                        }
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="copyrights text-center">
                <p class="text-center">
                    2021 © SMK Negeri 1 Rao Selatan
                </p>
                <hr class="putih">
            </div> -->
        </div>
    </div>
</body>

</html>
<?php

session_start();
include 'config.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM siswa, administrator WHERE 
		nisn = '$username' AND pass_siswa = '$password' OR
		username = '$username' AND pass_admin = '$password'";
    $data  = mysqli_query($koneksi, $query);

    if ($a = mysqli_fetch_object($data)) {
        $name_s = $a->nama_siswa;
        $user_s = $a->nisn;
        $pass_s = $a->pass_siswa;

        $name_g = $a->nama_admin;
        $user_g = $a->username;
        $pass_g = $a->pass_admin;

        if ($username === $user_s and $password === $pass_s) {
            $_SESSION['login'] = $name_s;
            $_SESSION['data_login'] = $user_s;
            $_SESSION['user_type'] = 'siswa';
            header("location:home.php");
        } elseif ($username === $user_g and $password === $pass_g) {
            $_SESSION['login'] = $name_g;
            $_SESSION['data_login'] = $user_g;
            $_SESSION['user_type'] = 'admin';
            header("location:home.php");
        } else {
            header("location:login.php");
        }
    } else {
        header("location:login.php");
    }
}
?>