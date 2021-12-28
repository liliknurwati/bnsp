<?php 
	include 'koneksi.php';
	$id = $_POST['id'];
	$nomor = $_POST['nomor'];
	$kategori = $_POST['kategori'];
	$judul = $_POST['judul'];
	$proses = $_POST['lanjutan'];
	$tgl = $_POST['tanggal'];
	$pengirim = $_POST['pengirim'];
	
		$query = mysqli_query($db, "UPDATE surat SET nomorSurat = '$nomor', kategori = '$kategori', judul = '$judul', pengirim = '$pengirim', proses ='$proses', tanggal = '$tgl'  WHERE idSurat = $id");
		header("Location: index.php?data=success");
?>