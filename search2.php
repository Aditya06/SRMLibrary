<?php 
	extract($_GET);
	$mysqli = new mysqli('localhost', 'root', '', 'db_srm_library');

	if($mysqli->connect_errno > 0){
   		die('Unable to connect to database [' . $db->connect_error . ']');
	}
	
	$query = "INSERT INTO ss VALUES 
	('$pub_title')";
	$insert_row = $mysqli->query($query);
	
	if($insert_row){
		  header("location:browse.html");
	}
	
	?>