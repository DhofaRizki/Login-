<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Daftar Anggota</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/img/paw-solid.svg" rel="icon">
  <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/vendor/aos/aos.css" rel="stylesheet">
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyResume
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<form method="post" action="<?=base_url('anggota/Save')?>">

        <div class="container">
            <img src="perpus.jpg" class="rounded-circle float-left" alt="">
            <h2 align="center" class="text"></h2>
            <h2 align="center" class="text">Sistem Informasi Pendaftaran</h2>
            <h2 align="center" class="text">Anggota Perpustakaan Online</h2>
        
        <div class="card-body" align="right">
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#submit">
                Submit
            </button>
                <div class="modal fade" id="submit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Done Yet?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div align="left" class="modal-body">
                        Are u sure want Submit this form??
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary"></input>
                    </div>
                    </div>
                </div>
                </div>

            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#reset">
                Reset
            </button>
                <div class="modal fade" id="reset" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Done Yet?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div align="left" class="modal-body">
                        Are u sure want Reset this form??
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="reset" class="btn btn-primary"></input>
                    </div>
                    </div>
                </div>
                </div>
        </div>

        
        <div class="card mb-3">
            <div class="card-header">IDENTITAS DIRI</div>
            <div class="card-body">

            <div class="form-group row">
                <label for="username" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-4">
                    <input type="text" name="username" class="form-control" id="form" placeholder=""required>
                </div>
            
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-4">
                    <input type="password" name="password" class="form-control" id="form" placeholder="" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="no.anggota" class="col-sm-2 col-form-label">No.Anggota</label>
                <div class="col-sm-4">
                    <input type="number" name="no_anggota" class="form-control" id="form" placeholder=""required>
                </div>
            </div>
            <div class="form-group row">
                <label for="no.identitas" class="col-sm-2 col-form-label">No.Identitas</label>
                <div class="col-sm-4">
                    <input type="number" name="no_identitas" class="form-control" id="form" placeholder=""required>
                </div>
            </div>
            <div class="form-group row">
                <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
                <div class="col-sm-8">
                    <select name="fakultas" class="form-control" id="form">
                        <option value="" disabled selected>-</option>
                        <option value="Kedokteran">Kedokteran</option>
                        <option value="Kehutanan">Kehutanan</option>
                        <option value="Hukum">Hukum</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_anggota" class="col-sm-2 col-form-label">Nama Anggota</label>
                <div class="col-sm-8">
                    <input type="text" name="nama_anggota" class="form-control" id="form" placeholder=""required>
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-3">
                    <input type="date" name="tanggal_lahir" class="form-control" id="form" placeholder=""required>
                </div>
            </div>
            <div class="form-group row">
                <label for="tipeanggota" class="col-sm-2 col-form-label">Tipe Anggota</label>
                <div class="col-sm-3">
                    <select name="tipe_anggota" class="form-control" id="form">
                        <option value="" disabled selected>-</option>
                        <option value="Reguler">Reguler</option>
                        <option value="Gold">Gold</option>
                        <option value="Platinum">Platinum</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="fakultas" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-3">
                    <select name="jenis_kelamin" class="form-control" id="form">
                        <option value="" disabled selected>-</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                <div class="col-sm-8">
                    <textarea name="alamat" class="form-control" id="form" rows="4" placeholder=""required></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="kodepos" class="col-sm-2 col-form-label">Kode Pos</label>
                <div class="col-sm-2">
                    <input type="number" name="kode_pos" class="form-control" id="form" placeholder=""required>
                </div>
            </div>
            <div class="form-group row">
                <label for="no.hp" class="col-sm-2 col-form-label">No. HP</label>
                <div class="col-sm-3">
                    <input type="number" name="no_hp" class="form-control" id="form" placeholder=""required>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Alamat Email</label>
                <div class="col-sm-4">
                    <input type="email" name="email" class="form-control" id="form" placeholder=""required>
                </div>
            </div>
            <div class="form-group row">
                <label for="ulangipassword" class="col-sm-2 col-form-label">Ulangi Password</label>
                <div class="col-sm-4">
                    <input type="password" name="ulang_password"class="form-control" id="form" placeholder=""required>
                </div>
            </div>

        <div align="right" class="card-footer text-muted">
            *Copyright by D*
        </div>
    </form>

<script src="/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/vendor/aos/aos.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/vendor/typed.js/typed.umd.js"></script>
  <script src="/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/js/main.js"></script>
</body>
</html>