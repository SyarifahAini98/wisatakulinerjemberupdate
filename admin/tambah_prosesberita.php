<?php
session_start();
if(isset($_SESSION['login'])){
?>
<?php
if(isset($_POST['tambah'])){
	include('koneksi.php');
	$judul=$_POST['judul'];
	$gambar=$_POST['gambar'];
	$link=$_POST['link'];
	$input=mysql_query("INSERT INTO beritavideo VALUES(NULL,'$judul','$gambar','$link')")or
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
<?php
}else{
	echo'<script>window.location="admin97.php"</script>';
}
?>