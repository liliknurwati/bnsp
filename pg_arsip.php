<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Halaman Arsip</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/5c0904304f.js"></script>
    </head>
    <style type="text/css">
        a{
            text-decoration: none;
        }
        .box_form{
            padding: 20px;
        }
        .box-btn{
            text-decoration: none;
            font-weight: bold;
            background: #f1f1f1;
            padding: 8px;
            width: 120px;
            border-radius: 10px;
        }
    </style>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="list-group list-group-flush">
                    <font class="text-center"><br><b>Menu</b><br><b>---------</b></font>
                    <a class="list-group-item-action list-group-item-light p-3" href="pg_arsip.php"><i class="fa fa-star"> </i> <b>Arsip</b></a>
                    <a class="list-group-item-action list-group-item-light p-3" href="index.php"><i class="fa fa-star"> </i> <b>Data Arsip</b></a>
                    <a class="list-group-item-action list-group-item-light p-3" href="pg_about.php"><i class="fa fa-info-circle"></i> <b>About</b></a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
        
                <!-- Page content-->
                <div class="container-fluid">
    
                    <div class="box_form">
                        <h1>Arsip Surat >> Unggah</h1>
                        Catat surat yang telah diterima dan prosesnya<br>
                        Catatan: <br>
                        
                        <br><br><br>
                        <form method="post" action="insert_arsip.php">
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><b>Nomor Surat</b></label>
                            <div class="col-sm-3">
                              <input type="text" class="form-control" name="nomor" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><b>Kategori</b></label>
                            <div class="col-sm-4">
                              <select class="form-select" aria-label="Default select example" name="kategori" required>
                                  <option value="Undangan" selected>Undangan</option>
                                  <option value="Pengumuman">Pengumuman</option>
                                  <option value="Nota Dinas">Nota Dinas</option>
                                  <option value="Pemberitahuan">Pemberitahuan</option>
                              </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><b>Judul</b></label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="judul" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><b>Pengirim</b></label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="pengirim" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><b>Tanggal Pelaksanaan</b></label>
                            <div class="col-sm-3">
                              <input type="date" class="form-control" name="tanggal" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><b>Proses Surat</b></label>
                            <div class="col-sm-4">
                              <select class="form-select" aria-label="Default select example" name="lanjutan" required>
                                  <option value="Diterima" selected>Diterima</option>
                                  <option value="Diproses">Diproses</option>
                                  <option value="Ditolak">Ditolak</option>
                              </select>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="box-btn">
                                    <a href="index.php"><< Kembali</a>
                                </div>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                        </form>
                        <br>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
