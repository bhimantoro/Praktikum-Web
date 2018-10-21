<!DOCTYPE html>
<html>
	<head>
		<title>
			Tugas Praktikum
		</title>
		<script type="text/javascript">
			function mulaiHitung() {
				interval = setInterval("hitung()", 1);
			}
			function hitung() {
				baris = document.tabel.baris.value;
				kolom = document.tabel.kolom.value;
				document.tabel.totalsel.value = baris*kolom;
			}
			function stopHitung() {
				clearInterval(interval);
			}
			
		</script>
		<style type="text/css">
			h3 {
				font-family: sans-serif;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<h3>Membuat Tabel Otomatis Sesuka Hati Pengguna dengan HTML, CSS, JavaScript dan PHP</h3>
		<form action="./hasil_tugaspraktikum_fix.php" method="post" name="tabel">
			<table align="center">
				<tr>
					<td>Masukkan Baris</td>
					<td><input type="text" name="baris" onFocus="mulaiHitung();" onBlur="stopHitung();"></td>
				</tr>
				<tr>
					<td>Masukkan Kolom</td>
					<td><input type="text" name="kolom" onFocus="mulaiHitung();" onBlur="stopHitung();"></td>
				</tr>
				<tr>
					<td>Masukkan Sel</td>
					<td><input type="text" name="jumlahsel"></td>
				</tr>
				<tr>
					<td>Total Sel</td>
					<td><input type="text" name="totalsel" readonly></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="submit" value="Yakin, gan?"></td>
				</tr>
			</table>
		</form>
	</body>
</html>