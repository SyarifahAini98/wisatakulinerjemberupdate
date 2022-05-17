<?php
if($kunjungan==1){
			echo '<img src="images/Logo Bintang.png" height="25" width="25" alt="Logo Bintang">';
		}else if($kunjungan==2){
			echo '<img src="images/Logo Bintang.png" height="25" width="25" alt="Logo Bintang">
			<img src="images/Logo Bintang.png" height="25" width="25" alt="Logo Bintang">';
		}else if($kunjungan==3){
			echo '<img src="images/Logo Bintang.png" height="25" width="25" alt="Logo Bintang">
			<img src="images/Logo Bintang.png" height="25" width="25" alt="Logo Bintang">
			<img src="images/Logo Bintang.png" height="25" width="25" alt="Logo Bintang">';
		}else if($kunjungan==4){
			echo '<img src="images/Logo Bintang.png" height="25" width="25" alt="Logo Bintang">
			<img src="images/Logo Bintang.png" height="25" width="25" alt="Logo Bintang">
			<img src="images/Logo Bintang.png" height="25" width="25" alt="Logo Bintang">
			<img src="images/Logo Bintang.png" height="25" width="25" alt="Logo Bintang">';
		}else if($kunjungan>=5){
			echo '<img src="images/Logo Bintang.png" height="25" width="25" alt="Logo Bintang">
			<img src="images/Logo Bintang.png" height="25" width="25" alt="Logo Bintang">
			<img src="images/Logo Bintang.png" height="25" width="25" alt="Logo Bintang">
			<img src="images/Logo Bintang.png" height="25" width="25" alt="Logo Bintang">
			<img src="images/Logo Bintang.png" height="25" width="25" alt="Logo Bintang">';
		}
echo '<font color="gold">('.$kunjungan.'x kunjungan)</font>';
?>