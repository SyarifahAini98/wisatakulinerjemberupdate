<?php
	include('admin/koneksi.php');
	$id=$_GET['id'];
	$show=mysql_query("SELECT * FROM berita WHERE id_berita='$id'");
	if(mysql_num_rows($show)==0){
		echo'<script>window.history.back()</script>';
	}else{
		$hasil=mysql_fetch_assoc($show);
	}
?>
<?php
	include "admin/menu.php";
?>
<center>
<table border="0" width="1000" bgcolor="white">
<tr><td height="auto">
<center>
<div class="teks"><?php echo $hasil['judul'] ?></div></center><br>
<center>
<img src="images/<?php echo $hasil['gambar']?>" class="img5" width="500" title="<?php $hasil['gambar']?>" alt="<?php $hasil['gambar']?>"></center><br>
	<?php
	$isi=$hasil['isi'];
	$id=$hasil['id_berita'];
	echo $isi;
	//update kunjungan
	$suka=mysql_query("UPDATE berita SET kunjungan=kunjungan+1 WHERE id_berita='$id'")or die(mysql_error());
	?>
	<center><img src="images/Logo Kembali.png" width="150" onclick="history.back(-1)">
</center><br>
</td></tr>
</table>
    <?php
		include 'admin/footer.php';
	?>
</body>
</html>