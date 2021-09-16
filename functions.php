<?php
$conn = mysqli_connect("localhost", "root","","data_siswa");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];

    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;

}

function tambah($post){
    global $conn;
    $nama = htmlspecialchars ($_POST["nama"]);
	$nis = htmlspecialchars ($_POST["nis"]);
	$jurusan = htmlspecialchars ($_POST["jurusan"]);
	$kelas = htmlspecialchars ($_POST["kelas"]);

	$query = "INSERT INTO data_siswa
	          VALUES
			('','$nama', '$nis', '$jurusan', 'kelas')  
			  ";
			  mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);

}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM data_siswa WHERE id = $id" );
    return mysqli_affected_rows($conn);
}


?>