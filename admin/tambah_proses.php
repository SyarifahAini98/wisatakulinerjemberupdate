<?php
session_start();
if(isset($_SESSION['login'])){
?>
<html>
	<head><title>JEMBER</title></head>
<body>
<?php
if(isset($_POST['tambah'])){
	include('koneksi.php');
	$judul=$_POST['judul'];
	$tgl_buat=date("Y-m-d");
	$gambar=$_POST['gambar'];
	$isi=$_POST['isi'];
	$kategori=$_POST['kategori'];
	$kunjungan='0';
	$input=mysql_query("INSERT INTO berita VALUES(NULL,'$judul','$tgl_buat','$tgl_buat','$gambar','$isi','$kategori','$kunjungan')")or
	die(mysql_error());
	if($input){
		echo'Data berhasil ditambahkan!';
		echo'<a href="tambah.php">Kembali</a>';
	}else{
		echo'Gagal menambahkan data!';
		echo'<a href="tambah.php">Kembali</a>';
	}
}else{
	echo'<script>window.history.back()</script>';
}
?>
</body>
</html>
<?php
}else{
	echo'<script>window.location="admin97.php"</script>';
}
?>