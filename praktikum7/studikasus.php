<style type="text/css">
	h2 {
		text-align: center;
		font-family: sans-serif;
		color: blue;
	}
	hr {
		color: red;
	}
</style>

<?php
	date_default_timezone_set("Asia/Jakarta");
	$time = date("H");
?>

<?php
	if ($time >= "4" && $time < "10") {
?>
	<h2>Selamat Pagi</h2>
<?php
	} else if ($time >= "10" && $time < "15") {
?>
	<h2>Selamat Siang</h2>
<?php
	} else if ($time >= "15" && $time < "18") {
?>
	<h2>Selamat Sore</h2>
<?php
	} else if ($time >= "18" && $time < "24" && $time >= "0") {
?>
	<h2>Selamat Malam</h2>
<?php
	} else {
		echo "";
	}
?>
	<hr>
	<h2>
		<?php 
			echo date("H:i:s")." WIB"; 
		?>
	</h2>
