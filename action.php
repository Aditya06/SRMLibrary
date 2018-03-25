<?php 
	extract($_POST);
	$mysqli = new mysqli('localhost', 'root', '', 'db_srm_library');

	if($mysqli->connect_errno > 0){
   		die('Unable to connect to database [' . $db->connect_error . ']');
	}

	$query = "INSERT INTO contact VALUES 
('$fname','$lname','$locate','$subject')";

	$insert_row = $mysqli->query($query);

	if($insert_row){
		  header("location:submitissue.html");
	}
	else{
   		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
     ?>