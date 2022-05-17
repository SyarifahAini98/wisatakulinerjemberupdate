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
	$query=mysql_query("SELECT * FROM berita where kategori='budaya'")or die('perintah sql salah');
	$sql = "SELECT count(*) AS jumlah FROM berita where kategori='budaya'";
	if(mysql_num_rows($query)==0){
	echo'<tr><td><center>Tidak ada data!</center></td></tr>';
	}else{
		$no=1;
		$per_page = 5;
		
		$page_query = mysql_query("SELECT COUNT(*) FROM berita where kategori='budaya'");
		$pages = ceil(mysql_result($page_query, 0) / $per_page);
		$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
		$start = ($page - 1) * $per_page;
		$query="select judul,gambar,isi,id_berita from berita where kategori='budaya' order by id_berita limit $start, $per_page";
		$sql=mysql_query($query);
		while($hasil=mysql_fetch_array($sql)){
			$judul=$hasil['judul'];
			$gambar=$hasil['gambar'];
			$isi=$hasil['isi'];
			$id=$hasil['id_berita'];
			echo'<tr><td><font color="red">'.$judul.'</font><br><br>
			<center>
			<img src="../images/'.$gambar.'" class="img5" width="500" title="'.$gambar.'" alt="'.$gambar.'"></center>
			<br>
			';
			echo $isi;
			echo'<a href="edit.php?id='.$id.'">Edit</a> <a href="hapus.php?id='.$id.'"onclick="return confirm(\'Yakin?\')">Hapus</a><br><br></td></tr>';
			$no++;
		}
	}
?>
<tr><td colspan="2">
<section class="container">
<nav class="pagination">
<?php
	if($pages >= 1 && $page <= $pages){
		for($x=1; $x<=$pages; $x++){
			echo ($x == $page) ? '<a href="?page='.$x.'"><span>'.$x.'</span></a></b> ' : '<a href="?page='.$x.'">'.$x.'</a> ';
		}
	}
?>
</nav>
</section>
</td></tr>
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