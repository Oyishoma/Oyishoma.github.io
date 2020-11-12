<?php 
	$server = "localhost";
	$uname = "root";
	$upass = "root";
	$db = "peter_contact_register";

	$dbconn = new mysqli($server, $uname, $upass, $db);
	if ($dbconn ===false) {
		die("connection not established, please check the parameters and try again ". mysqli_connect_error());
	}

	// echo "Connection established successfully";
?>