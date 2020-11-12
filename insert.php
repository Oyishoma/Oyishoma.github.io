<?php
	include("config/connect.php");
	//this includes connnection to the server and database 

	if(isset($_POST['name'])  || isset($_POST['email'])  ||  isset($_POST['subject'])  ||  isset($_POST['message'])  || isset($_REQUEST['submit'])){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$subject = $_POST['subject'];
			$message = $_POST['message'];

			$btn = $_REQUEST['submit'];
	}
	

	//check if button is clicked and then add info to databse, else nothing happens
	if(isset($btn)){
		$insertQuery = "insert into messages(name, email, subject, message)
		values('".$name."', '".$email."', '".$subject."', '".$message."')";

		// if(!$result = $dbconn->query($insertQuery)){
		// 	die('Error submitting your data'. $dbconn->error);
		// }
		
		if($result = $dbconn->query($insertQuery)){
			echo "inserted successfully";
		}
		Header("Location: success.php");	
	}

?>
