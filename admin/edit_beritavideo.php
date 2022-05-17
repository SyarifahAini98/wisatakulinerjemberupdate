<?php
session_start();
if(isset($_SESSION['login'])){
?>
<?php
	include('koneksi.php');
	$id=$_GET['id'];
	$show=mysql_query("SELECT * FROM beritavideo WHERE id_berita='$id'");
	if(mysql_num_rows($show)==0){
		echo'<script>window.history.back()</script>';
	}else{
		$hasil=mysql_fetch_assoc($show);
	}
?>
<html>
	<head><title>JEMBER</title></head>
<form action="edit_prosesberitavideo.php" method="post">
<input type="hidden" name="id" value="<?php echo $id;?>">
<table cellpadding="3" cellspancing="0">
<tr>
<td>Judul</td>
<td>:</td>
<td><input type="text" name="judul" value="<?php echo $hasil['judul'];?>"></td>
</tr>
<tr>
<td>Gambar</td>
<td>:</td>
<td>
<?php echo '<img src="../images/'.$hasil['gambar'].'" class="img5" width="500" title="'.$hasil['gambar'].'" alt="'.$hasil['gambar'].'">'; ?>
<input type="hidden" name="gambarawal" value="<?php echo $hasil['gambar']; ?>" /><br>
<input type="file" name="gambar" value="<?php echo $hasil['gambar']; ?>" />
</td>
</tr>
<tr>
<td>Link</td>
<td>:</td>
<td><input type="text" name="link" value="<?php echo $hasil['link'];?>"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td></td>
<td><input type="submit" name="simpan" value="Simpan"></td>
</tr>
</table>
</form>
</body>
</html>
<?php
}else{
	echo'<script>window.location="admin97.php"</script>';
}
?>