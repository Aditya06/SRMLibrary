<?php
   $con = mysqli_connect('localhost', 'root', '','db_srm_library') or die("Error connecting to database: ".mysqli_error());
   mysqli_select_db($con,'db_srm_library') or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>SRM University, Online Library Management</title>
    <link rel="stylesheet" type="text/css" href="css/MyStyle.css">
</head>
<body topmargin=0 style="background-image: linear-gradient(rgba(255,255,255,0.5),rgba(255,255,255,0.5)),url('images/srmback.jpg')">
    <div class="container">
	    <div class="header1">
        </div>

		<div class="header2">
			<img src="images/logo.jpg" width="175.15" height="100">
			<br>
	<h1 align="center">Online Library Management</h1>
		</div>

		<div class="header3">
		<nav class="navbar navbar-default">
		<div class="container-fluid">
    
			<ul class="nav navbar-nav">
				<li><a href="userlogin1.html">Home</a></li>
				<li><a href="about.html">About Us</a></li>
				<li><a href="p.html">Publications</a></li>
				<li class="active"><a href="browse.html">Browse By Subjects</a></li>
				<li><a href="contact1.html">Contact Us</a></li>
			</ul>
		</div>
		</nav>
</body>
<body>
<?php
    $query = $_GET['query']; 
     
    $min_length = 3;
    
     
    if(strlen($query) >= $min_length){ 
         
        $query = htmlspecialchars($query); 
        
         
        $query = mysqli_real_escape_string($con,$query);
        
         
        $raw_results = mysqli_query($con,"SELECT * FROM ss
            WHERE (`pub_title` LIKE '%".$query."%')") or die(mysqli_error($con));
             
        if(mysqli_num_rows($raw_results) > 0){
            while($results = mysqli_fetch_array($raw_results)){
            
             
                echo "<p><h3>".$results['pub_title']."</h3></p>";
                
            }
             
        }
        else{ 
            echo "No results";
        }
         
    }
    else{
        echo "Minimum length is ".$min_length;
    }
?>
</body>
</html>