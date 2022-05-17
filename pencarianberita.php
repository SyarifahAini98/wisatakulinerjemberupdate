<html>
<body>
<?php
	include "admin/koneksi.php";
	include "admin/menu.php";
?>
<center>
<table border="0">
	<tr><td colspan="2" align="right"><form method="get" action="pencarianberita.php"><input type="text" name="cari_teks" value="<?php echo $_GET[cari_teks];?>"><input type="submit" name="cari" value="Cari" ></form></td></tr>
</table>
<table border="0" width="1000" bgcolor="white">
<?php
	if($_GET['cari_teks']<>''){
	$cari_teks= $_GET['cari_teks']; //get the nama value from form
		echo '
		<tr><td>
		<center><br>
		<table border="0">
		<tr valign="top"><td>';
		$no=1;
		$per_page = 9;
		
		$page_query = mysql_query("SELECT COUNT(*) FROM beritavideo where judul like '%$cari_teks%'");
		$pages = ceil(mysql_result($page_query, 0) / $per_page);
		
		$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
		$start = ($page - 1) * $per_page;
		$query="select id_berita,judul,gambar,link,kunjungan from beritavideo where judul like '%$cari_teks%'order by kunjungan DESC limit $start, $per_page";
		$sql=mysql_query($query);
		while($hasil=mysql_fetch_array($sql)){
			$id=$hasil['id_berita'];
			$judul=$hasil['judul'];
			$gambar=$hasil['gambar'];
			$link=$hasil['link'];
			$kunjungan=$hasil['kunjungan'];
			echo'<div id="beritavideo">';
			include "kunjunganberitavideo.php";
			echo '<img src="images/'.$gambar.'" class="mode7" height="135" width="300" title="'.$gambar.'" alt="'.$gambar.'"><br><a href="beritavideo.php?id='.$id.'">'.$judul.'</a><br></div>
			';
		}
		$no++;
		echo '</td></tr></table>';
		}else{
		echo '<script>window.location="index.php"</script>';
	}
?>
<tr><td colspan="2">
<section class="container">
<nav class="pagination">
<?php
	if($pages >= 1 && $page <= $pages){
		for($x=1; $x<=$pages; $x++){
			echo ($x == $page) ? '<a href="?cari_teks='.$cari_teks.'&page='.$x.'"><span>'.$x.'</span></a></b> ' : '<a href="?cari_teks='.$cari_teks.'&page='.$x.'">'.$x.'</a> ';
		}
	}
?>
</nav>
</section>
</td></tr>
</table>
<?php
	include 'admin/footer.php';
?>
</body>
</html>