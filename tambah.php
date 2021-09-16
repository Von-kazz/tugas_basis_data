<?php 
require 'functions.php';

if( isset($_POST["submit"])){
	var_dump($_POST);

	if( tambah($_post) > 0){
		echo "
		<script>
			alert('Data berhasil ditambahkan');
			document.location.href = 'index.php';
		
		</script>
		";
	} else {
		echo "
		<script>
			alert('Data gagal ditambahkan');
			document.location.href = 'index.php';
		
		</script>
		";
	}

}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah data siswa</title>
</head>
<body>
	<h1>Tambah Data Siswa</h1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="nama">Nama</label>
				<input type="text" name="nama" id="nama">
			</li>
			<li>
				<label for="nis">NIS</label>
				<input type="text" name="nis" id="nis">
			</li>
			<li>
				<label for="jurusan">Jurusan</label>
				<input type="text" name="jurusan" id="jurusan">
			</li>
			<li>
				<label for="kelas">Kelas</label>
				<input type="text" name="kelas" id="kelas">
			</li>
			<li>
				<button type="submit" name="submit">Tambah!</button>
			</li>
		</ul>
	</form>
</body>
</html>