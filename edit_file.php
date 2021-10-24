<?php 
	include 'koneksi.php';
	$id = $_POST['id'];
	$judul = $_POST['judul'];
	
	$format = array('pdf', 'pdf');
	$nama = $_FILES['file']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$file_tmp = $_FILES['file']['tmp_name'];

	if(in_array($ekstensi, $format) === true){
		move_uploaded_file($file_tmp, "file/$nama");
		$query = mysqli_query($db, "UPDATE surat SET judul = '$judul', file = '$nama' WHERE idSurat = $id");
		header("Location:index.php?data=success");
	}
	else{
		header("Location: index.php?data=file_salah");
	}
?>