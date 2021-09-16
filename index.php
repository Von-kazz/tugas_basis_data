<?php 

require 'functions.php';
$siswa = query("SELECT * FROM siswa");


?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Siswa</title>
</head>
<body>

	<h1>Daftar Siswa</h1>

	<a href="tambah.php">Tambah data siswa</a>
	<br><br>


	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>NIS</th>
			<th>Jurusan</th>
			<th>Kelas</th>
			<th>Aksi</th>
		</tr>
		<?php $i=1; ?>
		<?php foreach($siswa as $row) : ?>
		<tr>
			<td><?= $i; ?></td>
			<td><?= $row["nama"]; ?></td>
			<td><?= $row["nis"]; ?></td>
			<td><?= $row["jurusan"]; ?></td>
			<td><?= $row["kelas"] ?></td>
			<td>
				<a href="hapus.php?nomer=<?= $row["nomer"]; ?>">Hapus</a>
			</td>
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>

	</table>

</body>
</html>