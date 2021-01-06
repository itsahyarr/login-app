<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<h1>Login form</h1>
		<form method="POST" action="validate.php">
			<label>Username</label>
			<input type="text" name="username"><br>
			<label>Password</label>
			<input type="password" name="password"><br>
			<button type="submit" name="login">Log in</button>
		</form>
	</div>
</body>
</html>