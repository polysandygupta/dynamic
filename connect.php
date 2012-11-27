<?php
function connect() {
	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "test";
	$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die("could not connect to db...");
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
	}
	return $connection;
}
?>