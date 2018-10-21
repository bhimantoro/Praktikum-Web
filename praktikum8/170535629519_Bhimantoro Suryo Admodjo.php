GET
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Metode GET</title>
	</head>
	<body>
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
		Nama
		<input type="text" name="nama" /> <br />
		<input type="submit" value="OK" />
		</form>
		<?php
		if (isset($_GET['nama'])) {
		echo 'Hallo, ' . $_GET['nama'];
		}
		?>
	</body>
</html>

POST

<!DOCTYPE html>
<html lang="en">
<head>
<title>Metode POST</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Nama
<input type="text" name="nama" /> <br />
<input type="submit" value="OK" />
</form>
<?php
if (isset($_POST['nama'])) {
echo 'Hallo, ' . $_POST['nama'];
}
?>
</body>
</html>

REQUEST

<!DOCTYPE html>
<html lang="en">
<head>
<title>Identifikasi Metode</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
Nama
<input type="text" name="nama" /> <br />
<input type="submit" value="OK" />
</form>
<?php
if (isset($_REQUEST['nama'])) {
echo 'Metode, ' . $_SERVER['REQUEST_METHOD'];
}
?>
</body>
</html>

Latihan 2

<!DOCTYPE html>
<html lang="en">
<head>
<title>Prefilling Text Field</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Nama
<input type="text" name="nama"
value="<?php
echo isset($_POST['nama']) ? $_POST['nama'] : '';
?>"
/> <br />
<input type="submit" value="OK" />
</form>
<?php
if (isset($_POST['nama'])) {
echo $_POST['nama'];
}
?>
</body>
</html>

Latihan 3

<!DOCTYPE html>
<html lang="en">
<head>
<title>Data Radio Button</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Jenis Kelamin
<input type="radio" name="sex" value="Pria" checked />Pria
<input type="radio" name="sex" value="Wanita" />Wanita <br />
<input type="submit" value="ok" />
</form>
<?php
if (isset($_POST['sex'])) {
echo $_POST['sex'];
}
?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Prefill Data Radio Button</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Jenis Kelamin
<input type="radio" name="sex" value="Pria" checked
<?php
if ($_POST['sex'] == 'Pria') {
echo 'checked="checked"';
}
?>
/>Pria
<input type="radio" name="sex" value="Wanita"
<?php
if ($_POST['sex'] == 'Wanita') {
echo 'checked="checked"';
}
?>
/>Wanita <br />
<input type="submit" value="ok" />
</form>
<?php
if (isset($_POST['sex'])) {
echo $_POST['sex'];
}
?>
</body>
</html>

Latihan 4

<!DOCTYPE html>
<html lang="en">
<head>
<title>Data Seleksi</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Pekerjaan
<select name="job">
<option value="Mahasiswa">Mahasiswa
<option value="ABRI">ABRI
<option value="PNS">PNS
<option value="Swasta">Swasta
</select> <br />
<input type="submit" value="ok" />
</form>
<?php
if (isset($_POST['job'])) {
echo $_POST['job'];
}
?>
</body>
</html>

Latihan 5

<!DOCTYPE html>
<html lang="en">
<head>
<title>Data Checkbox</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Jenis Kelamin
<input type="checkbox" name="hobby[]" value="Membaca"
/>Membaca
<input type="checkbox" name="hobby[]" value="Olahraga"
/>Olahraga
<input type="checkbox" name="hobby[]" value="Menyanyi"
/>Menyanyi <br />
<input type="submit" value="ok" />
</form>
<?php
// Ekstraksi nilai
if (isset($_POST['hobby'])) {
foreach ($_POST['hobby'] as $key => $val) {
echo $key . ' -> ' .$val . '<br />';
}
}
?>
</body>
</html>