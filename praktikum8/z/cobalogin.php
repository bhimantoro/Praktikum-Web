<html>
	<head>
		<title>Welcome</title>
		<style type="text/css">
			* {
				font-family: sans-serif;
			}
			#respon {
				width: 30%;
				margin: 20px auto;
				background: #fff;
				text-align: center;
			}

			#respon h3 {
				padding: 8px;
				background: #00b7ff;
				color: white;

			}
		</style>
	</head>
	<body>
		<div id="respon">
			<?php 
				$user = "user123";
				$pass = "Password";
				if (isset($_POST['in'])) {
					$id = $_POST['username'];
					$sandi = $_POST['password'];
					if ($id == $user && $sandi == $pass) {
						echo "<h3>Selamat Datang, " . $id ."</h3>";
					}
					else {
						echo "<h3>Username atau Password Salah</h3>";
					}
				}
			?>
		</div>	
	</body>
</html>