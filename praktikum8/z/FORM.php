<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript">
		window.onload = function() {
			document.getElementById("username").focus();
		};
		function cek() {
		var user = document.forms["login"]["username"].value;
		var pass = document.forms['login']['password'].value;
		if ((user == "")||(pass == "")) {
			alert("Username dan Password tidak boleh kosong");
			return false;
		}
		else if (/[^a-zA-Z0-9\-\/]/.test( user )) {
			alert("Tidak boleh menggunakan symbol");
			return false;
		}
	}
	</script>
</head>
<body>
	
	<div class="loginbox">
		<img src="ninja.png" class="avatar">
			<h1>Login Here</h1>
			<form onsubmit="cek()" action="PHP_FORM.php"  method="post" name="login" />
				<p>Username</p>
				<input type="text" name="username" id="username" placeholder="Username"
	value="Username" />
				<p>Password</p>
				<input type="password" name="password" id="password" placeholder="Password"
	value="Password" />
				<input type="submit" name="in" value="Login" id="submit">
				<a href="#">Forgot your password?</a><br>
				<a href="#">Create Account</a>
			</form>
<div id="respon">

</div>

</body>
</html>