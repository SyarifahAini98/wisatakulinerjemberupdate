<?php
session_start();
if(isset($_SESSION['login'])){
?>
<?php
	include('koneksi.php');
	$id=$_GET['id'];
	$show=mysql_query("SELECT * FROM berita WHERE id_berita='$id'");
	if(mysql_num_rows($show)==0){
		echo'<script>window.history.back()</script>';
	}else{
		$hasil=mysql_fetch_assoc($show);
	}
?>
<html>
	<head><title>JEMBER</title>
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script></head>
<form action="edit_proses.php" method="post">
<input type="hidden" name="id" value="<?php echo $id;?>">
<table cellpadding="3" cellspancing="0">
<tr>
<td>Judul</td>
<td>:</td>
<td><input type="text" name="judul" value="<?php echo $hasil['judul'];?>"required></td>
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
<td>Isi</td>
<td>:</td>
<td><textarea class="ckeditor" cols="100" rows="20" name="isi"><?php echo $hasil['isi'];?></textarea></td>
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