<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$db = "oyishoma_peter_website";

	$dbconn = new mysqli($server, $username, $password, $db);
	if ($dbconn === false){
		die("Connection not established. Please check the parameters and try again "). mysqli_connect_error();
	}
	echo "connection established successfully";

?>