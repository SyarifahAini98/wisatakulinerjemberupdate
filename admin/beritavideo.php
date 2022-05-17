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
<?php
include "menu_admin.php";
?>
<center>
<table border="0" bgcolor="white">
<tr><td height="auto">
<center><div class="teks"><?php echo $hasil['judul'] ?></div><br>
	<embed src="<?php echo $hasil['link'] ?>"></embed>
	<br><br>
<a href="berita.php"><img src="../images/Logo Kembali.png" width="150"></a>
</center>
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