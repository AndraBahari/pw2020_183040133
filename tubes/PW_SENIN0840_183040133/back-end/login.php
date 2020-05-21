<?php 
	session_start();

	if (isset($_SESSION['username'])) {
		header("Location: index.php");
		exit;
	}

	require 'functions.php';

	if (isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];


		$cek_user = mysqli_query($conn, "SELECT * FROM user WHERE
			username = '$username'");


		if (mysqli_num_rows($cek_user) == 1) {
			
			$user = mysqli_fetch_assoc($cek_user);
			if (password_verify($password, $user['password']) ) {
				//login berhasil, masuk ke index
				$_SESSION['username'] = $username;
				header('Location: index.php');
				exit;
			}else{
				$error ='password salah';
			}

		}else{
			//login gagal
			$error = 'username belum terdaftar';
		}
	}

 ?>




<!DOCTYPE html>
<html>
<head>
	<title>Log-In</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/materialize.css">
	<style type="text/css">
		body {
			background-color: white;
		
			background-size: cover;
		}
		.container {
			background: rgba(197, 239, 247, .2);
			width: 350px;
			margin: 80px auto;
			padding: 30px 20px;
			border-radius: 20px;
		}
		.loginn {
			box-sizing : border-box;
			width: 100%;
			padding: 10px;
			font-size: 11pt;
			margin-bottom: 20px;
		}
		.login {
				background: #46de4b;
				color: white;
				font-size: 11pt;
				width: 100%;
				border: none;
				border-radius: 3px;
				padding: 10px 20px;
		}
		h2, p, label{
			color :black;
		}

	</style>
</head>
<body>
<div class="container">
	<div class="container2">
	<h2 align="center">Login</h2>

	<?php if( isset($error)): ?>
		<p><?= $error; ?></p>
	<?php endif ; ?>


<form action="" method="post">
	<ul>
		<li>
			<label>Username : </label><br>
			<input type="text" name="username" class="loginn" autocomplete="off">
		</li>
		<li>
			<label>Password : </label><br>
			<input type="password" name="password" class="loginn">
		</li>
		<li>
			<button class="btn waves-effect waves-light" type="submit" name="login" class="login">Log-In</button>
		</li>
	</ul>
</form>
<p>Not registered? <a href="registrasi.php">Buat Akun Baru</a></p>
<a href="../index.php">Back</a>
</div>
</div>
</body>
</html>