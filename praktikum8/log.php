<?php
	$user = "jajan9";
	$pass = "Surajang";		
	if (isset($_POST['masuk'])) {
		$id = $_POST['username'];
		$pw = $_POST['password'];
		if ($id == $user && $pw == $pass) {
			echo "<h3>Selamat Datang, " . $id . "</h3>";
		}
		elseif ($id == null && $pw == null) {
			echo "<h3>Username dan/atau Password Kosong</h3>";
		}
		else {
			echo "<h3>Username atau password Salah </h3>";
		}
	}
	else {
		return false;
	}
?>