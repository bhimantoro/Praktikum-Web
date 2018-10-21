<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Demo</title>
	</head>
	<body>
		<?php
		echo 'Bhimantoro Suryo Admodjo';
		?>


		<?php
		echo 'Kode PHP di sini';
		// ...
		?>
		<p> Dokumen HTML </p>
		<?php
		echo 'Kode PHP di sini';
		// ...
		?>
	</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Demo</title>
</head>
<body>
	<p>Kode <?php echo "PHP";?> di HTML</p>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Demo Variabel</title>
</head>
<body>
<?php
// Deklarasi dan inisialisasi
$bil = 3;
echo $bil;
?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Demo Variabel</title>
</head>
<body>
<?php
// Deklarasi dan inisialisasi
$bil = 3;
// Dumping informasi mengenai variabel
var_dump($bil);
print_r($bil);
?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Demo Variabel</title>
</head>
<body>
<?php
$bil = 3;
var_dump($bil);
// Output: int(3)
$var = "";
var_dump($var);
// Output: string(0) ""
$var = null;
var_dump($var);
// Output: NULL
?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Cek Tipe</title>
</head>
<body>
<?php
$bil = 3;
var_dump(is_int($bil));
// Output: bool(true)
$var = "";
var_dump(is_string($var));
// Output: bool(true)
?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Casting Tipe</title>
</head>
<body>
<?php
$str = '123abc';
// Casting nilai vaiabel $str ke integer
$bil = (int) $str; // $bil = 123
echo gettype($str);
// Output: string
echo gettype($bil);
// Output: integer
?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Seleksi</title>
</head>
<body>
<?php
$a = 10;
$b = 5;
if ($a > $b) {
echo 'a lebih besar dari b';
}
?>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Seleksi if-else</title>
</head>
<body>
<?php
$a = 10;
$b = 5;
if ($a > $b) {
echo 'a lebih besar dari b';
} else {
echo 'a TIDAK lebih besar dari b';
}
?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Seleksi if-elseif</title>
</head>
<body>
<?php
$a = 10;
$b = 5;
if ($a > $b) {
echo 'a lebih besar dari b';
} elseif ($a == $b) {
echo 'a sama dengan b';
} else {
echo 'a kurang dari b';
}
?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Seleksi switch</title>
</head>
<body>
<?php
$i = 0;
if ($i == 0) {
echo "i equals 0";
} elseif ($i == 1) {
echo "i equals 1";
} elseif ($i == 2) {
echo "i equals 2";
}
// Ekuivalen, dengan pendekatan switch
switch ($i) {
case 0:
echo "i equals 0";
break;
case 1:
echo "i equals 1";
break;
case 2:
echo "i equals 2";
break;
}
?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Loop while</title>
</head>
<body>
<?php
$i = 0;
while ($i < 10) {
echo $i;
// Inkremen counter
$i++;
}
?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Loop do-while</title>
</head
<body>
<?php
$i = 0;
do {
echo $i;
// Inkremen counter
$i++;
} while ($i < 10);
?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Loop for</title>
</head>
<body>
<?php
for ($i = 0; $i < 10; $i++) {
echo $i;
}
?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Loop foreach</title>
</head>
<body>
<?php
$arr = array(1, 2, 3, 4);
foreach ($arr as $value) {
echo $value;
}
?>
</body>
</html>

<?php
// Contoh prosedur
function do_print() {
// Mencetak informasi timestamp
echo time();
}
// Memanggil prosedur
do_print();
echo '<br />';
// Contoh fungsi penjumlahan
function jumlah($a, $b) {
return ($a + $b);
}
echo jumlah(2, 3);
// Output: 5
?>

<?php
/**
* Mencetak string
* $teks nilai string
* $bold adalah argumen opsional
*/
function print_teks($teks, $bold = true) {
echo $bold ? '<b>' .$teks. '</b>' : $teks;
}
print_teks('Indonesiaku');
// Mencetak dengan huruf tebal
print_teks('Indonesiaku', false);
// Mencetak dengan huruf reguler
?>

