<?php 
if(isset($_POST['nama'])){
	$nama = $_POST['nama'];
	$npm  = $_POST['npm'];
	$kelas = $_POST['kelas'];

	echo "Nama Anda :<b>$nama</b><br>";
	echo "Npm Anda :<b>$npm </b><br>";
	echo "Kelas Anda :<b>$kelas </b>";
}


 ?>