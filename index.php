<!DOCTYPE html>
<?php 
$username = "";
if (isset($_POST["login"])) {
	include 'connect.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
}
 ?>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<h1>Login form</h1>
		<form method="POST" action="index.php">
			<label>Username</label>
			<input type="text" name="username"><br>
			<label>Password</label>
			<input type="password" name="password"><br>
			<button type="submit" name="login">Log in</button>
		</form>
	</div>
</body>
</html>
<?php 
if(isset($_POST['login'])) {
	$query = "SELECT * FROM login WHERE username='".username."' AND password='".password."'";
	$sql = mysqli_query($conn, $query) or die ('Query "'. $query .'" gagal : <br>' . mysqli_last_error());

	$query = "SELECT * FROM login WHERE username='".$user."'";
	$sqlUsr = mysqli_query($conn, $query) or die ('Query "'. $query .'" gagal : <br>' . mysqli_last_error());
	if (mysqli_num_rows($sql) == 0) {
		echo '<script language="javascript">alert("Username tidak ditemukan!");</script>';
	} else {
		echo '<script language="javascript">alert("Password salah!")</script>';
	}
 } else {
 	header('location:admin.php');
 }
 ?>
