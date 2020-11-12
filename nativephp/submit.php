<?php 
	include('config/connect.php'); //Here we are including our connection to the server and the selected database
	//Here we are collecting all our form inputs to be submited into the database

	$surname = $_POST['surname'];
	$othernames = $_POST['othernames'];
	$email = $_POST['email'];
	$phone_no = $_POST['phone1'];
	$phone_no_2 = $_POST['phone2'];
	$gender = $_POST['radioInline'];
	$marital_stat = $_POST['mstatus'];
	$res_address = $_POST['resaddress'];
	
	$btn = $_REQUEST['submitContact'];


	if(isset($btn)) { //Here we are checking if the button (Submit) was clicked else nothing will happen after here


		$insertQuery = "insert into contacts(surname, othernames, email, phone_no_1, phone_no_2, gender, marital_status, residential_address, created_at) values('".$surname."', '".$othernames."', '".$email."', '".$phone_no."', '".$phone_no_2."', '".$gender."', '".$marital_stat."', '".$res_address."', CURRENT_TIMESTAMP)"; //here we have prepared the statement that will insert into the database

		// var_dump($insertQuery); exit;
		if (!$result = $dbconn->query($insertQuery)) {
			die('Error submitting your data '. $dbconn->error);
		}
			 // here we are confirming the insertion into the database.
		// echo "Data successfully submited into the database";
		header("Location: index.php");
	}
?>