<?php
    session_start();
    include_once('function/Db_Class.php');
    $obj = new Db_Class();
    // $pasien = $obj->getPasien();
    // while($data = pg_fetch_object($pasien)):
    //     echo $data->nik." ";
    // endwhile;
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <title>E-Pasien</title>
    </head>
    <body>
        <div class="row">
            <div class="col-12">
            <section class="h-100 gradient-form" style="background-color: #eee;">
                <div class="container py-5 h-100">

                    <?php if(isset($_GET['error'])){ ?>
                    <div class="alert alert-danger" role="alert">
                    <?php $tipe = @$_GET['error']; if($tipe=="account"){ echo "Akun Tidak Ditemukan"; }else if($tipe=="password"){ echo "Password Salah !"; }?>
                    </div>
                    <?php } ?>

                    <?php if(isset($_GET['register'])){ ?>
                    <div class="alert alert-success" role="alert">
                    <?php $tipe = @$_GET['register']; if($tipe=="success"){ echo "Registrasi Berhasil, Silahkan Login"; }?>
                    </div>
                    <?php } ?>

                    <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-10">
                        <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">

                                <div class="text-center">
                                <img src="logo.png"
                                    style="width: 185px;" alt="logo">
                                <h4 class="mt-1 mb-5 pb-1">LOGIN</h4>
                                </div>

                                <form method="POST" action="function/action.php">
                                <p>Please login to your account</p>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example11">Email</label>
                                    <input type="email" name="email" id="form2Example11" class="form-control"
                                    placeholder="Email address" required/>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example22">Password</label>
                                    <input type="password" name="password" id="form2Example22" class="form-control" required/>
                                </div>

                                <div class="text-center pt-1 mb-5 pb-1">
                                    <button type="submit" name="action" value="login"  class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Log
                                    in</button>
                                    <!-- <a class="text-muted" href="#!">Forgot password?</a> -->
                                </div>

                                <div class="d-flex align-items-center justify-content-center pb-4">
                                    <p class="mb-0 me-2">Belum Punya Akun?</p> &nbsp;
                                    <a href="register.php" class="btn btn-outline-danger">Daftar Disini</a>
                                </div>

                                </form>

                            </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                <h4 class="mb-4">PMI E-Pasien</h4>
                                <p class="small mb-0">Aplikasi ini dibuat untuk memenuhi test tahap akhir PMI Bogor.<br><br>dibuat oleh : abdul karim hidayat</p>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </section>
            </div>
        </div>
    </body>
</html>