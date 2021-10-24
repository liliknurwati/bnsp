<?php
 include 'koneksi.php';

 $id = $_GET['id'];

 $query=mysqli_query($db, "DELETE FROM surat WHERE idSurat = '$id'");
 header("Location: index.php")
?>