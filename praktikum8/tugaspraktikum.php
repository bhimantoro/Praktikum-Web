<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Metode POST</title>
		<style type="text/css">
			.login {
				margin: auto;
				padding: 15% 0 0;
			}
			html * {
				font-family: sans-serif;
				font-size: 12px;
			}
			table {
				border: 3px solid #5f98f4;
				height: 175px;
				width: 275px;
				padding-top: 20px;
				padding-bottom: 20px;
				background-color: #bcd1f2;
				vertical-align: middle;
			}
			td {
				padding: 2px 50px 2px 50px;
			}
		</style>
		<script type="text/javascript">
			window.onload = function () {
				document.getElementById('username').focus();
			}
			function validasi() {
				var user = document.forms["login"]["username"].value;
				var pass = document.forms["login"]["password"].value;
				var valid = /[^a-zA-Z0-9\-\/]/;
				var pesan = '';

				if ((user=='') || (pass=='') || ((user=='')&&(pass=='')) || ((user=='')&&(pass!='')) || ((user!='')&&(pass==''))) {
					pesan = "Username dan/atau Password tidak boleh kosong";
				}
				<?php
					echo "else if (user != '' && pass != '' && (valid.test(user))) {
							pesan = 'tidak boleh menggunakan simbol';
						}";
				?>
				
				if (pesan != '') {
					alert(pesan);
					return false;
				}	
			}
		</script>
	</head>
	<body bgcolor="#80b0fc">
		<div class="login">
			<table align="center">
				<tr>
					<td>
						<label style="font-size: 36px; color: #5f98f4">Login</label>
					</td>
				<tr>
					<th>
						<hr width="260px" size="5px" style="background-color: #5f98f4; border: none">
					</th>
				</tr>
				<form action="log.php" method="post" name="login" onsubmit="return validasi()">
					<tr>
						<td>
							<label>Username</label><br>
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="username" size="25" id="username" /><br>
						</td>
					</tr>
					<tr>
						<td>
							<label>Password</label><br>
						</td>
					</tr>
					<tr>
						<td>
							<input type="password" name="password" size="25"/><br>
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" value="LOGIN" name="masuk"/>
						</td>
					</tr>
				</form>
			</table>
		</div>
	</body>
</html>