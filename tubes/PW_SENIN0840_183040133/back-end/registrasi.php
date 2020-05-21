<?php 
	require 'functions.php';
	if (isset($_POST['registrasi'])) {
		if (registrasi($_POST) > 0 ) {
			echo "<script>
					alert('Registrasi Berhasil');
					document.location.href = 'login.php';
					</script>";
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Akun Baru</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/materialize.css">
	<style type="text/css">
		body {
			
			background-size: cover;
		}
		.container {
		background: rgba(197, 239, 247, .2);
		width: 400px;
		margin:30px auto;
		padding: 30px 20px;
		border-radius: 20px;
		}
		h3, p, input {
			color :black;
		}
	</style>
</head>
<body>

<div class="container">
	<h3>Tambah Akun Baru</h3>
	<form action="" method="post">
		<ul>
			<li>
				<label>Username : </label><br>
				<input type="text" name="username" required autocomplete="off" class="input">
			</li>
			<li>
				<label>Password : </label><br>
				<input type="password" name="password1" required class="input">
			</li>
			<li>
				<label>Confirm Password: </label><br>
				<input type="password" name="password2" required class="input">
			</li>
			<button class="btn waves-effect waves-light" type="submit" name="registrasi">Registration</button>
			</ul>
			<p><a href="login.php">Cancel</a></p>
	</form>
</div>
</body>
</html>