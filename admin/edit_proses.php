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
	$tgl_update=date("Y-m-d");
	$gambar=$_POST['gambar'];
	$isi=$_POST['isi'];
	$gambarawal= $_POST['gambarawal'];
	$gambar= $_POST['gambar'];
	if(empty($gambar)) {
		$gambar=$gambarawal;
	}else {
		$gambar=$gambar;
	}
	$update=mysql_query("UPDATE berita SET judul='$judul',tgl_update='$tgl_update',gambar='$gambar',isi='$isi' WHERE id_berita='$id'")or die(mysql_error());
	if($update){
		echo'Data berhasil disimpan!';
		echo'<a href="index.php">Kembali</a>';
	}else{
		echo'Gagal menyimpan data!';
		echo'<a href="edit.php?id='.$id.'">Kembali</a>';
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