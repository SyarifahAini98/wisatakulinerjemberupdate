<?php
session_start();
if(isset($_SESSION['login'])){
?>
<html>
	<head><title>JEMBER</title></head>
<body>
<?php
if(isset($_POST['simpan'])){
	include('koneksi.php');
	$id=$_POST['id'];
	$judul=$_POST['judul'];
	$gambar=$_POST['gambar'];
	$link=$_POST['link'];
	$gambarawal= $_POST['gambarawal'];
	$gambar= $_POST['gambar'];
	if(empty($gambar)) {
		$gambar=$gambarawal;
	}else {
		$gambar=$gambar;
	}
	$update=mysql_query("UPDATE beritavideo SET judul='$judul',gambar='$gambar',link='$link' WHERE id_berita='$id'")or die(mysql_error());
	if($update){
		echo'Data berhasil disimpan!';
		echo'<a href="berita.php">Kembali</a>';
	}else{
		echo'Gagal menyimpan data!';
		echo'<a href="edit_beritavideo.php?id='.$id.'">Kembali</a>';
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