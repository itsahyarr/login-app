<?php 

$host = "localhost";
$port = "5432";
$user = "postgres";
$password = "postgres";
$dbname = "login";
$dsn = "host=" . $host . " port=" . $port " dbname=" . $dbname . " user=" . $user . " password=" . $password;

$conn = pg_connect($dsn) or die ('Tidak dapat tersambung : ' . pg_last_error());

pg_query($conn, "CREATE TABLE IF NOT EXIST login (
	id SERIAL PRIMARY KEY,
	username VARCHAR(255) NOT NULL,
	password VARCHAR(255) NOT NULL
)") or die ('Gagal membuat tabel login : ' . pg_last_error());

$sql = "SELECT * FROM login WHERE username='admin' AND password='password'";
$result = pg_query($conn, $sql) or die ('Query "'. $sql .'" gagal : <br>' . pg_last_error());
$cekUser = pg_num_rows($result);

if ($cekUser == 0) {
	$sql = "INSERT INTO login (username, password) VALUES ('admin', 'password')";
	$result = pg_query($conn, $sql) or die ('Query "'. $sql .'" gagal : <br>' . pg_last_error());
}

 ?>