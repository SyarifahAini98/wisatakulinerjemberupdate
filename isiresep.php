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
<img src="admin/images/<?php echo $hasil['gambar']?>" class="img6" width="500" title="<?php $hasil['gambar']?>" alt="<?php $hasil['gambar']?>"><br><br>
<table width="50%" border="0">
<tr><td><?php echo $hasil['isi'];
	//update kunjungan
	$suka=mysql_query("UPDATE berita SET kunjungan=kunjungan+1 WHERE id_berita='$id'")or die(mysql_error());?>
</td></tr>
</table>
<a href="resep.php"><img src="admin/images/Logo Kembali.png" width="150"></a>
</center>
</td></tr>
</table>
    <?php
		include 'admin/footer.php';
	?>
</body>
</html>