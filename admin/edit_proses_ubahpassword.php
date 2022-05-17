<?php
session_start();
if(isset($_SESSION['login'])){
?>
<html>
	<head><title>JEMBER</title></head>
<body>
<?php
if(isset($_POST['simpan'])){
	include('koneksi.php');
	$username=$_POST['username'];
	$password=$_POST['password'];
	$update=mysql_query("UPDATE admin SET password=MD5('$password') WHERE username='$username'")or die(mysql_error());
	if($update){
		echo'Password berhasil diubah!';
		echo'<a href="ubahpassword.php">Kembali</a>';
	}else{
		echo'Gagal mengubah password!';
		echo'<a href="ubahpassword.php">Kembali</a>';
	}
}else{
	echo'<script>window.history.back()</script>';
}
?>
</body>
</html>
<?php
}else{
	echo'<script>window.location="admin97.php"</script>';
}
?>