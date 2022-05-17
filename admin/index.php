<?php
session_start();
if(isset($_SESSION['login'])){
?>
<html>
<body>
<?php
	include "koneksi.php";
	include "menu_admin.php";
?>
<center>
<table border="0" bgcolor="white">
<?php
	$query=mysql_query("SELECT * FROM berita where kategori='index'")or die('perintah sql salah');
	$sql = "SELECT count(*) AS jumlah FROM berita where kategori='index'";
	$queryj = mysql_query($sql);
	$result = mysql_fetch_array($queryj);
	if(mysql_num_rows($query)==0){
	echo'<tr><td><center>Tidak ada data!</center></td></tr>';
	}else{
		$query="select judul,gambar,isi,id_berita from berita where kategori='index' order by id_berita";
		$sql=mysql_query($query);
		while($hasil=mysql_fetch_array($sql)){
			$judul=$hasil['judul'];
			$gambar=$hasil['gambar'];
			$isi=$hasil['isi'];
			$id=$hasil['id_berita'];
			echo'<tr><td><center><div class="teks">'.$judul.'</div><br>
			<img src="../images/'.$gambar.'" class="img5" width="500" title="'.$gambar.'" alt="'.$gambar.'"><br><br></center>
			';
			echo $isi;
			echo'<a href="edit.php?id='.$id.'">Edit</a> <a href="hapus.php?id='.$id.'"onclick="return confirm(\'Yakin?\')">Hapus</a><br><br></td></tr>';
			$no++;
		}
	}
?>
</table>
<?php
	include 'footer.php';
?>
</body>
</html>
<?php
}else{
	echo'<script>window.location="admin97.php"</script>';
}
?>