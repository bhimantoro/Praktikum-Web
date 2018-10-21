<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			background: #eee;
		}
		#wrap {
			width: 30%;
			height: 350px;
			margin: 0 auto;
			margin-top: 80px;
			border-radius: 10px;
			box-shadow: 3px 3px 3px #e5efed;
			background: #fff;
		}
		form input {
			margin: 10px 0;
		}
		form {
			margin-left: 15%;
			margin-top: 20px;
		}
		#username {
			width: 80%;
			background: #eee;
			height: 30px;
			border:none;
			border-radius: 3px;
			padding-left: 10px;
		}
		#password {
			width: 80%;
			background: #eee;
			height: 30px;
			border:none;
			border-radius: 3px;
			padding-left: 10px;
		}
		#submit {
			width: 80%;
			background: #00b7ff;
			height: 30px;
			border:none;
			border-radius: 3px;
			padding-left: 10px;
			color: #fff;
		}
		#top {
			height: 100px;
			color: white;
			background: #00b7ff;
			border-radius: 10px 10px 0 0;
			position: relative;
		}
		#top p {
			position: absolute;
			top: 18px;left: 40%;
			font-size: 24px;
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
<div id="wrap">
<div id="top">
	<p>LOGIN</p>
</div>
<form onsubmit="cek()" action="<?php $_SERVER['PHP_SELF']; ?>"  method="post" name="login" />
	<input type="text" name="username" id="username" placeholder="Username"
	value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>" />
	<br>
	<span id="chkuser">
	<input type="password" name="password" id="password" placeholder="Password"
	value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>" />
	<br>
	<span id="chkpass">
	<input type="checkbox" name="keep" value="tetap" 
	<?php if(isset($_POST['keep'])&&$_POST['keep'] == 'tetap'){echo "checked = 'checked'";} ?> />Tetap masuk<br>
	<input type="submit" name="in" value="SIGN IN" id="submit">
</form>
</div>
<div id="respon">
<?php 
	$user = "user123";
	$pass = "Password";
	if (isset($_POST['in'])) {
		$id = $_POST['username'];
		$sandi = $_POST['password'];
		if ($id == $user && $sandi == $pass) {
			echo "<h3>Selamat Datang, " . $id ."</h3>";
		}else {
			echo "<h3>Username atau Password Salah</h3>";
		}
	}
?>
</div>
</body>
</html>