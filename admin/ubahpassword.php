<?php
session_start();
if(isset($_SESSION['login'])){
	include('koneksi.php');
	$username=$_SESSION['login'];
	$query=mysql_query("SELECT * FROM admin WHERE username='$username'");
	$sql=mysql_query($query);
		while($hasil=mysql_fetch_array($sql)){
	$username=$hasil['username'];
	$password=$hasil['password'];
		}
?>
<html>
	<head>
	<title>JEMBER</title></head>
<body>
<?php
	include "menu_admin.php";
?>
<center>
<table border="0" bgcolor="white">
<tr><td height="auto">
<center><div class="teks">Ubah Password</div></center><br>
<form action="edit_proses_ubahpassword.php" method="post">
<center>
<table cellpadding="3" cellspancing="0" border="0">
<tr>
<td>Username</td>
<td>:</td>
<td><input type="hidden" name="username" value="<?php echo $username?>"><?php echo $username?></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td>
<input type="password" name="password" value="<?php echo $password?>"required></td>
</tr>
<tr>
<td>&nbsp;</td>
<td></td>
<td><input type="submit" name="simpan" value="Simpan"><input type="reset" name="batal" value="Batal"></td>
</tr>
</table>
</center>
</form>
</td></tr>
</table>
</center>
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