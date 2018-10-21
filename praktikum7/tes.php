<!DOCTYPE html>
<html>
	<head>
		<title>Auto Generate Table</title>
		<style type="text/css">
			td {
				width: 50px;
				height: 50px;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<?php
			$kolom = $_POST['kolom'];
			$baris = $_POST['baris'];
			$jumlahsel = $_POST['jumlahsel'];
			// $bagi = $jumlahsel/$kolom;
			// $rows = ceil($bagi);
			$x=0;
			$start=1;
			// if ($jumlahsel<$kolom) {
			// 	echo "Jumlah sel harus lebih besar daripada kolom";
			// 	return false;
			// }
		?>	
		<table cellpadding="5" border="1" cellspacing="0">
		<?php
			while($x<=$baris) {
			  echo "<tr>";
			  for ($y = 0; $y < $kolom; $y++, $start++) {
			    if ($start <= $jumlahsel) echo "<td> $start</td>";
			  }
			  echo "</tr>";
			  $x++;
			}
		?>
	</body>
</html>