<!DOCTYPE html>
<html>
	<head>
		<title>Studi Kasus 1</title>
	</head>
	<body>
		<p>
			<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
				<label>Masukan Pekerjaan</label><br><br>
				<select name="sk1">
					<option
						<?php 
							if(isset($_POST['sk1']) && $_POST['sk1'] == "Designer")
							{
								echo "selected='selected'";
							}
						?> 
					value="Designer">
						Designer
					</option>
					<option
						<?php 
							if(isset($_POST['sk1']) && $_POST['sk1']  == "Freelancer")
							{
								echo "selected='selected'";
							}
						?> 
					value="Freelancer">
						Freelancer
					</option>
					<option
						<?php 
							if(isset($_POST['sk1']) && $_POST['sk1']  == "OP Warnet")
							{
								echo "selected='selected'";
							}
						?> 
					value="OP Warnet">
						OP Warnet
					</option>
					<option
						<?php 
							if(isset($_POST['sk1']) && $_POST['sk1']  == "Sutradara")
							{
								echo "selected='selected'";
							}
						?> 
					value="Sutradara">
						Sutradara
					</option>
					<option
						<?php 
							if(isset($_POST['sk1']) && $_POST['sk1']  == "Lainnya")
							{
								echo "selected='selected'";
							}
						?> 
					value="Lainnya">
						Lainnya
					</option>
				</select>
				<input type="submit" name="ok" value="Submit">
			</form>
		</p>
		<?php
			if (isset($_POST['sk1'])) {
				$kerja = $_POST['sk1'];
				if($kerja == "Lainnya")
				{
					echo "<p>Pekerjaan Anda tidak Terdaftar? Silahkan Hubungi Administrator. admin@webmaster.com</p>";
				}
				else
				{
					echo "<p>Pekerjaan Anda Adalah " . $kerja . "</p>";
				}
			}
		?>
	</body>
</html>