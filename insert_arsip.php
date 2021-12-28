<?php 
	include 'koneksi.php';
	$nomor = $_POST['nomor'];
	$kategori = $_POST['kategori'];
	$judul = $_POST['judul'];
	$proses = $_POST['lanjutan'];
	$tgl = $_POST['tanggal'];
	$pengirim = $_POST['pengirim'];
		$query = mysqli_query($db, "INSERT INTO surat VALUES ('', '$nomor', '$kategori', '$judul', '$pengirim', '$proses', '$tgl', now())");
		header("Location: pg_arsip.php?data=success");
?>