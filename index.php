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
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
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
                    <div class="box">
                        <h3>Arsip Surat</h3>
                        Berikut ini adalah data-data surat yang telah diarsipkan. <br>
                        Klik "Lihat" pada kolom aksi untuk menampilkan detail surat.
                        <br><br>
                    </div>

                    <?php
                        include 'koneksi.php';
                    ?>
                    
                    <table id="example" class="table table-striped table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th>Nomor Surat</th>
                                <th>Kategori</th>
                                <th>Judul</th>
                                <th>Proses Surat</th>
                                <th>Waktu Pengarsipan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $data = mysqli_query($db, "SELECT * FROM surat");
                            while($row = mysqli_fetch_array($data)){
                            ?>
                            <tr>
                                <td><?php echo $row['nomorSurat']; ?></td>
                                <td><?php echo $row['kategori']; ?></td>
                                <td><?php echo $row['judul']; ?></td>
                                <td><?php echo $row['proses']; ?></td>
                                <td><?php echo $row['date']; ?></td>
                                <td>
                                    <button data-bs-toggle="modal" data-bs-target="#delete" class="btn btn-danger">Hapus</button>
                                    <a href="pg_file.php?id=<?php echo $row['idSurat']; ?>"><button class="btn btn-primary">Lihat >></button></a>
                                <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                 <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
                                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <font><b>Apakah Anda yakin ingin menghapus arsip surat ini?</b></font>
                                            </div>
                                            <hr>
                                             <div class="row">
                                                <div class="col d-grid">
                                                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                </div>
                                                <div class="col">
                                                    <a href="delete_arsip.php?id=<?php echo $row['idSurat']; ?>">
                                                    <div class="d-grid">
                                                        <button type="button" class="btn btn-danger">Ya!</button>
                                                    </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </td>
                            </tr>
                             <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            } );
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
