<?php 
	$user = "aidil";
	$pass = "aidil";
	if (isset($_POST['in'])) {
		$id = $_POST['username'];
		$sandi = $_POST['password'];
		if ($id == $user && $sandi == $pass) {
			echo "<h3>Selamat Datang, " . $id ."</h3>";
		}else {
			echo "<h3>Username atau Password Salah</h3>";
		}
	}
?>