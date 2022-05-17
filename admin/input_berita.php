<?php
session_start();
if(isset($_SESSION['login'])){
?>
<html>
<head><title>JEMBER</title></head>
<body>
<table>
<form action="" method="POST" name="input">
<table border="1">
<tr><td>Judul</td><td>:</td><td><input type="text" name="judul"></td></tr>
<tr><td>Gambar</td><td>:</td><td><input type="file" name="gambar" value="Gambar"></td></tr>
<tr><td>Isi</td><td>:</td><td><textarea rows="10" cols="100" name="isi"></textarea></td></tr>
<tr><td>Kategori</td><td>:</td><td><select name="kategori">
	<option value="Kuliner">Kuliner</option>
	<option value="Oleh-Oleh">Oleh-Oleh</option>
	<option value="Resep">Resep</option>
	<option value="Wisata">Wisata</option>
	<option value="Budaya">Budaya</option>
	<option value="Berita">Berita</option>
</select></td></tr>
<tr><td colspan="2"></td><td><input type="submit" name="input" value="Input Berita"><input type="reset" name="reset" value="Batal"></td></tr>
</table>
</form>
</table>
<br>
</body>
</html>
<?php
}else{
	echo'<script>window.location="admin97.php"</script>';
}
?>