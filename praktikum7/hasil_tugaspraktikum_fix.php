<!DOCTYPE html>
<html>
<head>
	<title>Auto Generate</title>
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
		$jumlahSel = $_POST['jumlahsel'];
		$total = $kolom*$baris;
		$itungBaris = $jumlahSel/$kolom;
		$batasBaris = ceil($itungBaris);
		$x = 0;
		$nilai = 1;
		if ($total>$jumlahsel) {
			echo "error";
			return false;
		}
	?>
	<ul>
		<li>Kolom       = <?php echo $kolom; ?></li>
		<li>Baris       = <?php echo $batasBaris; ?></li>
		<li>Jumlah Sel  = <?php echo $jumlahSel; ?></li>
	</ul>
	<table cellpadding="5" border="1" cellspacing="0">
		<?php
			while ($x <= $batasBaris) {
				echo "<tr>";
				for ($y=0; $y < $kolom; $y++, $nilai++) { 
					if ($nilai <= $jumlahSel) echo "<td> $nilai </td>";
					}
				echo "</tr>";
				$x++;
			}
		?>
	</table>
</body>
</html>