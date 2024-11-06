<?php
session_start();
session_regenerate_id();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="bootstrap-5.3.3/bootstrap-5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <?php require_once "inc/navbar.php" ?>
    <div class="container text-center">
        <div class="tes"></div>
        <!-- <div class="row">
            <div class="col-3 mt-3">
                <img src="img/download.jpeg" alt="gambar1" width="150">
            </div>
            <div class="col-6 text-center mt-5">
                <h1>SELAMAT DATANG DI PPKD JAKARTA PUSAT</h1>
                <p>Jl. Karet Pasar Baru Barat V No.23 - Karet Tengsin Jakarta Pusat</p>
            </div>
            <div class="col-3 mt-3">
                <img src="img/download.jpeg" alt="gambar2" width="150">
            </div>
        </div> -->
        <div class="container justify-content-center">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="card mt-3">
                        <div class="card-header text-center">
                            <h1>Manage Kasir</h1>
                        </div>
                        <div class="card-body">
                            <div class="table table-responsive">
                                <div class="mt-2 mb-2" align="left">
                                    <a href="tambah-transaksi.php" class="btn btn-primary btn-sm">Kasir</a>
                                </div>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Transaksi</th>
                                            <th>Tanggal Transaksi</th>
                                            <th>Struk Pembayaran</th>
                                            <th>Status Pembayaran</th>
                                            <th>Settings</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <footer class="shadow-sm mt-3" style="background-color: #D8BFD8; min-height:65px;">
                  <div class="row">
                  <div class="col-md-6 d-flex justify-content-between">
                      <p class="text-center ps-4 pt-3">Copyright &copy 2024 PPKD - Jakarta Pusat</p>
                  </div>
                  <div class="col-md-6 d-flex justify-content-end">
                  <p class="text-center pt-3 pe-4">Privacy Policy</p>
              </div>
          </footer> -->
        </div>
    </div>


    </div>
    <script src="bootstrap-5.3.3/bootstrap-5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>