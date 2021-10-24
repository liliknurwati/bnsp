<?php 
	include 'koneksi.php';

	$nomor = $_POST['nomor'];
	$kategori = $_POST['kategori'];
	$judul = $_POST['judul'];
	
	$format = array('pdf', 'pdf');
	$nama = $_FILES['file']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$file_tmp = $_FILES['file']['tmp_name'];

	if(in_array($ekstensi, $format) === true){
		move_uploaded_file($file_tmp, "file/$nama");
		$query = mysqli_query($db, "INSERT INTO surat VALUES ('', '$nomor', '$kategori', '$judul', '$nama', now())");
		header("Location: pg_arsip.php?data=success");
	}
	else{
		header("Location: pg_arsip.php?data=file_salah");
	}
?>