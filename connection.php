<?php 

$conn = "";

try {
	$host = "localhost";
	$port = "5432";
	$dbname = "login";
	$user = "postgres";
	$password = "postgres";

	$conn = new PDO(
		"pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password",
		$user, $password
	);

	$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
 }
 catch (PDOException $e) {
 	echo "Connection failed: " . $e->getMessage();
 }

 ?>
