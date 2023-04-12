<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<div class='header'>
		<div class='container'>
			<div class='wrap'>
				<div class='logo'>
					<img src='logo.png' height='80px' width='270px' alt=''>
				</div>
			</div>
		</div>
	</div>"

	<div class='login-content'>
		<form action='home.php'>
			<img src='profilepic.svg'>
			<h2 class='title'>Selamat Datang</h2>
			<div class='input-div one'>
				<div class='i'>
					<i class='fas fa-user'></i>
				</div>
				<div class='div'>
					<h5>Username</h5>
					<input type='text' class='input'>
				</div>
			</div>
			<div class='input-div pass'>
				<div class='i'>
					<i class='fas fa-lock'></i>
				</div>
				<div class='div'>
					<h5>Password</h5>
					<input type='password' class='input'>
				</div>
			</div>
			<input type='submit' class='btn' value='Login'>
		</form>
		<form action='signup.php'>
			<input type='submit' class='btn' value='Sign Up'>
		</form>
	</div>
	<script type='text/javascript' src='login.js'>
	</script>

</body>

</html>