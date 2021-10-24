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
                    <a class="list-group-item-action list-group-item-light p-3" href="pg_about.php"><i class="fa fa-info-circle"></i> <b>About</b></a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
        
                <!-- Page content-->
                <div class="container-fluid">
    
                    <div class="box_form">
                        <h1>Arsip Surat >> Unggah</h1>
                        Unggah surat yang telah terbit pada form ini untuk diarsipkan <br>
                        Catatan: <br>
                        - Gunakan File berformat PDF
                        <br><br><br>
                        <form method="post" action="insert_arsip.php" enctype="multipart/form-data">
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
                            <label class="col-sm-2 col-form-label"><b>File Surat (PDF)</b></label>
                            <div class="col-sm-3">
                              <input type="file" class="form-control" name="file" required>
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
                        <?php
                            if(isset($_GET['data']))
                            {
                                $data=$_GET['data'];
                            }
                            else
                            {
                                $data="";
                            }

                            $pesan="";
                            if($data=="success"){
                                $pesan="<div class='alert alert-success'>
                                          Data berhasil disimpan
                                        </div>";
                            }
                            if($data=="file_salah"){
                                $pesan="<div class='alert alert-danger'>
                                          Format File Salah, File harus PDF!.
                                        </div>";
                            }
                        ?>
                        <?php
                            echo $pesan;
                        ?>    
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
