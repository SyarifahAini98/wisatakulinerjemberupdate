<?php
session_start();
if(isset($_SESSION['login'])){
?>
<html>
	<head>
	<title>JEMBER</title>
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script></head>
<body>
<?php
	include "koneksi.php";
	include "menu_admin.php";
?>
<center>
<table border="0" bgcolor="white">
<tr><td height="auto">
<center><div class="teks">Tambah Data</div></center><br>
<form action="tambah_proses.php" method="post">
<center><table border="0">
<tr><td colspan="3" bgcolor="#26272c"><font color="#ffffff">Form untuk menambah data kuliner, oleh-oleh, resep, wisata dan budaya</font></td></tr>
<tr><td>Judul</td><td>:</td><td><input type="text" name="judul"></td></tr>
<tr><td>Gambar</td><td>:</td><td><input type="file" name="gambar"></td></tr>
<tr><td>Isi</td><td>:</td><td><textarea class="ckeditor" cols="100" rows="20" name="isi"></textarea></td></tr>
<tr><td>Kategori</td><td>:</td><td><select name="kategori">
	<option value="wisata">Wisata</option>
	<option value="budaya">Budaya</option>
	<option value="kuliner">Kuliner</option>
	<option value="resep">Resep</option>
	<option value="oleholeh">Oleh-Oleh</option>
</select></td></tr>
<tr><td colspan="2"></td><td><input type="submit" name="tambah" value="Tambah"><input type="reset" name="batal" value="Batal"></td></tr>
</form>
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td colspan="3" bgcolor="#26272c"><font color="#ffffff">Form untuk menambah data berita video</font></td></tr>
<form action="tambah_prosesberita.php" method="post">
<tr><td>Judul</td><td>:</td><td><input type="text" name="judul"></td></tr>
<tr><td>Gambar</td><td>:</td><td><input type="file" name="gambar"></td></tr>
<tr><td>Link</td><td>:</td><td><input type="text" name="link" value="Contoh : https://www.youtube.com/embed/0_HByxYbY1Y"></td></tr>
<tr><td colspan="2"></td><td><input type="submit" name="tambah" value="Tambah"><input type="reset" name="batal" value="Batal"></td></tr>
</form>
	</table></center>
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