<?php
$link = mysqli_connect("localhost", "root", "", "db_abiero");
	if($link === false){
    	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
	}
	print_r($_POST);

$fname=$_POST['fname']; 
$lname=$_POST['lname'];
$usname=$_POST['uname'];
$pw=$_POST['pass'];
$email=$_POST['bdate'];

	$sql="INSERT INTO record(fname,lname,u_username,password,email) VALUES('$fname', '$lname', '$usname', '$pw', '$email');";
		mysqli_query($link,$sql)or die (mysqli_error($link));

	
?>
