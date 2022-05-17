<html>
<body>
<?php
	include "admin/koneksi.php";
	include "admin/menu.php";
?>
<center>
<table border="0">
	<tr><td colspan="2" align="right"><form method="get" action="pencarian.php"><input type="text" name="cari_teks" value="<?php echo $_GET[cari_teks];?>"><input type="submit" name="cari" value="Cari" ></form></td></tr>
</table>
<table border="0" bgcolor="white">
<?php
	$query=mysqli_query($koneksi,"SELECT * FROM berita where kategori='index'")or die('perintah sql salah');
	$sql = "SELECT count(*) AS jumlah FROM berita where kategori='index'";
	$queryj = mysqli_query($sql);
	$result = mysqli_fetch_array($queryj);
	if(mysqli_num_rows($query)==0){
	echo'<tr><td><center>Tidak ada data!</center></td></tr>';
	}else{
		$query="select judul,gambar,isi,id_berita from berita where kategori='index' order by id_berita";
		$sql=mysqli_query($koneksi,$query);
		while($hasil=mysqli_fetch_array($sql)){
			$judul=$hasil['judul'];
			$gambar=$hasil['gambar'];
			$isi=$hasil['isi'];
			$id=$hasil['id_berita'];
			echo'<tr><td><center><div class="teks">'.$judul.'</div><br>
			<img src="images/'.$gambar.'" class="img5" width="500" title="'.$gambar.'" alt="'.$gambar.'"><br><br></center>
			';
			echo $isi;
			echo'</td></tr>';
			$no++;
		}
	}
?>
</table>
<?php
	include 'admin/footer.php';
?>
</body>
</html>