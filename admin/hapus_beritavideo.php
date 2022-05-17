<?php
session_start();
if(isset($_SESSION['login'])){
?>
<?php
if(isset($_GET['id'])){
	include('koneksi.php');
	$id=$_GET['id'];
	$cek=mysql_query("SELECT id_berita FROM beritavideo where id_berita='$id'")or die(mysql_error());
	if(mysql_num_rows($cek)==0){
		echo'<script>window.history.back()</script>';
	}else{
		$del=mysql_query("DELETE FROM beritavideo WHERE id_berita='$id'");
		if($del){
			echo'Data berhasil dihapus!';
			echo'<script>window.history.back()</script>';
		}else{
			echo'Gagal menghapus data!';
			echo'<script>window.history.back()</script>';
		}
	}
}else{
	echo'<script>window.history.back()</script>';
}
?>
<?php
}else{
	echo'<script>window.location="admin97.php"</script>';
}
?>