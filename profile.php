<?php
session_start();
 
if (!isset($_SESSION['isLogin'])) {
    header("Location: index.php");
}

?>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E-Pasien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <body>
    <section style="background-color: #eee;">
    <div class="container py-5">
        <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile Pasien</li>
            </ol>
            </nav>
        </div>
        </div>

        <div class="row">
        <div class="col-lg-4">
            <div class="card mb-4">
            <div class="card-body text-center">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
                <h5 class="my-3"><?=$_SESSION['nama'];?></h5>
                <div class="d-flex justify-content-center mb-2">
                    <form method="post" action="function/action.php">
                        <button type="submit" name="action" value="logout" class="btn btn-danger">Logout</button>
                    </form>
                </div>
            </div>
            </div>
            <div class="card mb-4 mb-lg-0">
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">NIK</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?=$_SESSION['nik'];?></p>
                </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Full Name</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?=$_SESSION['nama'];?></p>
                </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?=$_SESSION['email'];?></p>
                </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Telp</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?=$_SESSION['telp'];?></p>
                </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Alamat</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?=$_SESSION['alamat'];?></p>
                </div>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="card mb-4 mb-md-0">
                <div class="card-body">
                    <p class="mb-4"><span class="text-primary font-italic me-1">Riwayat </span> Rekam Medis
                    </p>
                    <p class="mb-1" style="font-size: .77rem;">2020-01-01 </p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa debitis dolorem mollitia, quas at vel neque fuga animi tempora est, obcaecati voluptate odio cupiditate ab error molestias accusantium sequi esse?</p>
                </div>
                </div>
                <div class="card mb-4 mb-md-0">
                <div class="card-body">
                    <p class="mb-4"><span class="text-primary font-italic me-1">Riwayat </span> Rekam Medis
                    </p>
                    <p class="mb-1" style="font-size: .77rem;">2020-01-01 </p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa debitis dolorem mollitia, quas at vel neque fuga animi tempora est, obcaecati voluptate odio cupiditate ab error molestias accusantium sequi esse?</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
</body>
</html>