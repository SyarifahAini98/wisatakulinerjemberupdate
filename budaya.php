<html>
<body>
<?php
include "admin/menu.php";
include "admin/koneksi.php";
?>
<center>
<table border="0">
	<tr><td colspan="2" align="right"><form method="get" action="pencarianbudaya.php"><input type="text" name="cari_teks" value="<?php echo $_GET[cari_teks];?>"><input type="submit" name="cari" value="Cari" ></form></td></tr>
</table>
<table border="0" width="1000" bgcolor="white">
<?php
	$per_page = 5;
	$page_query = mysql_query("SELECT COUNT(*) FROM berita where kategori='budaya'");
	$pages = ceil(mysql_result($page_query, 0) / $per_page);
	$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
	$start = ($page - 1) * $per_page;
	$query="select id_berita,judul,tgl_buat,tgl_update,gambar,isi,kategori,kunjungan from berita where kategori='budaya' order by kunjungan DESC limit $start, $per_page";
	$sql=mysql_query($query);
	while($hasil=mysql_fetch_array($sql)){
		$id=$hasil['id_berita'];
		$judul=$hasil['judul'];
		$gambar=$hasil['gambar'];
		$tgl_buat=$hasil['tgl_buat'];
		$tgl_update=$hasil['tgl_update'];
		$isi=$hasil['isi'];
		$kategori=$hasil['kategori'];
		$kunjungan=$hasil['kunjungan'];
		echo'<tr><td colspan="2"><div class="teks"><a href="isiberita.php?id='.$id.'" id="warna-tulisan">'.$judul.'</a></div></td></tr>
<tr><td width="200"><center><img src="images/'.$gambar.'" title="'.$gambar.'" alt="'.$gambar.'"></td><td>';
		include "kunjungan.php";
		echo substr($isi,0,250).'...<p align="right"><a href="isiberita.php?id='.$id.'"><img src="images/Baca Selengkapnya.jpg" class="mode7" height="25%" width="25%" alt="Baca Selengkapnya"></a></p></td></tr>';
	}
	echo'<tr><td colspan="2"></td></tr></table>';
?>
<table border="0"><tr><td>
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
	include 'admin/footer.php';
	?>
</body>
</html>