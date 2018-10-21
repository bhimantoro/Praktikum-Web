<!DOCTYPE html>
<html>
<head>
	<title>Greeting PHP</title>
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
</head>
<body>
	<?php
		date_default_timezone_set("Asia/Jakarta");
		$jam = date("H");

		if ($jam >= "4" && $jam < "10") {
			echo "<h2>Selamat Pagi</h2>";
		}
		else if ($jam >= "10" && $jam < "15") {
			echo "<h2>Selamat Siang</h2>";
		}
		else if ($jam >= "15" && $jam < "18") {
			echo "<h2>Selamat Sore</h2>";
		}
		else if ($jam >= "18" && $jam < "24" && $jam >= "0") {
			echo "<h2>Selamat Malam</h2>";
		}
		else {
			echo "";
		}
	?>

	<hr>
	<h2 id="time"></h2>

	<script>
		function Timer() {
			var dt = new Date();
			document.getElementById('time').innerHTML = dt.getHours()+":"+dt.getMinutes()+":"+dt.getSeconds()+" WIB";
			setTimeout("Timer()", 0);
		}
		Timer();
	</script>
</body>
</html>