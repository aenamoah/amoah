<html>
<head>
		<title>Log In</title>
		<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
	<h2>LogIn</h2>
	</div>
	<form method="post" action="login.php">
		<div class="input-group">
			<label class="label">Username</label>
			<input type="text" name="username" placeholder="Enter username">
		</div>
		<div class="input-group">	
			<label class="label">Password</label>
			<input type="password" name="password" placeholder="Enter password">
		</div>
		<div class="input-group">
			<button type="submit" name="LogIn" class="button">Login</button>
		</div>

		<p>
			<h6>Do not have an account <a href=" ">Sign Up</a></h6>
		</p>

	</form>

</body>
</html>