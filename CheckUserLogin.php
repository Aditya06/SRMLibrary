<?php
include_once("dbconnect.php");
$db = new Database();
$db->connect();

$tbl_name="user_login";

$myusername=$_POST['uname'];
$mypassword=$_POST['pwd'];

$sql="SELECT * FROM $tbl_name WHERE uname='$myusername' and
pwd='$mypassword'";
$res=$db->selectData($sql);
$count=mysqli_num_rows($res);
if($count==1){
	/*$row=mysqli_fetch_assoc($res);
	$User_Type=$row["User_Type"];

	if ($User_Type=="Admin")
	{
		header("location:AdminHome.php");
	}
	else if ($User_Type=="Library Staff")
	{
		header("location:LibStaffHome.php");
	}
	else if ($User_Type=="Staff")
	{
		header("location:StaffHome.php");
	}
	else if ($User_Type=="Student")
	{
		header("location:StudentHome.php");
	}*/
  header("location:about.html");
}
else {
	header("location:userlogin1.html");
}
?>