<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Halaman Utama</title>
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
        .box{
            margin-top: 10px;
            margin-left: 50px;
            padding: 10px;
        }
        th, td{
            padding-right: 10px;
            padding-left: 10px;
        }
        th{
            background: #f1f1f1;
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
                    <?php
                        include 'koneksi.php';
                    ?>
                    <div class="box">
                        <h3>Arsip Surat >> Lihat</h3>
                        
                        <?php
                            $id = $_GET['id'];
                            $data = mysqli_query($db, "SELECT * FROM surat WHERE idSurat = $id");
                            $row = mysqli_fetch_array($data);
                        ?>
                        Nomor : <?php echo $row['nomorSurat']; ?><br>
                        Kategori : <?php echo $row['kategori']; ?><br>
                        Judul : <?php echo $row['judul']; ?><br>
                        Pengirim : <?php echo $row['pengirim']; ?><br>
                        Tanggal Pelaksanaan : <?php echo $row['tanggal']; ?><br>
                        Proses Surat : <?php echo $row['proses']; ?><br>
                        Waktu Unggah : <?php echo $row['date']; ?>
                        <br><br>

                        <br><br>
                        <a href="index.php"><button class="btn btn-primary"><< Kembali</button></a>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">Edit/Ganti Data</button>
                    </div>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit/Ganti Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                            <div class="modal-body">
                                <form method="post" action="edit_file.php">
                                    <input type="hidden" name="id" value="<?php echo $row['idSurat']; ?>">
                                    <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><b>Nomor Surat</b></label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="nomor" value="<?php echo $row['nomorSurat']; ?>" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><b>Kategori</b></label>
                            <div class="col-sm-10">
                              <select class="form-select" aria-label="Default select example" name="kategori" value="<?php echo $row['kategori']; ?>" required>
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
                              <input type="text" class="form-control" name="judul" value="<?php echo $row['judul']; ?>" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><b>Pengirim</b></label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="pengirim" value="<?php echo $row['pengirim']; ?>" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><b>Tanggal Pelaksanaan</b></label>
                            <div class="col-sm-10">
                              <input type="date" class="form-control" name="tanggal" value="<?php echo $row['tanggal']; ?>" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><b>Proses Surat</b></label>
                            <div class="col-sm-10">
                              <select class="form-select" aria-label="Default select example" name="lanjutan" value="<?php echo $row['proses']; ?>" required>
                                  <option value="Diterima" selected>Diterima</option>
                                  <option value="Diproses">Diproses</option>
                                  <option value="Ditolak">Ditolak</option>
                              </select>
                            </div>
                        </div>
                                <hr>     
                                <button type="submit" class="btn btn-primary">Save Changes</button>           
                                </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                          </div>
                        </div>
                      </div>
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
