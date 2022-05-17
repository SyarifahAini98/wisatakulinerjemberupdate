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
<table border="0" width="1000" bgcolor="white">
<?php
	$query=mysql_query("SELECT * FROM beritavideo")or die('perintah sql salah');
	$sql = "SELECT count(*) AS jumlah FROM beritavideo";
	$queryj = mysql_query($sql);
	$result = mysql_fetch_array($queryj);
	if(mysql_num_rows($query)==0){
	echo'<tr><td><center>Tidak ada data!</center></td></tr>';
	}else{
		echo '
		<tr><td>
		<center><div class="teks">'.$result['jumlah'].' Berita Jember</div><br>
		<table border="0">
		<tr valign="top"><td>';
		$no=1;
		$per_page = 9;
		
		$page_query = mysql_query("SELECT COUNT(*) FROM beritavideo");
		$pages = ceil(mysql_result($page_query, 0) / $per_page);
		
		$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
		$start = ($page - 1) * $per_page;
		$query="select id_berita,judul,gambar,link from beritavideo order by id_berita limit $start, $per_page";
		$sql=mysql_query($query);
		while($hasil=mysql_fetch_array($sql)){
			$id=$hasil['id_berita'];
			$judul=$hasil['judul'];
			$gambar=$hasil['gambar'];
			$link=$hasil['link'];
			echo'
			<div id="beritavideo"><img src="../images/'.$gambar.'" class="mode7" height="135" width="300" title="'.$gambar.'" alt="'.$gambar.'"><br><a href="beritavideo.php?id='.$id.'">'.$judul.'</a><br><a href="edit_beritavideo.php?id='.$id.'">Edit</a> <a href="hapus_beritavideo.php?id='.$id.'"onclick="return confirm(\'Yakin?\')">Hapus</a></div>
			';
		}
		$no++;
		echo '</td></tr></table>';
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