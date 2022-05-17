<?php
	session_start();
	include'koneksi.php';
if(isset($_POST['input'])){
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	
	$query="SELECT * FROM admin WHERE username='$user' and password=MD5('$pass')";
	$sql=mysql_query($query);
	$jml=mysql_num_rows($sql);
	
	if($jml==1){
		$_SESSION['login']=$user;
		echo '<script>window.location="index.php"</script>';
	}else{
		echo '<script>window.location="admin97.php"</script>';
	}
}
?>