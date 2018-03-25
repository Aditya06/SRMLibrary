<?php 
	$query1 = $_GET['pub_title'];
	$mysqli = new mysqli('localhost', 'root', '', 'db_srm_library');

	if($mysqli->connect_errno > 0){
   		die('Unable to connect to database [' . $db->connect_error . ']');
	}
	
	$query = "DELETE from ss  
	where pub_title=$query1";
	$insert_row = $mysqli->query($query);
	
	if($insert_row){
		  header("location:browse.html");
	}	
	
	?>